<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Cloths</title>
</head>

<body class="appealInnerBody">
    <!--===== HEADER START =====-->
    <?php include('includes/header.php') ?>
    <!--===== HEADER END =====-->

    <!--===== HERO SECTION START =====-->
    <div class="hero__section">
        <div class="hero__sectionMain" style="background-image: url(assets/images/banners/cloth-hero.png);">
            <div class="container">
                <div class="hero__text">
                    <h1 class="innerPageHeading">
                        Appeals
                        <img src="assets/images/icons/right-arrow-white.png" alt="">
                        Cloths
                    </h1>
                    <p>Restoring Dignity and Comfort</p>
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
                    <img src="assets/images/cloth-1.png" alt="">
                </div>
                <div class="panel__text">
                    <h6 class="section__label">Clothes</h6>
                    <h4 class="section__heading">From Wardrobes to Hearts</h4>
                    <p>Our clothing distribution network is designed to efficiently and compassionately reach families in need. We collect, sort, and distribute clothing items that are clean, well-maintained, and suitable for different age groups. Your support ensures that clothing makes its way from wardrobes to hearts.</p>
                    <p>Different seasons bring unique challenges, especially for those who lack appropriate clothing. Our Clothes Appeal includes consideration for seasonal variations, ensuring that families are equipped with attire suitable for different weather conditions. Together, we're helping families stay comfortable year-round.</p>
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