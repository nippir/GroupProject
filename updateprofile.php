<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update Details </title>
    <link rel="stylesheet" href="css/updateprofile.css">
   </head>
   <script type="text/javascript">
        var nic = document.getElementById("mobile");
        nic.addEventListener('input',()=>
        {
            nic.setCustomValidity('');
            nic.checkValidity();
        });
       
   
    nic.addEventListener('invalid',()=>{
        if (nic.value ==''){
            nic.setCustomValidity('Enter  NIC');
        }
        else{
            nic.setCustomValidity('Enter NIC in123456789V or 200256789123 format')
        }
    });
    
    </script>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form name="addpost" action="updateprofile.php" onsubmit="return validateForm()" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
     
      <div class="input-box button">
        <input type="Submit" value="Update">
      </div>
      
    </form>
  </div>
</body>
</html>
