<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Settings | tifi.tv</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/settings.css">

</head>

<body>
    <?php include "components/site_header.php" ?>
    <div class="page_header container my-0">
        <h3 class="page_header_text text-center mb-5 mb-md-0">SETTINGS</h3>
    </div>
    <main class="container mx-auto py-5 row ">
        <section class="sidebar col-md-2 px-0">
            <nav class="row mx-0">
                <p class="nav_links col-4 col-md-12 my-0 mx-0  py-2"><a href="settings.php"
                        class="nav_links_item active">General</a></p>
                <p class="nav_links col-4 col-md-12 my-0 mx-0  py-2"><a href="settings.php"
                        class="nav_links_item ">Sharing</a>
                </p>
                <p class="nav_links col-4 col-md-12 my-0 mx-0 py-2"><a href="settings.php"
                        class="nav_links_item">Notification</a></p>
            </nav>
        </section>

        <section class="content col-md-10 mx-auto pl-5 pr-0">
            <section class="content_box">
                <section class="account">
                    <h4 class="my-3 my-md-0">ACCOUNT</h4>
                    <div class="my-5 text-center">
                        <img src="uploads/super.jpeg" class="img rounded-circle mr-3 my-2" width="130px" height="130px"
                            alt="">
                        <i class="fa fa-upload "></i>
                    </div>
                    <section class="form_container px-3">
                        <form action="" class="form1">
                            <div class="form-group row">
                                <label class="col-md-6" for="username" class="">Username:</label>
                                <input class="col-md-6" type="text" name="username" placeholder="Elkrypto">
                            </div>

                            <div class="form-group row">
                                <label class="col-md-6" for="email">Email:</label>
                                <input class="col-md-6" type="email" name="email" placeholder="FreddyKrueger@gmail.com">
                            </div>

                            <div class="form-group row">
                                <label class="col-md-6" for="d_name">Display Name:</label>
                                <input class="col-md-6" type="text" name="d_name" placeholder="Frederick Dee">
                            </div>

                            <div class="form-group row">
                                <label class="col-md-6" for="location">Lcation:</label>
                                <input class="col-md-6" type="text" name="location" placeholder="Portharcourt">
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="date">Date of Birth:</label>
                                <span class="col-md-6 ml-n3">
                                    <select class="col-6" type="month" name="month" value="December">
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December" selected>December</option>
                                    </select>
                                    <input class="col-2 " type="number" name="" id="" min="1" max="31" value="15">
                                    <input class="col-3 " type="number" name="" id="" min="1970" max="2018"
                                        value="2018">
                                </span>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="gender">Gender:</label>
                                <input class="col-md-6" type="text" name="gender" placeholder="Elkrypto">
                            </div>


                        </form>
                    </section>
                    <h4>TIME ZONE</h4>
                    <section class="form_container px-3 ">
                        
                        <form action="" class="form2">
                            <div class="form-group row">
                                <label class="col-md-6" for="timezone">TimeZone:</label>
                                <select class="col-md-6 " name="timezone" id="timezone">
                                    <option value="">Australian Central Daylight</option>
                                    <option value="">Eastern Daylight Time</option>
                                    <option value="">West Africa Time</option>
                                    <option value="">Pacific Time</option>
                                    <option value="">East Greenland Time</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="date_format">Date Format:</label>
                                <select class="col-md-6 " name="date_format" id="date_format">
                                    <option value="mdy">Month Day Year</option>
                                    <option value="dmy">Day Month Year</option>
                                    <option value="ymd">Year Month Day </option>

                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="time_format">Time Format:</label>
                                <select class="col-md-6 " name="time_format" id="time_format">
                                    <option value="12">12 hours</option>
                                    <option value="24"> 24 hours</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-6" for="week_start">Week Starts:</label>
                                <select class="col-md-6 " name="week_start" id="week_start">
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Saturday">Saturday</option>

                                </select>
                            </div>
                        </form>
                    </section>
                </section>

                <section class="services_container">
                    <div class="services_container_header">
                        <h4>SERVICES I SUBSCRIBE TO</h4>
                        <P>EDIT</P>
                    </div>

                    <section class="services mb-5">
                        <section class="img_container mx-auto">
                            <article><img src="uploads/prov1.png" alt=""></article>
                            <article><img src="uploads/prov2.png" alt=""></article>
                            <article><img src="uploads/prov3.png" alt=""></article>
                            <article><img src="uploads/prov4.png" alt=""></article>
                            <article><img src="uploads/prov5.png" alt=""></article>
                            <article><img src="uploads/prov6.png" alt=""></article>
                            <article><img src="uploads/prov1.png" alt=""></article>
                            <article><img src="uploads/prov2.png" alt=""></article>
                            <article><img src="uploads/prov3.png" alt=""></article>
                            <article><img src="uploads/prov4.png" alt=""></article>
                            <article><img src="uploads/prov5.png" alt=""></article>
                            <article><img src="uploads/prov6.png" alt=""></article>                    
                        </section> 
                        <div class="text-center brand_color mt-5 add_providers"> ADD MORE PROVIDERS</div>

                    </section>
                    <div class="clear cta mt-n5 mb-5 text-center">
                        <a href="" class="bg_color px-5 py-1 font-weight-bold mb-3">Save</a>
                        <a href="" class="brand_color px-5 py-1 font-weight-bold">Cancel</a>
                    </div>
                </section>
            </section>
        </section>
    </main>

    <?php include "components/site_footer.php" ?>
</body>

</html>