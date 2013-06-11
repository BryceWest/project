<?php

//$user_name = $_SESSION["username"];

$h=$_GET["h"];

// Lookup all hints from array if length of h is greater than zero
if (strlen($h) > 0) {
   $hint="";
   $sql = "SELECT a.username, p.name
            FROM  auth_user a, pic p
            WHERE a.picture = p.id";
    $res = mysql_query($sql);
while ( $row = mysql_fetch_array( $res) ) {
        $friend[] = $row;
}

$i = 0;
?> <ul class="dropdown-menu span4" role="menu" aria-labelledby="dropdownMenu"> <?php
    foreach ( $friend as $key => $item ) {
        if (strtolower($h) == strtolower(substr($item["username"],0,strlen($h)))) {
            if ($i < 3){
                if ($hint == "") {

                    $hint = '<li class="span2 row"><a tabindex="-1" href="index.php?q=home&a=fprofile&f='.$item["username"].'"><img src="' . "pics/".$item["name"].'" />'. $item["username"].'</a></li>';
                    $i++;
                }
                else {

                    $hint .= '<li class="divider"></li><li class="span2 row"><a tabindex="-1" href="index.php?q=home&a=fprofile&f='.$item["username"].'"><img src="' . "pics/".$item["name"].'" />'. $item["username"].'</a></li>';
                    $i++;
                }
            }
        }
    }
?>  </ul><?php
}
print $hint;

?>