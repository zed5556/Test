<?php
    session_start();

    if (!isset($_SESSION['USER_ID'])) {
        header("Location: Log_In.php");
        exit();
    }

    $con = mysqli_connect("localhost", "root", "", "Intern");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    if (isset($_POST['login'])) {
        $USER_ID = mysqli_real_escape_string($con, $_POST['USER_ID']);
        $PASSWORD = mysqli_real_escape_string($con, $_POST['PASSWORD']);

        $query = "SELECT * FROM USER_T WHERE USER_ID = '$USER_ID' AND PASSWORD = '$PASSWORD'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['USER_ID'] = $USER_ID;
            header("Location: index.php");
        } else {
            $_SESSION['error'] = "Username or password is incorrect";
            header("Location: Log_In.php");
        }
    } else {
        header("Location: Log_In.php");
    }
?>