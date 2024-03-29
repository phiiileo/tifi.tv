<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile | tifi.tv</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/user_profile.css">
</head>

<body>
<div class="container">
        <?php include "components/site_header.php" ?>
    </div>    <main class="mx-auto mb-5 py-5">
        <div class="container">
            <section class="section--one">
                <span>
                    <h3>Instantly watch TV shows & Movies</h3>
                </span>
                <div class="steps row mx-auto my-5">
                    <section class="col-6">
                        <a href="signin.php">
                            <p>STEP 1</p>
                            <P>Create Account</P>
                        </a>
                    </section>
                    <section class="active col-6">
                        <p>STEP 2</p>
                        <p>Welcome to tifi.tv</p>
                    </section>
                </div>
            </section>

            <section class="body p-3">
                <p class="intro mb-3">
                    <span>Welcome <a href="#" class="brand_color">Brandon</a></span>, Tifi.tv works better when we know
                    what you like
                </p>
                <div class="add_something">
                    <p>Add something to your watchlist</p>
                    <input type="text" name="add_something" class="mt-1 p-1">
                </div>

                <div class="pick_genre mx-auto my-5">
                    <p>Pick a genre</p>
                    <div class="genre">
                        <section>
                            <article>
                                <span>
                                    <i class="fa fa-check"></i>
                                </span>
                                <p>Drama</p>
                            </article>
                            <article>
                                <span class="g_active"> <i class="fa fa-check"></i></span>
                                <p>Romance</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Comedy</p>
                            </article>
                            <article>
                                <span class="g_active"> <i class="fa fa-check"></i></span>
                                <p>Herror</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Thriller</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Science Fiction</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Action</p>
                            </article>
                        </section>
                        <section>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Western</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Adventure</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Animation</p>
                            </article>
                            <article class="tlong">
                                <span> <i class="fa fa-check"></i></span>
                                <p>Documentary</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Fantasy</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Musicals</p>
                            </article>
                            <article>
                                <span> <i class="fa fa-check"></i></span>
                                <p>Crimes</p>
                            </article>
                        </section>
                    </div>
                </div>

                <div class="select_movies py-5 clear">
                    <p> Select movies
                        <span>This allows us to figure out a recomendation for you</span>
                    </p>
                    <section class="movie_container">

                        <div class="movie_lists">
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img1.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img2.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img2.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img3.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img1.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img3.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img4.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img5.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img3.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img3.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img3.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>
                            <article class="move_list_item">
                                <figure>
                                    <img src="uploads/img3.png" alt="">
                                </figure>
                                <figcaption>
                                    The Unicorn <span>(2019)</span>
                                </figcaption>
                            </article>

                        </div>
                    </section>
                </div>
                <p class="cta my-5"><a href="#">Finish</a><a href="#">Skip this step</a></p>

            </section>
        </div>
    </main>

    <?php include "components/site_footer.php" ?>
</body>
<script>

    let genre = $(".genre article span");

    for (i = 0; i < genre.length; i++) {
        $(genre[i]).on("click", function () {
            $(this).toggleClass("g_active");
        });

    }
</script>

</html>