<?php
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    
    <link rel="stylesheet" href="../assets/css/adminLogin.css">
         
    
</head>
<body>
    
        <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Admin</span>
                
                <form action="./select.php" method="POST">
                    <div class="input-field">
                        <input type="email" placeholder="Enter your email" required name="email">
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter your password" required name="password">
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <button name="submit">submit</button>
                    </div>
                </form>
                
                
            </div>       
        </div>
    </div>


    <script src="../assets/js/adminLogin.js"></script>

</body>
</html>
<?php

?>