<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Result | tifi.tv</title>
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
            <section class="col-lg-3 sidebar pl-0 pr-3">
                    <i class="fa fa-arrow-left arrow"></i>

                <h5 class="bg_color sidebar_header pl-5 ">
                    Filter
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
                </form>
                <div class="form-group pl-5">
                    <h6>Recently Added <i class="fa fa-angle-up"></i></h6>
                    <p><input type="checkbox" name="" value="Netflix" id="">Netflix</p>
                    <p><input type="checkbox" name="" value="Amazone Prime" id="">Amazone Prime</p>
                    <p><input type="checkbox" name="" id="" value="Apple TV">Apple TV</p>
                    <p><input type="checkbox" name="" id="" value="HBO">HBO</p>
                    <p><input type="checkbox" name="" id="" value="ShowMax">ShowMax</p>
                    <p><input type="checkbox" name="" id="" value="Disney TV">Disney TV</p>
                </div>
            </section>

            <section class="col-lg-9 main_page pl-3 pr-0">
                <article class="pb-5 pb-lg-0">
                    <h3 class="mb-4">Search Results for "baby"</h3>
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
                    <article class="range pt-4 my-4">
                        <span class="week">1 week</span>
                        <p>
                            Time range
                            <input type="range" class=""></p>
                    </article>
                </article>
                <div class="movie_list mt-5 mx-0 px-md-0 d-flex flex-row flex-wrap justify-content-between">
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                <section class="spaceholder my-5" style="height: 100px;">

                </section>
                <div class="movie_list mt-5 mx-0 px-md-0 d-flex flex-row flex-wrap justify-content-between">
                    <article class="">
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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
                                    Mild-mannered high school chemistry teacher Walter White thinks his life can't get
                                    much
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


        </section>
        <section class="pagination mb-5">
            <ul class="pagination mx-auto my-3">
                <li class="page-item mr-4"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#">7</a></li>
                <li class="page-item"><a class="page-link" href="#">8</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">20</a></li>
                <li class="page-item ml-4"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </section>
    </main>

    <?php include "components/site_footer.php" ?>
</body>
<script src="js/main.js"></script>

</html>