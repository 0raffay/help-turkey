<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>News & Updates</title>
</head>

<body class="newsBody">
    <!--===== HEADER START =====-->
    <?php include('includes/header.php') ?>
    <!--===== HEADER END =====-->

    <!--===== HERO SECTION START =====-->
    <div class="hero__section">
        <div class="hero__sectionMain" style="background-image: url(assets/images/banners/contact-hero.png);">
            <div class="container">
                <div class="hero__text">
                    <h1>Contact Us</h1>
                    <p>We're here to help and listen. If you have any questions</p>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO SECTION END =====-->


    <!--===== CONTACT SECTION START =====-->
    <section class="contact__section">
        <div class="container">
            <div class="util__panel">
                <form action="" class="contactForm formBody">
                    <div class="formGrid">
                        <div>
                            <label for="#">Your Name</label>
                            <input type="text" required>
                        </div>
                        <div>
                            <label for="#">Email</label>
                            <input type="email" placeholder="you@email.com" required>
                        </div>
                        <div class="span__two">
                            <label for="#">Phone No.</label>
                            <input type="number" inputmode="numeric" placeholder="+92" required>
                        </div>
                        <div class="span__two">
                            <label for="#">Subject</label>
                            <input type="text" required>
                        </div>
                        <div class="span__two">
                            <label for="">Message</label>
                            <textarea required name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </form>
                <div class="contactInfoContainer">

                    <div class="contactInfo">
                        <a href="">
                            <div class="img__wrap">
                                <i class="ri-mail-send-line"></i>
                            </div>
                            <div class="contactText">
                                <h6 class="small__title">Email Address</h6>
                                <p class="small__text">helpturkey@gmail.com</p>
                            </div>
                        </a>
                    </div>

                    <div class="contactInfo">
                        <a href="">
                            <div class="img__wrap">
                                <i class="ri-mail-send-line"></i>
                            </div>
                            <div class="contactText">
                                <h6 class="small__title">Phone Number</h6>
                                <p class="small__text">0900-78601</p>
                            </div>
                        </a>
                    </div>

                    <div class="contactInfo">
                        <a href="">
                            <div class="img__wrap">
                                <i class="ri-facebook-circle-fill"></i>
                            </div>
                            <div class="contactText">
                                <h6 class="small__title">Facebook</h6>
                            </div>
                        </a>
                    </div>

                    <div class="contactInfo">
                        <a href="">
                            <div class="img__wrap">
                                <i class="ri-instagram-fill"></i>
                            </div>
                            <div class="contactText">
                                <h6 class="small__title">Instagram</h6>
                            </div>
                        </a>
                    </div>

                    <div class="contactInfo">
                        <a href="">
                            <div class="img__wrap">
                                <i class="ri-linkedin-box-fill"></i>
                            </div>
                            <div class="contactText">
                                <h6 class="small__title">Linkedin</h6>
                            </div>
                        </a>
                    </div>

                    <div class="contactInfo">
                        <a href="">
                            <div class="img__wrap">
                                <i class="ri-twitter-fill"></i>
                            </div>
                            <div class="contactText">
                                <h6 class="small__title">Twitter</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== CONTACT SECTION END =====-->

    <!--===== MAP SECTION END =====-->
    <section class="mapSection">
        <div class="container">
            <div class="iframeWrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6342301.00043755!2d35.129329549999994!3d39.0876459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2zVMO8cmtpeWU!5e0!3m2!1sen!2s!4v1693302449892!5m2!1sen!2s" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contactInfo">
                    <a href="">
                        <div class="img__wrap">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <div class="contactText">
                            <h6 class="small__title">Office Address </h6>
                            <p class="small__text">1441 Morris Ave, Union, NJ 07083</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!--===== MAP SECTION END =====-->




    <!--===== FOOTER START =====-->
    <?php include('includes/footer.php') ?>
    <!--===== FOOTER END =====-->

</body>

</html>