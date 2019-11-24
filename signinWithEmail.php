<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In with Email | tifi.tv</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>
<div class="container">
        <?php include "components/site_header.php" ?>
    </div>
    <main>
        <section class="page_header">
            <span>
                <h3>Instantly watch TV shows & Movies</h3>
                <p>Welcome back!</p>
            </span>
        </section>
        <div class="container-fluid">
            <section class="section--two">
                <section class="google"><i class="fab fa-google"></i>Continue as Brandon</section>
                <section class="facebook"><i class="fab fa-facebook-f"></i>Continue with Facebook</section>

                <p><span>or</span></p>

                <section class="signup_with_email">
                    <form action="">
                        <div class="form_container">

                            <section class="form_group">
                                <label for="text">Email, Username</label>
                                <input type="text" name="username" placeholder="">
                            </section>

                            <div class="form_group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" placeholder="">
                                <div class="forgot_password">
                                    <a href="">Forgot Password?</a>
                                </div>
                            </div>

                            <section class="form_group">
                                <div class="t_and_c">
                                    <input type="checkbox" name="agreement" id="agreenment">
                                    <p>By Clicking on "Sign Up" you agree to our <a>Terms of service</a> & <a>Privacy
                                            Policy</a> </p>
                                </div>
                            </section>

                            <section class="submit">
                                <a href="home_login.php"><input type="submit" value="Continue"></a></section>
                        </div>
                    </form>

                    <div class="notSignedIn">
                        <article>Have an account? <a href="signin.php" class="font-weight-bold">Sign In</a></article>

                    </div>
                </section>
        </div>
    </main>

    <?php include "components/site_footer.php" ?>
</body>

</html>