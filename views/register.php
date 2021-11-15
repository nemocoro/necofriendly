<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="container">
    </div>
        <div class="row justify-content-center mt-5">
            <div class="col-6"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>Register</h1>
                <form action="../action/register-action.php" method="POST">
                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
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
                    <input type="submit" value="Register" name="submit" class="btn btn-success btn-block">
                </form>
                <div class="mt-3 text-right">
                    <span class="text-muted">Have an account?</span>
                    <a href="index.php" class="text-decoration-none">Sign in</a>
                </div>
            </div>
        </div>
    </div>     


    
</body>
</html>