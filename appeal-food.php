<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Food</title>
</head>

<body class="appealInnerBody">
    <!--===== HEADER START =====-->
    <?php include('includes/header.php') ?>
    <!--===== HEADER END =====-->

    <!--===== HERO SECTION START =====-->
    <div class="hero__section">
        <div class="hero__sectionMain" style="background-image: url(assets/images/banners/food-hero.png);">
            <div class="container">
                <div class="hero__text">
                    <h1 class="innerPageHeading">
                        Appeals
                        <img src="assets/images/icons/right-arrow-white.png" alt="">
                        Food
                    </h1>
                    <p>Nurturing Health and Well-Being</p>
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
                    <img src="assets/images/food-1.png" alt="">
                </div>
                <div class="panel__text">
                    <h6 class="section__label">Food</h6>
                    <h4 class="section__heading">Join the Fight Against Hunger</h4>
                    <p>Your involvement in our Food Appeal can have a transformative impact. Whether you donate funds, volunteer at distribution centers, or spread awareness, you're contributing to a movement that's making a direct and immediate difference in the lives of those facing food insecurity. Join us in nourishing hope.</p>
                    <p>Our Food Appeal isn't just about feeding hungry stomachs; it's about restoring dignity and providing a sense of normalcy to those who have experienced upheaval. By alleviating food insecurity, we're empowering families to focus on other aspects of recovery, such as rebuilding their lives and communities.</p>
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