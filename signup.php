<!DOCTYPE html>
<html lang="en">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up | tifi.tv</title>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/site_header_footer.css">
        <link rel="stylesheet" href="css/signup.css">

<body>
    <?php include "components/site_header.php" ?>
    
    <main class="m-auto px-5 py-2">
        <div class="container">
        <section class="section--one">
            <span>
                <h3>Sign Up</h3>
                <p>to save your preferences and get notifications</p>
            </span>
            <section class="steps row">
                <section class="active col-6">
                    <p>STEP 1</p>
                    <P>Create Account</P>
                </section>
                <section class="col-6">
                    <p>STEP 2</p>
                    <p>Welcome to tifi.tv</p>
                </section>
            </section>
        </section>

        <section class="section--two">
            <section class="google"><i class="fab fa-google"></i>Sign up with Google</section>
            <section class="facebook"><i class="fab fa-facebook-f"></i>Sign up with Facebook</section>

            <p><span>or</span></p>

            <section class="email"><i class="fas fa-envelope"></i>Sign up with Email</section>

            <div class="notSignedIn">Have an account? <a href="#">Sign In</a>
            </div>
        </section>
        </div>
    </main>

    <?php include "components/site_footer.php" ?>
</body>

</html>