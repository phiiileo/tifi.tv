<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up with Email | tifi.tv</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/site_header_footer.css">
    <link rel="stylesheet" href="css/signup.css">

</head>

<body>
    <?php include "components/site_header.php" ?>
    <main>

        <section class="page_header">
                <span>
                        <h3>Instantly watch TV shows & Movies</h3>
                    </span>
        </section>
        <div class="container">
            <section class="section--one">
                <div class="steps row">
                    <section class="active col-6">
                        <p>STEP 1</p>
                        <P>Create Account</P>
                    </section>
                    <section class="col-6">
                        <p>STEP 2</p>
                        <p>Select what you like</p>
                    </section>
                </div>
            </section>

            <section class="section--two">
                <section class="google"><i class="fab fa-google"></i><span>Sign up with Google</span> </section>
                <section class="facebook"><i class="fab fa-facebook-f"></i><span> Sign up with Facebook</span></section>

                <p><span>or</span></p>

                <section class="signup_with_email">
                    <form action="">
                        <div class="form_container">

                            <section class="form_group">
                                <label for="text">Email, Username</label>
                                <input type="text" name="username" placeholder="">
                            </section>

                            <section class="a_group row">
                                <div class="form_group col-sm-12">
                                    <article>
                                        <label for="country">Country</label>
                                        <select name="country" id="country">
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Nigeria">Canada</option>
                                            <option value="Nigeria">USA</option>
                                            <option value="Nigeria">EGYPT</option>
                                            <option value="Nigeria">ALGERIA</option>
                                            <option value="Nigeria">PANAMA</option>
                                            <option value="Nigeria">SOUTH AMERICA</option>
                                            <option value="Nigeria">SOUTH AFRICA</option>
                                            <option value="Nigeria">MEXICO</option>
                                            <option value="Nigeria">ITALY</option>
                                        </select>
                                    </article>
                                </div>

                                <div class="form_group col-sm-12">
                                    <article>
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" placeholder="">
                                    </article>
                                </div>
                            </section>

                            <section class="form_group">
                                <div class="t_and_c">
                                    <input type="checkbox" name="agreement" id="agreenment">
                                    <p>By Clicking on "Sign Up" you agree to our <a>Terms of service</a> & <a>Privacy
                                            Policy</a> </p>
                                </div>
                            </section>

                            <section class="submit">
                                <input type="submit" value="Sign Up"></section>
                        </div>
                    </form>

                    <div class="notSignedIn">
                        <article>Have an account? <a class="" href="#">Sign In</a></article>

                    </div>
                </section>
            </section>
        </div>
    </main>

    <?php include "components/site_footer.php" ?>
</body>

</html>