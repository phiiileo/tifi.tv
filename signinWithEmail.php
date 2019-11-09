<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp With Email| tifiTV</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/site_header_footer.css" type="text/css">
    <link rel="stylesheet" href="css/signup.css" type="text/css">

</head>

<body>
    <?php include "components/site_header.php" ?>

    <main>
    <section class="section--one">
            <span>
            <h3>Instantly watch TV shows & Movies</h3>
            <p>Welcome back!</p>
            </span>
        </section>

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
                                <p>By Clicking on "Sign Up" you agree to our <a>Terms of service</a> & <a>Privacy Policy</a> </p>
                            </div>
                        </section>

                    <section class="submit">
                    <input type="submit" value="Continue"></section>
                    </div>
                </form>

                <div class="notSignedIn"><article>Have an account? <a>Sign In</a></article>

                </div>
            </section>
    </main>

    <?php include "components/site_footer.php" ?>
</body>

</html>