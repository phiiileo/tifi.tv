<head>
    <link rel="stylesheet" href="css/site_header_footer.css">
</head>

<body>
    <header class="my-3 mb-5 mt-4 py-1">

        <section class="header_content">
            <section class="navbutton">
                <div class="stick"></div>
                <div class="stick"></div>
                <div class="stick"></div>
            </section>
            <span class="tifi_logo mb-2 mb-md-0">
                <a href="index.php" class="brand_color">tifi<img src="uploads/logotv.png" alt="">
                </a>
            </span>
            <span class="hideme navMenu">
            <span class="menu mr-4 pl-lg-5 mt-3 mb-5 ">
                <a href="index.php" class=" m_active mr-4 ml-lg-5">HOME</a>
                <a href="#" class="mr-4 ">WHAT'S NEW</a>
            </span>
            <span action="" class="header_search_form pr-md-5">
                <input type="text" placeholder="Search Movie or Tv Show"><i class="search_btn fa fa-search"></i>
            </span>
            <span class="header_user pt-3 mt-md-n2 mt-lg-0">
                <p class="login">
                    <a href="signin.php pr-2">LOGIN</a>
                    <a href="signup.php" class="px-3 py-2 ml-0 ml-md-3">SIGN UP</a>
                </p>
                <p class="signedIn mi-md-n1">
                    <img src="uploads/super.jpeg" alt="">
                    <i class="fa fa-angle-down"></i>
                </p>

            </span>
        </span>
        </section>



        <!--  -->
    </header>
</body>

<script>
    $(".navbutton").on("click", function () {
        $(".navMenu").slideToggle (1000);
    })
</script>