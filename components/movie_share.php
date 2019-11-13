<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/movie_share.css">
</head>

<body>
    <section class="container">
        <Section class="modal_header row my-5">
            <div class="modal_image col-md-5">
                <img src="uploads/got.png" alt="" class="" width="100%" height="100%">
            </div>

            <div class="modal_content col-md-7 p-5">
                <section class="modal_content_header">

                    <p class="review">
                        Write a review for
                    </p>
                    <h4 class="movie_name">Game of Thrones
                        <article class="brand_color float-right">
                            <i class="fa fa-star"></i> <span>5/10</span>
                        </article>
                    </h4>

                </section>

                <section class="modal_content_body">
                    <div class="body1 py-2 my-2">
                        <p class="float-right"><input type="checkbox" name="spoiler" id="spoiler" class="mr-2">
                            Contains Spoilers</p>
                        <p>Rate movie</p>

                        <h5 class=" brand_color">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </h5>
                    </div>
                    <div class="body2 my-3">
                        <form action="" name="modal_form1" class="modal_form1">
                            <p>Summary</p>
                            <input type="text" name="summary" id="summary">

                            <p class="my-3 ">Review</p>
                            <input type="text" class="review_input">

                            <p class="my-3">Also share also on social media</p>
                            <section class="row social_share text-left">
                                <p class="col-md-3 pl-3">
                                    <input type="checkbox" name="facebook" id="facebook"> Facebook
                                </p>
                                <p class="col-md-3 pl-3">
                                    <input type="checkbox" name="twitter" id="twitter"> Twitter
                                </p>
                            </section>
                    </div>
                    <div class="cta">
                        <input type="button" value="Submit" class="bg_color px-4 py-2">
                        <input type="button" value="Cancel" class="cancel brand_color px-4 py-2 ml-3">
                    </div>
                    </form>
                </section>
            </div>
        </Section>
    </section>
</body>

</html>