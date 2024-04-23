<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcamo PMS</title>

  <link rel="stylesheet" href="../css/style.css">


</head>

<body>

  <div class="container">

    <!-- CHILD CONTAINER -->

    <div class="login-topbar">

      <div class="topbar-flex">

        <div class="topbar-logo">
          <a href="loginPage.php"><img src="../assets/imgs/brand.png" alt="MPS"></a>
        </div>

      </div>

    </div>

    <!-- CHILD CONTAINER -->


    <div class="login-content">

      <div class="login-content-flex">

        <div class="card">
          <div class="login-intro">
            <h2>Welcome to our MPS - Marcamo Payroll System!</h2>
            <p>Your ultimate solution for streamlined employee payroll management</p>
          </div>

          <div class="login-wrapper">

            <div class="login-form-flex">

              <div class="form-header">
                <h2>Log in to MPS</h2>
              </div>

              <form class="login-form" method="post" action="{{route('login.store')}}">
                @csrf
                <div class="username-password">
                  <div class="input-container">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="input-container">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                  </div>
                </div>
                <span><?php if(isset($_GET['error'])) { echo $_GET['error']; } ?></span>
                <span class="psw">Forgot <a href="#">password?</a></span>

                <div class="signin-button">
                  <button type="submit">Sign-in</button>
                </div>

              </form>

              <div class="form-footer">
                <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
                
              </div>

            </div>

          </div>

        </div>



      </div>
    </div>



  </div>


</body>

</html>