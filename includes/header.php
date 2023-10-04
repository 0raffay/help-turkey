<header>
    <div class="container">
        <div class="headerContainer">
            <div class="logo">
                <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
            </div>
            <nav>
                <ul class="nav__list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="has__submenu">
                        <a href="appeals.php">Appeals</a>
                        <div class="submenu">
                            <ul>
                                <li class="has__submenu">
                                    <a href="appeal-primary-health-care.php">Primary Health Care</a>
                                    <div class="submenu">
                                        <ul>
                                            <li><a href="appeal-primary-health-care.php#medical-campus">Medical Campus</a></li>
                                            <li><a href="appeal-primary-health-care.php#hygene">Hygiene</a></li>
                                            <li><a href="appeal-primary-health-care.php#vaccines">Vaccines</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="appeal-home-building.php">Home Building</a></li>
                                <li><a href="appeal-food.php">Food</a></li>
                                <li><a href="appeal-cloths.php">Cloths</a></li>
                                <li><a href="appeal-tents.php">Tents</a></li>
                                <li><a href="appeal-water.php">Clean Water</a></li>
                                <li><a href="appeal-maternal.php">Maternal Appeal</a></li>
                                <li><a href="appeal-lights.php">Solar Lights</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="news-updates.php">News & Updates</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
            <div class="headerButton">
                <a href="donation.php" class="btn btn-primary">Donate Now <i class="ri-heart-add-fill"></i></a>
            </div>

            <div class="burgerMenu">
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>
    </div>
</header>


<div class="mobile__header">
    <div class="img__wrap">
        <img src="assets/images/logo.png" alt="">
        <div data-close-menu><i class="ri-close-fill"></i></div>
    </div>
    <ul class="mobile__list">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li class="has__submenu">
            <a href="#" onclick="(e)=>{e.preventDefault();}">Appeals</a>
            <div class="submenu">
                <ul>
                    <li class=" has__innerSubmenu">
                        <a href="#" onclick="(e)=>{e.preventDefault();}">Primary Health Care</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="">Medical Campus</a></li>
                                <li><a href="#">Hygiene</a></li>
                                <li><a href="#">Vaccines</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Home Building</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Cloths</a></li>
                    <li><a href="#">Tents</a></li>
                    <li><a href="#">Clean Water</a></li>
                    <li><a href="#">Maternal Appeal</a></li>
                    <li><a href="#">Solar Lights</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#">News & Updates</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</div>