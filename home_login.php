<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | tifi.tv</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/home_login.css">
</head>

<body>
    <?php include "components/site_header.php" ?>

    <main class="container">
        <section class="row mx-0 mx-0">
            <section class="col-lg-3 sidebar px-0">
                <h5 class="bg_color sidebar_header pl-5 ">
                    Recommended For You
                </h5>
                <form action="" class="form1 pl-5">
                    <div class="form-group">
                        <p><input type="checkbox" name="tv_shows" id="tv_shows" value="TV Shows"> TV Shows</p>
                        <p><input type="checkbox" name="movies" id="movies" value="Movies"> Movies</p>
                    </div>
                    <div class="form-group">
                        <h6>Genres <i class="fa fa-angle-up"></i></h6>
                        <p><input type="checkbox" name="" value="Comedy" id="">Comedy</p>
                        <p><input type="checkbox" name="" value="Action" id="">Action</p>
                        <p><input type="checkbox" name="" id="" value="Epic">Epic</p>
                        <p><input type="checkbox" name="" id="" value="Horror">Horror</p>
                        <p><input type="checkbox" name="" id="" value="Thriller">Thriller</p>
                        <p><input type="checkbox" name="" id="" value="Violence">Violence</p>
                        <p><input type="checkbox" name="" id="" value="Feature Films">Feature Films</p>
                    </div>
                    <div class="form-group">
                        <h6>What is your mood today? <i class="fa fa-angle-up"></i></h6>
                        <p><input type="checkbox" name="" value="Solemn" id="">Solemn</p>
                        <p><input type="checkbox" name="" value="Mischievous" id="">Mischievous</p>
                        <p><input type="checkbox" name="" id="" value="Romantic">Romantic</p>
                        <p><input type="checkbox" name="" id="" value="Old">Old</p>
                        <p><input type="checkbox" name="" id="" value="Margical">Violence</p>
                        <p><input type="checkbox" name="" id="" value="Festive">Festive</p>
                    </div>
                </form>
                <h5 class=" sidebar_header px-5">
                    Explore
                </h5>
                <div class="form-group pl-5">
                    <h6>Recently Added <i class="fa fa-angle-up"></i></h6>
                    <p><input type="checkbox" name="" value="Netflix" id="">Netflix</p>
                    <p><input type="checkbox" name="" value="Amazone Prime" id="">Amazone Prime</p>
                    <p><input type="checkbox" name="" id="" value="Apple TV">Apple TV</p>
                    <p><input type="checkbox" name="" id="" value="HBO">HBO</p>
                    <p><input type="checkbox" name="" id="" value="ShowMax">ShowMax</p>
                    <p><input type="checkbox" name="" id="" value="Disney TV">Disney TV</p>

                    <h6>Hot on Twitter <img src="uploads/left_pointer.png" alt=""></h6>
                    <h6>Top Downloaded <img src="uploads/left_pointer.png" alt=""></h6>
                    <h6>Popular Lists <i class="fa fa-angle-up"></i></h6>

                    <p><input type="checkbox" name="" value="" id="">Baddt</p>
                    <p><input type="checkbox" name="" id="" value="">Sapio</p>
                    <p><input type="checkbox" name="" id="" value="">All Crime</p>
                    <p><input type="checkbox" name="" id="" value="">Bloddy Horrors</p>
                    <p><input type="checkbox" name="" id="" value="">Erotic</p>
                </div>
                <h5 class=" sidebar_header">
                    My Lists (Baddt)
                    <span><a href="#" class="">Edit</a> </span>
                </h5>
                <section class="my_list mb-5 pl-5">

                    <form action="" class="form2 px-0 mx-0">
                        <div class="form-group">
                            <h6>Make Public <i><input type="checkbox" name="" id=""></i></h6>
                            <span class="m_public">
                                <p>Suits<i class="fas fa-times"></i></p>
                                <p>Breaking Bad<i class="fas fa-times"></i></p>
                                <p>Grey's Anatomy<i class="fas fa-times"></i></p>
                                <p>HBO<i class="fas fa-times"></i></p>
                            </span>
                        </div>

                    </form>
                </section>
            </section>

            <section class="col-lg-9 main_page px-0">
                <article>
                    <h3 class="mb-4">Most Popular right now</h3>
                    <article class="sort">Sorted by
                        <span class="brand_color myDropdown"><span class="filter_value pl-2">Popularity </span> <i
                                class="fa fa-angle-down"></i></span>
                        <div class="dropdown_content">
                            <li>Popularity
                                <span class="check_state active_check"><img src="uploads/check.png" alt=""></span>
                            </li>

                            <li>Top Rated
                                <span class=" check_state"><img src="uploads/check.png" alt=""></span>
                            </li>
                            <li>All-Time Great
                                <span class=" check_state"><img src="uploads/check.png" alt=""></span>
                            </li>
                        </div>

                    </article>
                </article>
            </section>

        </section>
    </main>

    <?php include "components/site_footer.php" ?>
</body>

</html>