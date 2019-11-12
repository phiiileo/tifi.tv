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
    <link rel="stylesheet" href="css/site_header_footer.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <?php include "components/site_header.php" ?>

    <main class="p-md-5">
        <section class="row row1 p-3 mb-5">
            <article class="col-md-6">
                <h3>
                    Watch the <span class="brand_color">movies</span> and <span class="brand_color">Tv shows</span>
                    based on
                    your personality
                </h3>
                <p>
                    Find, track and discover where to watch your favourite TV shows and movies from Netflix, Amazon
                    Prime, Hulu, Showtime and more services.
                </p>
                <div>
                    <form action="" class="search_input">
                        <input type="text" name="search" id="search" placeholder="Find a movie or series" class="pl-3">
                        <input type="submit" value="Search" class="bg_color ml-n2">
                    </form>
                </div>
            </article>

            <article class="carousel_container col-md-6 my-4 mx-auto">
            </article>

        </section>

        <section class="row row2 ml-0">
            <div class="personalize col-12">
                <span>Personalize</span>
                <span>
                    <input type="button" value="Save" class="bg_color px-5 mb-2">
                </span>
            </div>
            <div class="popular_brands col-12">
                <span>What do you have:</span>
                <article class="my-2">
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

        <section class="row3">
            <div class="img_container mx-auto my-0 py-5 py-md-0"><img src="uploads/super.jpeg" alt="">
                <p>Charles Etu <i class="fas fa-pencil-alt"></i></p>
            </div>
            <div class="personalize_acct">
                <section class="break_2">
                    <div>
                        <section class="mx-auto my-0">Personality type </section><span class="py-1 my-3">INTP</span>
                    </div>
                    <div>
                        <section class="genre_container">Genres you like</section>
                        <article class="genre row mx-auto my-3">
                            <div class="col-6 text-right pr-1 mb-1"><span>Horror</span></div>
                            <div class="col-6 text-left pl-1"><span>Sci-Fi</span></div>
                            <div class="col-6 text-right pr-1 mb-1"><span>Comedy</span></div>
                            <div class="col-6 text-left pl-1"><span class="plus p-0"><i class="">+</i></span></div>
                        </article>
                    </div>
                </section>
                <section class="m_likes px-1 mx-auto">
                    <p>Sample movies & series you like</p>
                    <div class="mx-3">
                        <article>
                            <img src="uploads/img1.png" alt="">

                            <p>Aladdin</p>
                            <p>Movie</p>
                        </article>
                        <article>
                            <img src="uploads/img2.png" alt="">
                            <p>Matrix</p>
                            <p>Movie</p>
                        </article>
                        <article>
                            <img src="uploads/img3.png" alt="">
                            <p>Us</p>
                            <p>Movie</p>
                        </article>
                        <article>
                            <img src="uploads/img4.png" alt="">
                            <p>The walki...</p>
                            <p>Series</p>
                        </article>
                        <article>
                            <img src="uploads/img5.png" alt="">
                            <p>Alita Battle...</p>
                            <p>Movie</p>
                        </article>
                        <article class="plus">
                            <p class="px-2 py-2">
                                +
                            </p>
                        </article>
                    </div>
                </section>
            </div>
        </section>

        <section class="row4 px-2 mt-5">
            <article>
                <h3>Most Popular right now</h3>
                <article class="sort">Sorted by
                    <span class="brand_color">Popularity <i class="fa fa-angle-down"></i></span>
                </article>
                <article class="range pt-4 my-4">
                    <span class="week">1 week</span>
                    <p>
                        Time range
                        <input type="range" class=""></p>
                </article>
            </article>
            <div class="movie_list mx-auto">
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
                        <span>2</span>
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
            </div>
            <div class="movie_list">
                <article>
                    <div><img src="uploads/img3.png" alt=""></div>
                    <div class="m_details">
                        <span>1</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img4.png" alt=""></div>
                    <div class="m_details">
                        <span>2</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img2.png" alt=""></div>
                    <div class="m_details">
                        <span>3</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img5.png" alt=""></div>
                    <div class="m_details">
                        <span>4</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img2.png" alt=""></div>
                    <div class="m_details">
                        <span>5</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img4.png" alt=""></div>
                    <div class="m_details">
                        <span>6</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
            </div>
            <div class="movie_list">
                <article>
                    <div><img src="uploads/img1.png" alt=""></div>
                    <div class="m_details">
                        <span>1</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img5.png" alt=""></div>
                    <div class="m_details">
                        <span>2</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img1.png" alt=""></div>
                    <div class="m_details">
                        <span>3</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img5.png" alt=""></div>
                    <div class="m_details">
                        <span>4</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img2.png" alt=""></div>
                    <div class="m_details">
                        <span>5</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img4.png" alt=""></div>
                    <div class="m_details">
                        <span>6</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
            </div>
        </section>

        <section class="row5 px-1 py-5 mx-n5 mt-5">
            <div>
                <h3>Send me email on updates</h3>
                <form action="" class="mx-auto">
                    <input type="email" name="email" id="email" placeholder="Enter Email" class="pl-3">
                    <input type="submit" value="Subscribe" class="bg_color ml-n2">
                </form>
            </div>
        </section>
        <section class="row5--cover px-1 py-5 ">

        </section>

        <section class="row4 px-2 mt-n5 mb-5">
            <div class="movie_list">
                <article>
                    <div><img src="uploads/img3.png" alt=""></div>
                    <div class="m_details">
                        <span>1</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img4.png" alt=""></div>
                    <div class="m_details">
                        <span>2</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img2.png" alt=""></div>
                    <div class="m_details">
                        <span>3</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img5.png" alt=""></div>
                    <div class="m_details">
                        <span>4</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img2.png" alt=""></div>
                    <div class="m_details">
                        <span>5</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                    <div><img src="uploads/img4.png" alt=""></div>
                    <div class="m_details">
                        <span>6</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
            </div>
        </section>
        </section>

    </main>

    <?php include "components/site_footer.php" ?>
</body>

</html>