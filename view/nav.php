
<!-- main navigation -->
   <div class="navbar">
     <div class="navbar-inner">
       <div class="container-fluid">
         <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="brand" href="#">Project name</a>
         <div class="nav-collapse collapse">


            <ul class="nav pull-right">
              <li id="fat-menu" class="dropdown">
                <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Welcome
<?php
                  print (!empty($_SESSION["username"]) ? $_SESSION["username"] : "Guest");
?>
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
<?php
                  print (  empty($_SESSION["username"]) ?
                    '<li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=auth&a=login">Login</a></li>
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=auth&a=new">Sign Up</a></li>
                    '
                    : "");

                  print (  !empty($_SESSION["username"]) ?
                    '<li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=home&a=profile&id='. $_SESSION["id"].'">Profile</a></li>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?q=auth&a=logout">Logout</a></li>'
                    : "");
?>

                </ul>
              </li>
            </ul>







               <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                 <li> Hello </li>
               </ul>
           </div>



         <ul class="nav">
           <li><a href="index.php">Home</a></li>
           <li><a href="index.php?q=prod">Products</a></li>
         </ul>
       </div><!--/.nav-collapse -->
    </div>
   </div>
 </div>
      <!-- end main navigation -->

 <!-- main content -->
 <div class="container-fluid">
   <div class="row-fluid">