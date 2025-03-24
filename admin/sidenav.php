<link rel="stylesheet" href="nav.css">
<nav>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <div class="upper">
        <div class="image">
            <img src="../assets/custom/images/1.jpg" style="border-radius:50%/50%;" width=100px height=100 alt="">
        </div>
        <div class="menus">
            <ul>
            <li <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/admin/dashboard.php") { ?>  class="active"   <?php   }  ?>><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="/nailart-1/admin/dashboard.php">dashboard</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/admin/users.php") { ?>  class="active"   <?php   }  ?>><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="/nailart-1/admin/users.php">users</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/admin/request.php") { ?>  class="active"   <?php   }  ?>><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="/nailart-1/admin/request.php">requests</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/admin/allbookings.php") { ?>  class="active"   <?php   }  ?>><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="/nailart-1/admin/allbookings.php">old bookings</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/nailart-1/admin/inquiry.php") { ?>  class="active"   <?php   }  ?> ><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="/nailart-1/admin/inquiry.php">Inquiry</a></li>
            </ul>
        </div>
    </div>
</nav>