<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <title>TBTM // Register</title>
</head>

<body>
  
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
      
        <form action="signup.php" method="post">
          <h3 class="text-center">Register Today</h3>
          
          <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control form-control-lg">
          </div>
          
          <div class="form-group">
          <label for="email">Enter Your Email</label>
          <input type="email" name="email" class="form-control form-control-lg">
          </div>
          
          <div class="form-group">
          <label for="password">Enter Your Password</label>
          <input type="password" name="password" class="form-control form-control-lg">
          </div>
          
          <div class="form-group">
          <label for="passwordConf">Confrim your password</label>
          <input type="password" name="passwordConf" class="form-control form-control-lg">
          </div>
          
          <div class="form-group">
            <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg>Register</button>
          </div>
          
          <p class="text-center">Have an account? <a href="login.php">Sign In</a></p>
          
        </form>
      </div>
    </div>
  </div>
  
</body>

</html>
