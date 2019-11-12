<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | tifi.tv</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/site_header_footer.css">

    <style>
           main ol {
            text-align: left;
        }

      main  a {
            color: black;
            font-size: 20px;
        }

      main  a:hover {
            opacity: .8;
            color: #FF5300;

        }

        a:active {
            color: red;
        }
    </style>
</head>

<body> 

    <?php include "components/site_header.php" ?>

    <section class="container">

        <main>
            <H3>FOR THE <span class="brand_color">PURPOSE</span> OF TESTING</H3>
            <ol>
                <li><a href="index1.php">Index Page</a></li>
                <li><a href="signin.php">signin Page</a></li>
                <li><a href="signinWithEmail.php">signinWithEmail Page</a></li>
                <li><a href="signup.php">signup Page</a></li>
                <li><a href="signupWithEmail.php">signupWithEmail Page</a></li>
                <li><a href="user_profile.php">User profile Page</a></li>

            </ol>
        </main>

    </section>
    
    <?php include "components/site_footer.php" ?>
</body>

</html>