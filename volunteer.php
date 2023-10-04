<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Become A Volunteer</title>
</head>

<body class="volunteerBody">
    <!--===== HEADER START =====-->
    <?php include('includes/header.php') ?>
    <!--===== HEADER END =====-->

    <!--===== HERO SECTION START =====-->
    <div class="hero__section">
        <div class="hero__sectionMain" style="background-image: url(assets/images/banners/volunteer-hero.png);">
            <div class="container">
                <div class="hero__text">
                    <h1>Become A Volunteer</h1>
                    <p>Diverse Ways to Make a Difference</p>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO SECTION END =====-->

    <!--===== PANEL SECTION START =====-->
    <section class="panel__section">
        <div class="container">
            <div class="util__panel">
                <div class="img__wrap">
                    <img src="assets/images/volunteer-1.png" alt="">
                </div>
                <div class="panel__text">
                    <h6 class="section__label">How to Join</h6>
                    <h4 class="section__heading">Your Impact, Our Gratitude</h4>
                    <p>By volunteering with us, you're directly contributing to our mission of rebuilding lives and communities. Your efforts have a lasting impact on those in need, and as a token of our appreciation, we offer volunteers the chance to see their impact firsthand and be part of our growing network of changemakers.</p>
                    <p>We offer a range of volunteer opportunities, from disaster relief efforts and community outreach to fundraising and administrative support. Whether you have a few hours to spare or are looking for a long-term commitment, there's a role for you to contribute your time and expertise.</p>
                </div>
            </div>
        </div>
    </section>
    <!--===== PANEL SECTION END =====-->

    <!--===== VOLUNTEER SECTION START =====-->
    <section class="volunteer__section">
        <div class="container">
            <div class="section__text text-center">
                <h4 class="section__heading">Volunteer Form</h4>
                <p>By volunteering with us, you're directly contributing to our mission of rebuilding lives and communities. </p>
            </div>
            <form action="" class="volunteerForm formBody">
                <div class="formGrid">
                    <div>
                        <label for="#">Your Name <span>*</span> </label>
                        <input type="text" required-fields required>
                    </div>
                    <div>
                        <label for="#">Email <span>*</span></label>
                        <input type="email" required-email-field data-regex-required-field placeholder="you@email.com" required>
                    </div>
                    <div class="span__two">
                        <label for="#">Phone No. <span>*</span></label>
                        <input type="number" requied-number-field data-regex-required-field inputmode="numeric" placeholder="+92" required>
                    </div>
                    <div class="span__two">
                        <label for="#">Location <span>*</span></label>
                        <input type="text" required-fields required>
                    </div>
                    <div class="span__two">
                        <label for="#">How Would You Liked To Be A Volunteer <span>*</span></label>
                        <select required-fields>
                            <option value="" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="span__two">
                        <label for="#">Availability <span>*</span></label>
                        <input type="text" required-fields required>
                    </div>
                    <div class="span__two">
                        <label for="">Additional Comments</label>
                        <textarea required name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg" data-submit-volunteer type="submit">Submit</button>
            </form>
        </div>
    </section>
    <!--===== VOLUNTEER SECTION END =====-->


    <div class="thankYouModal popup__overlay">
        <div class="popup__wrapper">
            <div class="thankYouModalMain text-center position__relative">
                <button class="modal__cross" data-close-modal><i class="ri-close-line"></i></button>
                <div class="img__wrap mb-20">
                    <img src="assets/images/icons/thumbs-up.png" alt="">
                </div>
                <h4 class="section__heading mb-20">Thank You</h4>
                <p class="text-center">Your application to become a volunteer has been received with gratitude. We appreciate your willingness to dedicate your time and skills to make a positive impact on the lives of those in need. Our team is excited to review your application and match you with meaningful volunteer opportunities that align with your skills and interests.</p>
            </div>
        </div>
    </div>

    <!--===== FOOTER START =====-->
    <?php include('includes/footer.php') ?>
    <!--===== FOOTER END =====-->

</body>

</html>