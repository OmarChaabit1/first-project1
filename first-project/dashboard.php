<?php

//start use session 
    session_start();
    $user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/first-project.css">
    <title>dashboard</title>
</head>
<body>
    <div id="dashboard_main_container">
        <div class="dashboard-sidebar" id="dashboard_sidebar">

            <h3 class="dashboard-logo" id="dashboard_logo">POS</h3>

            <div class="dashboard-sidebar-user">
                <img src="images/profile.jpg" id="user_img" alt="User image">
                <span><?= $user['Name']?></span>
            </div>

            <div class="dashboard-sidebar-menus">
                <ul class="dashboard-menu-list">
                    <li class="menuActive">
                        <a href=""><i class="fa fa-dashboard "></i><span class="menutext">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dashboard "></i><span class="menutext">Dashboard</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="dashboard-content-container" id="dashboard_content_container">

            <div class="dashboard-topNav">
                    <a href="#" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                    <a href="#" id="logoutBtn"><i class="fa fa-power-off"></i>log-out</a>
            </div>

            <div class="dashboard-content">
                    <div class="dashboard-content-main">

                    </div>
            </div>

        </div>
        <script src="js/dashboard.js"></script>
</body>
</html>