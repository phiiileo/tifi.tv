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
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php include "components/site_header.php" ?>
    <main class="container py-md-0">
        <section class="row row1 mb-5 mx-0 px-0">
            <article class="col-lg-6 px-0">
                <h3>
                    Watch the best <span class="brand_color">movies</span> and <span class="brand_color">Tv shows</span>
                    based on
                    your personality
                </h3>
                <p class="my-4">
                    Find, track and discover where to watch your favourite TV shows and movies from Netflix, Amazon
                    Prime, Hulu, Showtime and more services.
                </p>
                <div class="mt-3">
                    <form action="" class="search_input">
                        <input type="text" name="search" id="search" placeholder="Find a movie or series" class="pl-3">
                        <input type="submit" value="Search" class="ml-n2">
                    </form>
                </div>
            </article>

            <article class="carousel_container col-lg-6 mt-5 my-lg-0 mx-auto">
                <section class="img_container mx-auto ">
                    <article class="control control--left"><i class="fa fa-angle-left"></i> </article>

                    <span>
                        <article class="images img_container_1  active_img">
                            <img src="uploads/carousel_img1.png" alt="">
                        </article>
                        <article class="images img_container_2">
                            <img src="uploads/carousel_img2.png" alt="">
                        </article>
                        <article class=" images img_container_3 ">
                            <img src="uploads/carousel_img1.png" alt="">
                        </article>
                        <article class=" images">
                            <img src="uploads/carousel_img2.png" alt="">
                        </article>
                        <article class=" images">
                            <img src="uploads/carousel_img1.png" alt="">
                        </article>
                        <article class=" images">
                            <img src="uploads/carousel_img2.png" alt="">
                        </article>
                        <article class=" images">
                            <img src="uploads/carousel_img1.png" alt="">
                        </article>
                         <article class=" images">
                            <img src="uploads/carousel_img2.png" alt="">
                        </article>
                        <article class=" images">
                            <img src="uploads/carousel_img1.png" alt="">
                        </article>
                        <article class=" images">
                            <img src="uploads/carousel_img2.png" alt="">
                        </article>
                        <article class=" images">
                            <img src="uploads/carousel_img1.png" alt="">
                        </article>


                    </span>
                    <article class="control control--right"><i class="fa fa-angle-right "></i> </article>

                </section>
            </article>

        </section>

        <section class="row row2 ml-0">
            <div class="personalize col-12 px-0 mt-lg-5">
                <span>Personalize</span>
                <span>
                    <input type="button" value="Save" class="bg_color px-5 mb-2">
                </span>
            </div>
            <div class="popular_brands col-12 pl-0 pr-0 pt-2">
                <a>What do you have:</a>
                <article class="my-2 d-flex flex-wrap">
                    <span><input type="checkbox" name="netflix" id="netflix" value="Netflix"><img
                            src="uploads/netflix.png" alt=""></span>
                    <span><input type="checkbox" name="hulu" id="hulu" value="hulu"><img src="uploads/hulu.png"
                            alt=""></span>
                    <span><input type="checkbox" name="hbo" id="hbo" value="HBO"><img src="uploads/hbo.png"
                            alt=""></span>
                    <span><input type="checkbox" name="amazon" id="amazon" value="amazon"><img src="uploads/amazon.png"
                            alt=""></span>
                    <span><input type="checkbox" name="showmax" id="showmax" value="showmax"><img
                            src="uploads/showmax.png" alt=""></span>
                </article>
            </div>
        </section>

        <section class="row3 text-center mx-0 row my-3">
            <div class="img_container col-md-2  text-md-left mx-auto my-0 py-5 py-md-4 ml-md-n3">
                <img src="uploads/super.jpeg" alt="" class="rounded-circle" width="100px" height="100px">
                <p class="mx-auto mx-md-1 mt-2">Charles Etu <a href="settings.php"><i class="fas fa-pencil-alt"></i></a>
                </p>
            </div>
            <div class="personalize_acct  text-md-left col-md-10 mx-0 px-0 ">
                <section class="row mx-0 px-0">
                    <div class="col-lg-2 p_type px-0">
                        <section class="mx-auto my-0">Personality type </section>
                        <a class="my-3 mx-auto ml-md-0" href="#">INTP</a>
                    </div>
                    <div class="col-lg-3 my-2 my-md-0 px-0">
                        <section class="genre_container my-2 my-md-0">Genres you like</section>
                        <article class="genre d-flex flex-row flex-wrap mx-auto ml-md-0 mt-2">
                            <div class="m-1"><a href="#">Horror</a></div>
                            <div class="m-1"><a href="#">Sci-Fi</a></div>
                            <div class="m-1"><a href="#">Comedy</a></div>
                            <div class="m-1">
                                <a href="#" class="plus "><i class="fa fa-plus"></i></a>
                            </div>
                        </article>

                    </div>
                    <section class="m_likes col-lg-7  px-md-0">
                        <section>Sample movies & series you like</section>
                        <section class="m_likes_items d-flex flex-row flex-wrap justify-content-around mt-3">
                            <article>
                                <a href-="#"><img src="uploads/img1.png" alt=""></a>

                                <p>Aladdin</p>
                                <i>Movie</i>
                            </article>
                            <article>
                                <a href-="#"><img src="uploads/img2.png" alt=""></a>
                                <p>Matrix</p>
                                <i>Movie</i>
                            </article>
                            <article>
                                <a href-="#"><img src="uploads/img3.png" alt=""></a>
                                <p>Us</p>
                                <i>Movie</i>
                            </article>
                            <article>
                                <a href-="#"><img src="uploads/img4.png" alt=""></a>
                                <p>The walki...</p>
                                <i>Series</i>
                            </article>
                            <article>
                                <a href-="#"><img src="uploads/img5.png" alt=""> </a>
                                <p>Alita Battle...</p>
                                <i>Movie</i>
                            </article>
                            <article class="plus">
                                <p class="px-2 py-2 rounded-circle">
                                    +
                                </p>
                            </article>
                        </section>
                    </section>
                </section>
            </div>
        </section>

        <section class="row4 px-2 px-md-0 mt-5">
            <article>
                <h3>Most Popular right now</h3>
                <article class="sort">Sorted by
                    <span class="brand_color myDropdown"><span class="filter_value"> &nbsp; Popularity </span> <i
                            class="fa fa-angle-down"></i></span>
                    <div class="dropdown_content">
                        <li>Popularity <span class="sort_active"><i class="fa fa-check "></i><img src="uploads/Path 165.svg" alt=""></span></li>

                        <li>Top Rated <span class="check"><i class="fa fa-check "></i><img src="uploads/Path 165.svg" alt=""></span></li>
                        <li>All-Time Great<span class="check"><i class="fa fa-check "></i><img src="uploads/Path 165.svg" alt=""></span></i></li>
                    </div>

                </article>
                <article class="range pt-4 my-4">
                    <span class="week">1 week</span>
                    <p>
                        Time range
                        <input type="range" class=""></p>
                </article>
            </article>
            <div class="movie_list mx-0 px-md-0 d-flex flex-row flex-wrap justify-content-md-between justify-content-around">
                <article>
                    <span>
                        <div><img src="uploads/img1.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Aladin <br>
                                <i>Movie</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>

                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img2.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Matrix <br>
                                <i>Movie</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img4.png" alt=""></div>
                        <div class="m_details">
                            <span>125</span>
                            <p>The Walking Dead <br>
                                <i>series</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>

                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img8.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img5.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Alita <br>
                                <i>Movie</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>

                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img6.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>John Wick 3 <br>
                                <i>Movies</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img7.png" alt=""></div>
                        <div class="m_details">
                            <span>5</span>
                            <p>Toy Story 4 <br>
                                <i>Movies</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img1.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Aladin <br>
                                <i>Movie</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>

                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img2.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Matrix <br>
                                <i>Movie</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img4.png" alt=""></div>
                        <div class="m_details">
                            <span>125</span>
                            <p>The Walking Dead <br>
                                <i>series</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>

                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img8.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img5.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Alita <br>
                                <i>Movie</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>

                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img6.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>John Wick 3 <br>
                                <i>Movies</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img7.png" alt=""></div>
                        <div class="m_details">
                            <span>5</span>
                            <p>Toy Story 4 <br>
                                <i>Movies</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img5.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Alita <br>
                                <i>Movie</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>

                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img6.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>John Wick 3 <br>
                                <i>Movies</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img7.png" alt=""></div>
                        <div class="m_details">
                            <span>5</span>
                            <p>Toy Story 4 <br>
                                <i>Movies</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
                <article>
                    <span>
                        <div><img src="uploads/img8.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </span>
                    <section class="state_container">
                        <section class="m_state">
                            <p class="icons d-flex flex-row flex-wrap justify-content-between px-4">
                                <i class="fa fa-heart state_icon"></i>
                                <i class="fa fa-check state_icon"></i>
                                <i class="fa fa-clipboard-list state_icon movie_tag"></i>
                                <i class="fa fa-comment">
                                    <span>233</span>
                                </i>
                            </p>
                        </section>
                        <section class="seen seen1 changestate">
                            <p class="">
                                <i class="fa fa-check"></i>
                                <a href="">Seen</a>
                            </p>
                        </section>

                        <section class="watch watch1 changestate">
                            <p class="about_movie mb-2">
                                Mild-mannered high school chemistry teacher Walter White thinks his life can't get much
                                worse. His salary barely makes ends meet, a situation not likely to improve once his
                                pregnant wife gives birth, and their teenage son is battling cerebral palsy
                            </p>
                            <p class="ratings mb-4 mt-4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>42 Ratings</span>
                            </p>



                            <p class="watch_movie py-2">
                                Watch
                            </p>

                        </section>
                    </section>
                </article>
            </div>
        </section>

        </div>

        </section>
    </main>

    <main class="full_width mt-n5 mb-5 ">
        <section class="container text-center py-5">
            <h3 class="font-weight-bold pb-3">Send me email on updates</h3>
            <form action="" class="subscribe_input mx-auto">
                <input type="text" name="subscribe" id="subscribe" placeholder="Find a movie or series" class="pl-3">
                <input type="submit" value="Subscribe" class="ml-n2 ">
            </form>
        </section>
    </main>
    <main class="container p-md-0">
        <section class="row4 px-2">

            <div class="movie_list mx-auto d-flex flex-row flex-wrap justify-content-around">
                <article>
                    <div><img src="uploads/img1.png" alt=""></div>
                    <div class="m_details">
                        <span>1</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img2.png" alt=""></div>
                    <div class="m_details">
                        <span>200</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img3.png" alt=""></div>
                    <div class="m_details">
                        <span>3</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img1.png" alt=""></div>
                    <div class="m_details">
                        <span>4</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img4.png" alt=""></div>
                    <div class="m_details">
                        <span>5</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img5.png" alt=""></div>
                    <div class="m_details">
                        <span>6</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
            </div>

        </section>
    </main>

    <?php include "components/site_footer.php" ?>
</body>
<script src="js/main.js"></script>

</html>