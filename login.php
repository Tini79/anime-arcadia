<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login V1</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/main-login.css" />
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<style>
/* Add styles for the error container */
.error-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
  z-index: 9999;
  /* Ensure it's above other elements */
}

.container-login100 {
  position: relative;
  z-index: 1;
  /* Ensure it's below the error container */
}

</style>
<body>
  <?php
    include 'services/cek-login.php';
      if(isset($_SESSION['username'])){
        header('Location: ../index.php');
      }
  ?>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="assets/imgs/frieren-chibi.png" alt="IMG" id="logo" data-tilt data-tilt-glare="true"
            data-tilt-max-glare="0.5" data-tilt-speed="400" data-tilt-scale="1.1" data-tilt-perspective="500"
            data-tilt-max="15" data-tilt-startX="0" data-tilt-startY="0" />
        </div>

        <form class="login100-form validate-form" action="services/cek-login.php" method="post">
          <div class="error-container">
            <?php
                        if (isset($_GET['pesan'])) {
                        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Login Gagal </strong><?php echo $_GET['pesan']; ?>
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              </button>
            </div>
            <?php } ?>
          </div>
          <span class="login100-form-title">Login</span>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="username" id="username" placeholder="username" />
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="pass" id="pass" placeholder="Password" />
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          <div class="container-login100-form-btn mb-2" style="justify-content: space-between">
            <button type="submit" name="btnLogin" onclick="handleFailedLogin()" class="login100-form-btn <?php if(isset($_SESSION['failed_login']) && $_SESSION['failed_login'] % 3 == 0){echo 'disabled';}?>">Login</button>
            <button type="submit" name="btnBatal" class="login100-form-btn <?php if(isset($_SESSION['failed_login']) && $_SESSION['failed_login'] % 3 == 0){echo 'disabled';}?>">Batal</button>
          </div>
          <div id="expiredContent" class="text-center <?php echo isset($_SESSION['failed_login']) && $_SESSION['failed_login'] % 3 == 0 ? 'd-block' : 'd-none'; ?>">
            <p class="txt2">
              Login kembali setelah <span id="expiredText">10</span> detik
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script src="assets/js/login.js"></script>
</body>

</html>