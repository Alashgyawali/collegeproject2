<?php
    session_start();
    ?>
    <script>
        alert("Logout Successfully");
        window.open('./adminLogin.php','_self');
    </script>
    <?php
    session_destroy();
   
?>