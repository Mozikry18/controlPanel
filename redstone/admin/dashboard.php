<?php

session_start();
if (isset($_SESSION['UserName'])){
    $pageTitle = 'Dashboard';
    include 'init.php';
    
     /* Start dashboard page */  
    
   ?> 
    
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------- --><!-- ---------------------------------------------------------------------------------------------------------------------------------------------- --><!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="home-stats">
    <div class="container text-center">
        <h1><div class="text-center Dashboard">Dashboard</div></h1>
        <div class="row">
            
            <div class="col-md-6">
                <div class="stat">
                    <span class="label label-info">Total Members</span>
                    <span><a href= "members.php"><?php echo countItems('UserID', 'users') ?></a></span> 
                </div>    
            </div>
            
            
            <div class="col-md-6">
                <div class="stat">
                    <span class="label label-info">Pending Members</span>
                    <span><a href ="members.php?do=Manage&page=pending"><?php echo CheckItem("RegStatus", "users", 0)?></a></span>
                </div>
            </div>
           
        </div>
    </div>
</div>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------- --><!-- ---------------------------------------------------------------------------------------------------------------------------------------------- --><!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->

<?php

}
else {
    header('Location: index.php');
    exit();
}

