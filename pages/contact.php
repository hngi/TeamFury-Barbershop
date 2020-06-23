<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ruslan+Display&display=swap"
        rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets//css/styles.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <script src="https://kit.fontawesome.com/a3a7fd7e68.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../assets/css/about.css"> -->
    <title>About</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div>
                <a class="navbar-brand logo_text" href="#">YOLO</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="first_Nav"></span>
              <span class="second_Nav"></span>
              <span class="third_Nav"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../pages/about-page.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <ion-icon name="call"></ion-icon>+234 806 598 2341</a>
                    </li>
                </ul>
                <button class="book_online_btn"> Book online</button>
            </div>
        </nav>
    </header>

    <div class="container-fluid p-0">
        <div class="sec-1">
            <div class="d-flex justify-content-left">
                <div class="d-flex flex-column">
                    <h1 class="site-title">Contact Us</h1>
                    <p class="par">Need to talk to us on your personal grooming, hair style, home service, or any other enquiry?</p>
                </div>
            </div>
        </div>
    </div>

    <!--Section 2: Forms and Map-->

    <div class="sec-2">
        <div class="container">
            <div class="row ml-3">
                <div class="col-md-6">
                    <form method = "post" action = "mailer.php">

                         <?php
                         
                     if(isset($_GET['success']) && ($_GET['success'] == 1)) {
                            echo "<div class=\"form-messages success\">Thank you! your message has been sent</div>";
                          }
         
                    if(isset($_GET['success']) && ($_GET['success'] == -1)) {
                       echo "<div class=\"form-messages error\">something went wrong</div>";
                         }
                         ?>
                        <h3 class="ret"><span class="sec-span">Contact</span> Us</h3>

                        <div class="form-row">
                            <div class="form-group col-md-12 ">
                                <input type="text" name = "name" class="form-control" id="inputEmail4" placeholder="Enter your name" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Enter our email address" required>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="inputEmail4" placeholder="Enter your message here" rows="10" cols="100" required>
                            </textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="../assets/img/pix2.png" class="img-fluid" alt="Responsive image" width="450px">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Icons-->

    <div class="sec-3 p-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-row">
                        <i class="fa fa-map-marker fa-2x m-2"></i>
                        <div class="d-flex flex-column">
                            <h3 class="m-2">Location</h3>
                            <p class="m-2">Plot 1234 Demola Adetokunbo Street, Victoria Isalnd, Lagos, Nigeria</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-row">
                        <i class="fa fa-envelope fa-2x m-2"></i>
                        <div class="d-flex flex-column">
                            <h3 class="m-2">Email</h3>
                            <p class="m-2">info@yolo.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-row">
                        <i class="fa fa-phone fa-2x m-2"></i>
                        <div class="d-flex flex-column">
                            <h3 class="m-2">Phone</h3>
                            <p class="m-2">+234 806 598 2341</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    </main>
    <!-- footer -->
    <footer>
        <div class="container footer">
            <div class="row footer_1">
                <div class="col-md">
                    <p class="news_and_offers">NEWS AND OFFERS</p>
                </div>
                <div class="col-md news_letter">
                    <div>
                        <input type="email" placeholder="Your email address">
                    </div>
                    <div class="Container_Btn">
                        <button>Subscribe</button>
                    </div>
                </div>
                <div class="col-md comp_socials">
                    <p>KEEP IN TOUCH</p>
                    <p class="member_socials">
                        <a href="">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </p>
                </div>
            </div>

            <div class="row footer_details">
                <div class="col-12 col-md-4">
                    <p class="salon_Address">Plot 1234 Demola Adetokunbo Street, PMB 12345<br /> Victoria Island, Lagos Nigeria
                    </p>
                    <p> <a href="callto:+234 806 598 2341">+234 806 598 2341</a> </p>
                    <p class="salon_Address"> <a href="mailto:info@barbershop.com">info@barbershop.com</a> </p>
                </div>

                <div class="col footer_genral_text">
                    <p class="working_header">WORKING HOURS </p>
                    <p> Monday - Friday</p>
                    <p> 8:00 am - 10:00 pm</p>
                    <p> Saturdays </p>
                    <p> 9:00am - 10:00pm</p>
                </div>

                <div class="col footer_genral_text">
                    <p class="working_header">HOT LINKS</p>
                    <p><a href=""> About</a> </p>
                    <p> <a href="">Our Vision & Mission</a></p>
                    <p> <a href="">Contact Us</a> </p>
                    <p> <a href="">Our Values</a> </p>
                </div>

                <div class="col-12 col-md-2 footer_logo align-items-center">
                    <p>Yola</p>
                </div>

            </div>

            <div class="row justify-content-center align-items-center copyright">
                <p>Copyright © 2020 Barber shop</p>
            </div>
        </div>

    </footer>
    <!-- End of footer -->



    <!-- The script tag -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>