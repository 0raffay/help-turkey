<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include('includes/header-styles.php') ?>
  <title>Home</title>
</head>

<body class="homeBody">
  <!--===== HEADER START =====-->
  <?php include('includes/header.php') ?>
  <!--===== HEADER END =====-->

  <!--===== HERO SECTION START =====-->
  <section class=" home__hero" style="background-image: url(assets/images/banners/home-banner.png);">
    <div class="container">
      <div class="hero__text">
        <h1>Stand with Turkey in <br> Their Hour of Need</h1>
        <p>The people of Turkey are facing unimaginable challenges, but together, we can offer them hope and help them rebuild their lives. Your compassionate contribution will bring much-needed relief and aid to those in distress</p>
        <a href="donation.php" class="btn btn-primary">Donate Now <i class="ri-heart-add-fill"></i></a>
      </div>
    </div>
  </section>
  <!--===== HERO SECTION END =====-->

  <!--===== NUMBER SECTION START =====-->
  <?php include('sections/number-section.php') ?>
  <!--===== NUMBER SECTION END =====-->

  <!--===== DONATE NOW SECTION START =====-->
  <section class="donateNow__section">
    <div class="container">
      <div class="section__text">
        <h6 class="section__label">Help Turkiye</h6>
        <h4 class="section__heading text-center">Make a Difference with <br> Your Donation</h4>
      </div>

      <div class="util__panel">
        <div class="img__wrap">
          <img src="assets/images/donate-now.png" alt="">
        </div>
        <form class="donateNowForm">
          <div class="donateNowheader">
            <h6>Donation</h6>
          </div>
          <div class="donateNowBody">
            <div>
              <label for="donateCountry">Choose Country <span>*</span></label>
              <select id="donateCountry" value="">
                <option value="" selected>Please Choose Your Country</option>
                <option value="1">Country 1</option>
                <option value="2">Country 2</option>
                <option value="3">Country 3</option>
              </select>
            </div>
            <button class="btn btn-primary">Donate Now<i class="ri-heart-add-fill"></i></button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--===== DONATE NOW SECTION END =====-->

  <!--===== ABOUT US SECTION START =====-->
  <section class="aboutus__section">
    <div class="aboutus__main">
      <div class="container">
        <div class="util__panel">
          <div class="section__text">
            <h6 class="section__label">About Us</h6>
            <h4 class="section__heading text-left">Rebuilding Lives and Restoring Hope</h4>
          </div>
          <div class="aboutus__text">
            <p>At Help Turkiye, we are driven by a passionate commitment to bring relief and support to the victims of the devastating earthquake and flooding in Turkey. Our mission is to empower affected communities, rebuild homes, and restore hope in the hearts of those facing immense challenges.</p>
            <p>Help Turkiye is a collaborative effort of compassionate individuals who believe in the power of unity and empathy. Together, we strive to make a real difference in the lives of those impacted by natural disasters, offering a helping hand during their darkest hours.</p>
            <a href="#" class="btn btn-primary">Learn More <i class="ri-arrow-right-up-line"></i></a>
          </div>
        </div>
        <div class="img__wrap">
          <img src="assets/images/about-us-section.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--===== ABOUT US SECTION END =====-->

  <!--===== POPULAR CAUSES SECTION START =====-->
  <section class="causes__section low-opacity">
    <div class="container-fluid" style="padding: 0;">
      <div class="section__txt">
        <h6 class="section__label">Popular Causes</h6>
        <h4 class="section__heading text-center">Extending a Helping Hand to Turkey</h4>
      </div>

      <div class="causesSlider">
        <div class="item">
          <div class="causesCards">
            <div class="img__wrap">
              <img src="assets/images/causes-1.png" alt="">
            </div>
            <h6>Emergency Relief for Earthquake Survivors</h6>
            <p>The recent earthquake in Turkey has left countless families displaced and vulnerable. Your donation will provide emergency relief, including food, shelter, medical aid, and essential supplies, to those who have lost everything</p>
            <a href="donation.php" class="btn btn-primary btn-lg">Donate Now <i class="ri-heart-add-fill"></i></a>
          </div>
        </div>
        <div class="item">
          <div class="causesCards">
            <div class="img__wrap">
              <img src="assets/images/causes-2.png" alt="">
            </div>
            <h6>Supporting Flood-Affected Communities</h6>
            <p>The recent earthquake in Turkey has left countless families displaced and vulnerable. Your donation will provide emergency relief, including food, shelter, medical aid, and essential supplies, to those who have lost everything</p>
            <a href="" class="btn btn-primary btn-lg">Donate Now <i class="ri-heart-add-fill"></i></a>
          </div>
        </div>
        <div class="item">
          <div class="causesCards">
            <div class="img__wrap">
              <img src="assets/images/causes-2.png" alt="">
            </div>
            <h6>Supporting Flood-Affected Communities</h6>
            <p>The recent earthquake in Turkey has left countless families displaced and vulnerable. Your donation will provide emergency relief, including food, shelter, medical aid, and essential supplies, to those who have lost everything</p>
            <a href="donation.php" class="btn btn-primary btn-lg">Donate Now <i class="ri-heart-add-fill"></i></a>
          </div>
        </div>
        <div class="item">
          <div class="causesCards">
            <div class="img__wrap">
              <img src="assets/images/causes-2.png" alt="">
            </div>
            <h6>Supporting Flood-Affected Communities</h6>
            <p>The recent earthquake in Turkey has left countless families displaced and vulnerable. Your donation will provide emergency relief, including food, shelter, medical aid, and essential supplies, to those who have lost everything</p>
            <a href="donation.php" class="btn btn-primary btn-lg">Donate Now <i class="ri-heart-add-fill"></i></a>
          </div>
        </div>
      </div>
      <div class="causesArrows">
        <button class="causes-prev"><i class="ri-arrow-left-fill"></i></button>
        <button class="causes-next"><i class="ri-arrow-right-fill"></i></button>
      </div>
    </div>
  </section>
  <!--===== POPULAR CAUSES SECTION END =====-->

  <!--===== VIDEO SECTION START =====-->
  <?php include('sections/video-section.php') ?>
  <!--===== VIDEO SECTION END =====-->

  <!--===== HELP SECTION START =====-->
  <?php include('sections/help-section.php') ?>
  <!--===== HELP SECTION END =====-->

  <!--===== FOOTER START =====-->
  <?php include('includes/footer.php') ?>
  <!--===== FOOTER END =====-->

</body>

</html>