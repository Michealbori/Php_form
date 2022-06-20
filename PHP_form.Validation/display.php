<?php require_once "info.php"; ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./display.css">
</head>
<body>
<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">About Me</h3>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Fullname</label>
                                        <p><?php echo  $firstname. " " .$lastname ?> </p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Email</label>
                                        <p><?php echo  $email1 ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p><?php echo  $country. " " .$state ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p><?php echo  $email1 ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p> <?php echo $phone ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Social Medial</label>
                                        <p><?php echo $socialmedia ?></p>
                                    </div>
                                    <div class="media">
                                        <label>Freelance</label>
                                        <p>Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
