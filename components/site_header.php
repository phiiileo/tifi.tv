<head>
    <link rel="stylesheet" href="css/site_header_footer.css">
    <style>
    .navbutton {
        position: absolute;
        top: 10px;
        right: 10px;
        border: 1px solid grey;
        width: 30px;
        height: 27px;
        padding: 5px;
        cursor: pointer;
    }

    .stick {
        background-color: grey;
        height: 3px;
        width: 100%;
        margin-bottom: 3px;
    }

    .hideme{
         display: none;
    }

    @media screen and (min-width: 992px){
        .header_search, .header_user {
         display: block;
    }

    .navbutton {
        display: none;
    }
    }

    </style>
</head>
<body>
    <header class="my-3 mb-5">
        <section class="container">
            <section class="navbutton">
                <div class="stick"></div>
                <div class="stick"></div>
                <div class="stick"></div>
            </section>
            <section class="tifi_logo pb-1">    
                    <a href="index.php">tifi<svg class="" width="25" height="25" viewBox="0 0 50 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.7832 9.06944H26.6287L36.8721 1.25183L36.4309 0.640015L25.3995 9.06944H25.2734L14.242 0.640015L13.8008 1.25183L24.0442 9.06944H5.82666C3.02154 9.06944 0.720703 11.3807 0.720703 14.2699V34.7996C0.720703 37.6547 2.99002 40 5.82666 40H44.8147C47.6199 40 49.9207 37.6887 49.9207 34.7996V14.2699C49.8577 11.4147 47.5884 9.06944 44.7832 9.06944ZM34.5398 34.3917H31.1673L24.3909 17.7028V17.7708H18.3394V34.4257H14.9354V17.7708H8.88393V14.6777H23.1932H24.4224H26.8809L32.9639 29.9051L39.1099 14.6777H42.5139L34.5398 34.3917Z"
                                fill="black" />
                        </svg>
                    </a>
                
            </section>

            <section class="header_search hideme px-lg-5">
                    <span class="menu mr-4 pl-lg-5 my-3">
                        <a href="index.php" class="mr-4 ml-lg-5">HOME</a>
                        <a href="#" class=" ">WHAT'S NEW</a>
                    </span>

                    <span action="" class="header_search_form pr-md-5 my-2">
                        <input type="text" placeholder="Search Movie or Tv Show"><i
                            class="search_btn fa fa-search"></i>
                        </span>
                    
            </section>

            <section class="header_user hideme pt-3">
                <p class="login">
                    <a href="signin.php">LOGIN</a>
                    <a href="signup.php" class="px-3 py-2 ml-2">SIGN UP</a>
                </p>
                <p class="signedIn mi-md-n1">
                    <img src="uploads/super.jpeg" alt="">
                    <i class="fa fa-angle-down"></i>
                </p>

            </section>
        </section>
    </header>
</body>

<script>
    $(".navbutton").on("click", function(){
        $(".header_search").toggleClass("hideme");
        $(".header_user").toggleClass("hideme");
    })
</script>
