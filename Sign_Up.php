<?php 
    session_start();
    $i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <form action="Sign_Up_DB.php" method="POST">
            <br>
            <div class="Center">
                <h2>Sign up</h2>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label for="USER_ID" class="form-label">Username</label>
                    <input class="form-control" type="text" id="" value="" name="USER_ID" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label for="PASSWORD" class="form-label">Password</label>
                    <input class="form-control" type="password" id="" value="" name="PASSWORD" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label for="FIRST_NAME" class="form-label">First Name</label>
                    <input class="form-control" type="text" id="FIRST_NAME" value="" name="FIRST_NAME" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label for="LAST_NAME" class="form-label">Last Name</label>
                    <input class="form-control" type="text" id="LAST_NAME" value="" name="LAST_NAME" required/>
                </div>
            </div>
            <div class="Center">
            <input type="submit" value="Sign up">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>