<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-3"></div>     
        <div class="col-6 justify-content-center">
            <h1>Register</h1>
            <form action="../action/register-action.php" method="POST">
                <div class="row form-group">
                    <div class="col-6">                            
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control">
                    </div>
                    <div class="col">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="postal_code">Postal Code</label>
                    <input class="form-control" type="text" name="postal_code" id="postal_code">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address" id="address">
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input class="form-control" type="text" name="contact_number" id="contact_number">
                </div>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <input type="submit" value="Register" name="submit" class="btn btn-success btn-block mt-3">
                <div class="mt-3 text-right">
                    <span class="text-muted">Have an account?</span>
                    <a href="index.php" class="text-decoration-none">Sign in</a>
                </div>
            </form>
        </div>
        <div class="col-3"></div> 
    </div>
</div>


    
</body>
</html>