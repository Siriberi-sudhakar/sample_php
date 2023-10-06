<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header">
                            <h5>SIGN UP FORM</h5>
                        </div>
                      <div class="card-body">
                        <form action="signup.php" method="POST">
                            <div class="form-group mb-2" >
                                <label for="fname">FirstName</label>
                                <input type="text" name="fname" id="fname" class="form-control" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="lname">LastName</label>
                                <input type="text" name="lname" id="lname" class="form-control" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="uname">Username</label>
                                <input type="text" name="uname" id="uname" class="form-control" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" required>
                            </div>


                            <div class="form-group mb-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>


                            <div class="form-group mb-2">
                                <label for="confpass">confirm password</label>
                                <input type="password" name="confpass" id="confpass" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="register_btn" class="btn btn-primary">Regiter Now</button>
                            </div>

                        </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>