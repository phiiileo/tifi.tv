<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | tifiTV</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/site_header_footer.css" type="text/css">
</head>

<body>
    <?php include "components/site_header.php" ?>

    <main>
        <section class="row1">
            <article>
                <h3>
                    Watch the <span class="b_color">movies</span> and <span class="b_color">Tv shows</span> based on
                    your personality
                </h3>
                <p>
                    Find, track and discover where to watch your favourite TV shows and movies from Netflix, Amazon
                    Prime, Hulu, Showtime and more services.
                </p>
                <div>
                    <form action="" class="search_input">
                        <input type="text" name="search" id="search" placeholder="Find a movie or series"><input
                            type="submit" value="Search" class="bg_color">
                    </form>
                </div>
            </article>
            <article class="carousel_container">
            </article>
        </section>

        <section class="row2">
            <div class="personalize">
                <span>Personalize</span>
                <span>
                    <input type="button" value="Save" class="bg_color">
                </span>
            </div>
            <div class="popular_brands">
                <span>What do you have:</span>
                <article>
                    <span><input type="checkbox" name="netflix" id="netflix" value="Netflix"><img
                        src="uploads/netflix.png" alt=""></span>
                    <span><input type="checkbox" name="hulu" id="hulu" value="hulu"><img src="uploads/hulu.png"
                        alt=""></span>
                    <span><input type="checkbox" name="hbo" id="hbo" value="HBO"><img src="uploads/hbo.png"
                        alt=""></span>
                    <span><input type="checkbox" name="amazon" id="amazon" value="amazon"><img
                        src="uploads/amazon.png" alt=""></span>
                    <span><input type="checkbox" name="showmax" id="showmax" value="showmax"><img
                        src="uploads/showmax.png" alt=""></span>
                </article>
            </div>
        </section>

        <section class="row3">
            <div class="img_container"><img src="uploads/hulu.png" alt="">
                <p>Charles Etu <i class="fas fa-pencil-alt"></i></p>
            </div>
            <div class="personalize_acct">
                <div>
                <section>Personality type </section><span>INTP</span>
                </div>
                <div>
                <section>Genres you like</section>
                <article class="genre">
                        <span>Horror</span>
                        <span>Sci-Fi</span>
                        <span>Comedy</span>
                        <span class="plus"><i>+</i></span>
                </article>
                </div>
                
                <section class="m_likes">
                    <p>Sample movies & series you like</p>
                    <div>
                        <article>
                            <img src="uploads/hulu.png" alt="">
                            <p>Aladdin</p>
                            <span>Movie</span>
                        </article>
                        <article>
                            <img src="uploads/hulu.png" alt="">
                            <p>Matrix</p>
                            <span>Movie</span>
                        </article>
                        <article>
                            <img src="uploads/hulu.png" alt="">
                            <p>Us</p>
                            <span>Movie</span>
                        </article>
                        <article>
                            <img src="uploads/netflix.png" alt="">
                            <p>The walki...</p>
                            <span>Series</span>
                        </article>
                        <article>
                            <img src="uploads/netflix.png" alt="">
                            <p>Alita Battle...</p>
                            <span>Movie</span>
                        </article>
                        <article class="plus">
                           <span>
                               +
                           </span>
                        </article>
                    </div>
                </section>
            </div>
        </section>

        <section class="row4">
            <article>
                <h3>Most Popular right now</h3>
                <article class="sort">Sorted by 
                    <span class="b_color">Popularity <i class="fa fa-angle-down"></i></span>
            </article>
            <article class="range">
                <span class="week">1 week</span>
                <p><span>
                Time range</span><input type="range"></p>
            </article>
            </article>
            <div class="movie_list">
                <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>1</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>2</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>3</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>4</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>5</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </article>
                     <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>6</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
            </div>
            <div class="movie_list">
                <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>1</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>2</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>3</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>4</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>5</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </article>
                     <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>6</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
            </div>
            <div class="movie_list">
                <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>1</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>2</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>3</span>
                        <p>Power <br>
                            <i>series</i></p>
                    </div>
                </article>
                 <article>
                    <div><img src="uploads/hbo.png" alt=""></div>
                    <div class="m_details">
                        <span>4</span>
                        <p>Monet Hiest <br>
                            <i>series</i></p>
                    </div>
                </article>
                <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>5</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </article>
                     <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>6</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
            </div>
        </section>

        <section class="row5">
            <div>
            <h3>Send me email on updates</h3>
            <form action="">
                <input type="email" name="email" id="email" placeholder="Email address"><input type="submit" value="Subscribe" class="bg_color">
            </form>
            </div>
        </section>
        <section class="row5--cover">

        </section>

        <section class="row4">
                <div class="movie_list">
                    <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>1</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </article>
                     <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>2</span>
                            <p>Power <br>
                                <i>series</i></p>
                        </div>
                    </article>
                     <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>3</span>
                            <p>Power <br>
                                <i>series</i></p>
                        </div>
                    </article>
                     <article>
                        <div><img src="uploads/hbo.png" alt=""></div>
                        <div class="m_details">
                            <span>4</span>
                            <p>Monet Hiest <br>
                                <i>series</i></p>
                        </div>
                    </article>
                    <article>
                            <div><img src="uploads/hbo.png" alt=""></div>
                            <div class="m_details">
                                <span>5</span>
                                <p>Monet Hiest <br>
                                    <i>series</i></p>
                            </div>
                        </article>
                         <article>
                            <div><img src="uploads/hbo.png" alt=""></div>
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