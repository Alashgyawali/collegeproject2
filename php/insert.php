<?php
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hash= password_hash($password,PASSWORD_BCRYPT);
    $cpassword=$_POST['cpassword'];
    $checkbox=$_POST['checkbox'];
    if($checkbox=="on"){
        $checkbox=1;
    }else{
        $checkbox=0;
    }

    
    include '../database.php';
    
    $query1="SELECT * FROM client WHERE email='$email'";
    $run1=mysqli_query($conn,$query1);
    $rows1=mysqli_num_rows($run1);
    if($rows1>0){
        ?>
        <script>
            alert('User Already Exists');
            window.open('./signup.php','_self');
        </script>
        <?php
    }
    else{
        if($password==$cpassword){
            $query="INSERT INTO client(clientname,email,password,cpassword,checkbox) VALUES('$name','$email','$hash','$hash','$checkbox')";
            $run=mysqli_query($conn,$query);
            if($run){
                ?>
                <script>
                    alert('User Registered Successfully');
                    window.open('../index.php','_self');
                </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert('Password Does Not Match');
                window.open('../index.php','_self');
            </script>
            <?php
        }
    }
    $query="INSERT INTO client(clientname,email,password,cpassword,checkbox) VALUES('$name','$email','$password','$cpassword','$checkbox')";
    
 

}else{
    echo "click the button ";
}
?>
<!-- 
    
 -->