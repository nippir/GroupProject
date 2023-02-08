<html>

<head>
    <link rel="stylesheet" href="css/clientdash.css">

    <title>Admin Dashboard</title>
   

    <style>
        body {
            background-image: url("Images/bg2.png");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>
       
</head>
<body>
    
                <!-- <div class="form">
                  <i class="fa fa-search"></i>
                  <input type="text" class="form-control form-input" placeholder="Search anything...">
                  <span class="left-pan"><i class="fa fa-microphone"></i></span>
                </div> -->
                
<div class="flexcol">               
                <?php include "header.php"; ?>   
    <div class="flex">

        <div class="brdr">
        <?php include "vetDashboard.php"; ?>
        </div>

        <div class="brdr">
            <div class="datatable">
            <?php include "clienttable.php" ?>
            </div>
        </div>

        <div class="brdr">
        </div>

    </div>
</div>
    <?php include "footer.php"; ?>
    </body>
    </html>
