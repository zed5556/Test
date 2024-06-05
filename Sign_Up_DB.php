<?php
    $con=mysqli_connect("localhost","root","","Intern");
    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    		
    $USER_ID = mysqli_real_escape_string($con, $_POST['USER_ID']);
    $PASSWORD = mysqli_real_escape_string($con, $_POST['PASSWORD']);
    $FIRST_NAME = mysqli_real_escape_string($con, $_POST['FIRST_NAME']);
    $LAST_NAME = mysqli_real_escape_string($con, $_POST['LAST_NAME']);

    $sql="INSERT INTO USER_T (USER_ID, PASSWORD, FIRST_NAME, LAST_NAME)
    VALUES ('$USER_ID', '$PASSWORD', '$FIRST_NAME', '$LAST_NAME')";
    
    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
    else {
        echo "Insert Success" ;
    }

    mysqli_close($con);

    header("Location: Log_In.php");
    //echo '<script>window.location.href = "Log_In.php";</script>';
?>