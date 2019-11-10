<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEST | tifiTV</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/site_header_footer.css" type="text/css">
    <link rel="stylesheet" href="css/signup.css" type="text/css">
        <style>
        ol{
            text-align: left;
        }

        a {
            color: black;
            font-size: 20px;
        }

        a:hover{
            opacity: .8;           
             color: #FF5300;

        }

        a:active{
            color: red;
        }
        a:visited {
        }
        </style>
</head>
<body>
    <?php include "components/site_header.php" ?>

    <main>
      <H3 >FOR THE <span class="b_color">Purpose</span> OF TESTING</H3>
      <ol>
          <li><a href="index1.php">Index Page</a></li>
          <li><a href="signin.php">signin Page</a></li>
          <li><a href="signinWithEmail.php">signinWithEmail Page</a></li>
          <li><a href="signup.php">signup Page</a></li>
          <li><a href="signupWithEmail.php">signupWithEmail Page</a></li>
          <li><a href="user_profile.php">User profile Page</a></li>

      </ol>
    </main>

    <?php include "components/site_footer.php" ?>
</body>
</html>