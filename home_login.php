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

    <main class="container pr-lg-0 py-3">
        <section class="fa fa-arrow-right arrow d-lg-none">

        </section>
        <section class="row">
            <section class="col-lg-3">
                <section class="sidebar">
                    <h5 class="bg_color sidebar_header">
                        Recommended For You
                    </h5>
                    <form action="" class="form1 px-5">
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
                    <form action="" class="form2 px-5">
                        <div class="form-group">
                            <h6>Recently Added <i class="fa fa-angle-up"></i></h6>
                            <p><input type="checkbox" name="" value="Netflix" id="">Netflix</p>
                            <p><input type="checkbox" name="" value="Amazone Prime" id="">Amazone Prime</p>
                            <p><input type="checkbox" name="" id="" value="Apple TV">Apple TV</p>
                            <p><input type="checkbox" name="" id="" value="HBO">HBO</p>
                            <p><input type="checkbox" name="" id="" value="ShowMax">ShowMax</p>
                            <p><input type="checkbox" name="" id="" value="Disney TV">Disney TV</p>

                            <h6>Hot on Twitter <i class="fa fa-angle-up"></i></h6>
                            <h6>Top Downloaded <i class="fa fa-angle-up"></i></h6>
                            <h6>Popular Lists <i class="fa fa-angle-up"></i></h6>

                            <p><input type="checkbox" name="" value="" id="">Baddt</p>
                            <p><input type="checkbox" name="" id="" value="">Sapio</p>
                            <p><input type="checkbox" name="" id="" value="">All Crime</p>
                            <p><input type="checkbox" name="" id="" value="">Bloddy Horrors</p>
                            <p><input type="checkbox" name="" id="" value="">Erotic</p>

                        </div>
                    </form>
                    <section class="my_list mb-5">
                        <h5 class=" sidebar_header px-5 my-5">
                            My Lists (Baddt)
                            <span>Edit</span>
                        </h5>
                        <form action="" class="form2 px-5">
                            <div class="form-group">
                                <h6>Make Public <i><input type="checkbox" name="" id=""></i></h6>
                                <p>Suits<i class="fas fa-times"></i></p>
                                <p>Breaking Bad<i class="fas fa-times"></i></p>
                                <p>Grey's Anatomy<i class="fas fa-times"></i></p>
                                <p>HBO<i class="fas fa-times"></i></p>

                            </div>

                        </form>
                    </section>
                </section>
            </section>
            <section class=" main col-lg-9">
                <section class="row1">
                    <article>
                        <h3>TV Shows you should watch</h3>
                        <div class="sort_range my-4 ">
                            <article class="sort">Sorted by
                                <span class="brand_color">Popularity <i class="fa fa-angle-down"></i></span>
                            </article>
                            <article class="range pt-2 pt-md-0 my-0">
                                <span class="week">1 week</span>
                                <p>Time range<input type="range" class="" value="50"></p>
                            </article>
                        </div>
                    </article>
                    <div class="movie_list mx-auto my-4">
                        <article>
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <span>5</span>
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
                                <span>100</span>
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
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <span>5</span>
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
                                <span>100</span>
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
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <span>5</span>
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
                                <span>100</span>
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
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <span>2</span>
                                <p>Power <br>
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
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <span>2</span>
                                <p>Power <br>
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
                    </div>

                </section>
                <section class="row2 my-5">
                    <article class="my-4">
                        <h3>Upcoming Movies and TV Shows</h3>
                        <p class="year my-n2 ">
                            <span class="active">2019</span>
                            <span>2020</span>
                            <span>2021</span>
                        </p>
                        <p class="month my-n2">
                            <span class="active">OCT</span>
                            <span>NOV</span>
                            <span>DEC</span>
                            <span>TBA</span>
                        </p>
                    </article>
                    <div class="movie_list mx-auto my-4">
                        <article>
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <p>Monet Hiest <br>
                                    <i>series: <a class="brand_color">Release Date:</a>Oct, 31st 2020</i></p>
                            </div>
                       </article>   
                       <article>
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <p>Monet Hiest <br>
                                    <i>series: <a class="brand_color">Release Date:</a>Oct, 31st 2020</i></p>
                            </div>
                       </article>  
                       <article>
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <p>Monet Hiest <br>
                                    <i>series: <a class="brand_color">Release Date:</a>Oct, 31st 2020</i></p>
                            </div>
                       </article>   
                       <article>
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <p>Monet Hiest <br>
                                    <i>series: <a class="brand_color">Release Date:</a>Oct, 31st 2020</i></p>
                            </div>
                       </article>   
                       <article>
                            <div><img src="uploads/img2.png" alt=""></div>
                            <div class="m_details">
                                <p>Monet Hiest <br>
                                    <i>series: <a class="brand_color">Release Date:</a>Oct, 31st 2020</i></p>
                            </div>
                       </article>    
                    </div>
                </section>
            </section>
        </section>
    </main>

    <?php include "components/site_footer.php" ?>
</body>
    <script>
        let sidebar = $(".sidebar");
        let arrow = $(".arrow");
        arrow.on("click", function(){
            sidebar.toggleClass("slideShow");
            arrow.toggleClass("fa-arrow-right", 1000).toggleClass("fa-arrow-left", 1000);
        })
    </script>
</html>