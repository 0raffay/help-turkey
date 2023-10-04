  <!--===== SUPPORT SECTION START =====-->
  <?php include('sections/support-section.php') ?>
  <!--===== SUPPORT SECTION END =====-->

  <footer>
      <div class="container">
          <div class="topFooter">
              <div class="util__panel">
                  <div class="footerText">
                      <div class="img__wrap">
                          <img src="assets/images/logo.png" alt="">
                      </div>
                      <p class="small__text">
                          At Help Turkiye, we believe in the power of compassion and collective action to bring positive change to the lives of those facing adversity. Our organization was founded with a single, heartfelt mission: to extend a helping hand to the people of Turkey during their most challenging times.
                      </p>
                  </div>
                  <div class="footerLinks util__panel">
                      <div>
                          <h3 class="small__title">Home</h3>
                          <ul>
                              <li><a href="about.php">About us</a></li>
                              <li><a href="#">Team</a></li>
                              <li><a href="about.php">Our Mission</a></li>
                              <li><a href="contact.php">Contact Us</a></li>
                          </ul>
                      </div>
                      <div>
                          <h3 class="small__title">More</h3>
                          <ul>
                              <li><a href="appeals.php">Projects</a></li>
                              <li><a href="#">Events</a></li>
                              <li><a href="donation.php">Donate</a></li>
                              <li><a href="#">Blog</a></li>
                          </ul>
                      </div>
                      <div>
                          <h3 class="small__title">Connect</h3>
                          <ul>
                              <li><a href="">Facebook</a></li>
                              <li><a href="#">Instagram</a></li>
                              <li><a href="#">Twitter</a></li>
                              <li><a href="#">Linkedin</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="subscribe">
                      <h4>Subscribe to get latest <br> updates</h4>
                      <div class="subscribeInput">
                          <input type="text" placeholder="Your email">
                          <button class="btn btn-secondary subscribeButton">Subscribe</button>
                      </div>
                      <h6 class="small__title" style="display: none; color:var(--clr-primary); font-weight: 500;">Thank You For Subscribing</h6>
                  </div>

                  <script>
                      let subButton = $('.subscribeButton')
                      subButton.click(function() {

                          if ($('.subscribeInput input').val() !== "") {
                              $('.subscribeInput').hide()
                              $('.subscribeInput').next().show()
                          }else {
                            $('.subscribeInput').addClass('error')
                          }
                      })
                  </script>
              </div>
          </div>
          <div class="bottomFooter">
              <a href="#">Privacy Policy</a>
              <p>© All Rights Reserved By Help Turkiye 2023 </p>
              <a href="#">Terms & Conditions</a>
          </div>
      </div>
  </footer>

  <?php include('includes/footer-scripts.php') ?>