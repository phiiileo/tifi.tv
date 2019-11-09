<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp | tifiTV</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/site_header_footer.css" type="text/css">
    <link rel="stylesheet" href="css/signup.css" type="text/css">
    
</head>
<body>
    <?php include "components/site_header.php" ?>

    <main>
        <section class="section--one">
            <span>
            <h3>Sign Up</h3>
            <p>to save your preferences and get notifications</p>
            </span>
            <div class="steps">
                <section class="active">
                    <p>STEP 1</p>
                    <P>Create Account</P>
                </section>
                <section>
                    <p>STEP 2</p>
                    <p>Welcome to tifi.tv</p>
                </section>
            </div>
        </section>

        <section class="section--two">
            <section class="google"><i class="fab fa-google"></i>Sign up with Google</section>
            <section class="facebook"><i class="fab fa-facebook-f"></i>Sign up with Facebook</section>

        <p><span>or</span></p>

        <section class="email"><i class="fas fa-envelope"></i>Sign up with Email</section>

        <div class="notSignedIn">Have an account? <span>Sign In</span>
        </div>
    
    </main>

    <?php include "components/site_footer.php" ?>
</body>
</html>