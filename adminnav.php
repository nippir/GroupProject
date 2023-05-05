<?php
require 'connect.php';
session_start();
?>

<head>

    <link rel="stylesheet" href="style_vetDashboard.css">
    <style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    box-shadow: 0 0 20px rgba(0, 10, 0, 0.15);
}
.styled-table  tr {
    background-color: #E0E0E0;
    color: #ffffff;
   
}
.styled-table  tr {
    border-bottom: 1px solid #A6A6A6;
}
   </style>


</head>

    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">PetAssure</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="AdminClientDash.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Clients</span>
                    </a></li>
                    <li><a href="serviceproviders.php">
                        <i class="uil uil-bell"></i>
                        <span class="link-name">Service Providers</span>
                    </a></li>
                    <li><a href="AdminVetDash.php">
                        <i class="uil uil-history"></i>
                        <span class="link-name">Veterinarian</span>
                    </a></li>
                    <li><a href="">
                        <i class="uil uil-calender"></i>
                        <span class="link-name">Appointments</span>
                    </a></li>
                    <li><a href="">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Feedbacks</span>
                    </a></li>
                    <li><a href="">
                        <i class="uil uil-chat"></i>
                        <span class="link-name">Suppliers</span>
                    </a></li>
            </ul>
            <ul class="logout-mode">
                <li><a href="../loginnew.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                        <br>
                    </a></li>


            </ul>
        </div>
    </nav>

   