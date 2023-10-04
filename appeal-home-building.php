<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Home Building</title>
</head>

<body class="appealInnerBody">
    <!--===== HEADER START =====-->
    <?php include('includes/header.php') ?>
    <!--===== HEADER END =====-->

    <!--===== HERO SECTION START =====-->
    <div class="hero__section">
        <div class="hero__sectionMain" style="background-image: url(assets/images/banners/home-hero.png);">
            <div class="container">
                <div class="hero__text">
                    <h1 class="innerPageHeading">
                        Appeals
                        <img src="assets/images/icons/right-arrow-white.png" alt="">
                        Home Building
                    </h1>
                    <p>Tailored to Every Family's Needs</p>
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
                    <img src="assets/images/home-1.png" alt="">
                </div>
                <div class="panel__text">
                    <h6 class="section__label">Home Building</h6>
                    <h4 class="section__heading">Building More Than Homes</h4>
                    <p>Our approach goes beyond constructing physical structures. We're building a sense of belonging, a place where families can thrive and children can grow. By partnering with local communities and employing sustainable building practices, we're not only rebuilding homes but also fostering a brighter future for those in need.</p>
                    <p>We understand that each family has unique requirements and preferences. Our home designs are flexible and adaptable, ensuring that every home we build is a reflection of the residents' needs and cultural considerations. From design to construction, our goal is to create a space that truly feels like home.</p>
                    <a href="donation.php" class="btn btn-primary">Donate Now<i class="ri-heart-add-fill"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--===== PANEL SECTION END =====-->

    <!--===== NUMBER SECTION START =====-->
    <?php include('sections/number-section.php') ?>
    <!--===== NUMBER SECTION END =====-->

    <!--===== HELP SECTION START =====-->
    <?php include('sections/help-section.php') ?>
    <!--===== HELP SECTION END =====-->

    <!--===== FOOTER START =====-->
    <?php include('includes/footer.php') ?>
    <!--===== FOOTER END =====-->

</body>

</html>