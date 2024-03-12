<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V1</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" /> -->
    <!--===============================================================================================-->
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css" /> -->
    <!--===============================================================================================-->
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css" /> -->
    <!--===============================================================================================-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--===============================================================================================-->
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
    <div class="limiter">
        <!-- Add a container for the error message -->
        <!-- <div class="error-container">
            <?php if (isset($_GET['pesan'])) { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Login Gagal </strong><?php echo $_GET['pesan']; ?>
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
            <?php } ?>
        </div> -->

        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/friren chibi.png" alt="IMG" id="logo" data-tilt data-tilt-glare="true"
                        data-tilt-max-glare="0.5" data-tilt-speed="400" data-tilt-scale="1.1"
                        data-tilt-perspective="500" data-tilt-max="15" data-tilt-startX="0" data-tilt-startY="0" />
                </div>

                <form class="login100-form validate-form" action="../anime-arcadia/service/ceklogin.php" method="post"
                    onsubmit="handleFailedLogin();">
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
                    <span class="login100-form-title">Login Page</span>

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

                    <div class="container-login100-form-btn" style="justify-content: space-between">
                        <input type="submit" name="btnLogin" value="Login" class="login100-form-btn" />
                        <input type="submit" name="btnBatal" value="Batal" class="login100-form-btn" />
                    </div>

                    <!-- <div class="text-center p-t-12">
              <span class="txt1"> Forgot </span>git push -u origin main

              <a class="txt2" href="#"> Username / Password? </a>
            </div> -->

                    <div class="text-center p-t-40">
                        <p class="txt2">
                            Login Kembali setelah 10 detik
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script> -->

    <script src="vendor/tilt/tilt.jquery.min.js"></script>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>