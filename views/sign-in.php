<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>  
    <div class="row justify-content-center">
        <div class="col-4">
            <h1>Sign in</h1>
            <form action="../action/signin-action.php" method="POST">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div> 
                <div class="form-grop">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" cass="form-control">
                </div>
                <input type="submit" value="Sign In" name="submit" class="btn btn-success btn-block mt-3">
                <div class="mt-3">
                    <span class="text-muted">Create an Account</span>
                    <a href="register.php" class="text-decoration-none">Register</a>
                </div>
            </form>
        </div>
        <div class="col-3"></div> 
    </div>
</div>


    
</body>
</html>