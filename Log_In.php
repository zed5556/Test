<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <form action="Log_In_DB.php" method="POST">
            <br>
            <div class="Center">
                <h2>Log In</h2>
            </div>
            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error']; 
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="USER_ID" class="form-label">Username</label>
                        <input class="form-control" type="text" id="USER_ID" name="USER_ID" required />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="PASSWORD" class="form-label">Password</label>
                        <input class="form-control" type="password" id="PASSWORD" name="PASSWORD" required />
                    </div>
                </div>
            </div>
            <div class="Center">
                <button type="submit" class="btn btn-primary" name="login">Log In</button>
            </div>
            <br>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
