<head>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/profile.css">

    </head>
<body>

<div class="container mt-5 px-2">
    
    <div class="mb-2 d-flex justify-content-between align-items-center">
        
        <div class="position-relative">
            <span class="position-absolute search"><i class="fa fa-search"></i></span>
            <input class="form-control w-100" placeholder="Search by order#, name...">
        </div>
        
        <div class="px-2">
            
            <span>Filters <i class="fa fa-angle-down"></i></span>
            <i class="fa fa-ellipsis-h ms-3"></i>
        </div>
        
    </div>
    <div class="table-responsive">
    <table class="table">
        
      <thead>
        <tr class="bg-light">
          <th scope="col" width="5%"><input class="form-check-input" type="checkbox"></th>
          <th scope="col" width="5%">#</th>
          <th scope="col" width="20%">Date</th>
          <th scope="col" width="10%">Status</th>
          <th scope="col" width="20%">Customer</th>
          <th scope="col" width="20%">Purchased</th>
          <th scope="col" class="text-end" width="20%"><span>Revenue</span></th>
        </tr>
      </thead>
      <?php
      include "connect.php";
      $sql = "SELECT `hotelname`, `rating`, `district`, `comments`, `mobile`, `email` FROM `feedback`;";
      $result = mysqli_query($conn,$sql);
      $resultcheck = mysqli_num_rows($result);
      ?>
  
          <?php while ($row = mysqli_fetch_array($result)){?>
        
            
  <tbody>
    <tr class="textal">
      <th scope="row"><input class="form-check-input" name="checkbox" type="checkbox"></th>
      <td><?php echo $row['hotelname']?></td>
      <td><?php echo $row['rating']?></td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
      <td> <?php echo $row['district']?></td>
      <td><?php echo $row['mobile']?></td>
      <td class="text-end"><span class="fw-bolder">$0.99</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
    </tr>
    <?php } ?>
    <tr>
      <th scope="row"><input class="form-check-input" type="checkbox"></th>
      <td>14</td>
      <td>12 Oct, 21</td>
      <td><i class="fa fa-dot-circle-o text-danger"></i><span class="ms-1">Failed</span></td>
      <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Tomo arvis</td>
      <td>Altroz furry</td>
      <td class="text-end"><span class="fw-bolder">$0.19</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
    </tr>
    
    
    <tr>
      <th scope="row"><input class="form-check-input" type="checkbox"></th>
      <td>17</td>
      <td>1 Nov, 21</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
      <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
      <td>Apple Macbook air</td>
      <td class="text-end"><span class="fw-bolder">$1.99</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
    </tr>
    
    
  </tbody>
</table>
  
  </div>
    
</div>
          </body>