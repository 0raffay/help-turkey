<link rel="icon" type="image/png" href="assets/images/favicon/favicon.png">



<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $site__url = "https://";
else
    $site__url = "http://";
$site__url .= $_SERVER['HTTP_HOST'] . "/";

$og_content_1 = "Help Turkiye";
$og_content_2 = "Make a Difference with Your Donation";
?>


<!-- OF INFO START -->
<!-- OG INFO -->
<meta property="og:url" content="<?php echo $site__url ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $og_content_1 ?>">
<meta property="og:description" content="<?php echo $og_content_2 ?>">
<meta property="og:image" content="<?php echo $site__url ?>/assets/images/og.png">
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="<?php echo $site__url ?>">
<meta property="twitter:url" content="<?php echo $site__url ?>">
<meta name="twitter:title" content="<?php echo $og_content_1 ?>">
<meta name="twitter:description" content="<?php echo $og_content_2 ?>">
<meta name="twitter:image" content="<?php echo $site__url ?>/assets/images/og.png">
<!-- Meta Tags Generated via https://www.opengraph.xyz -->
<meta property="og:image" content="<?php echo $site__url ?>/assets/images/og.png" />
<meta property="og:image:secure_url" content="<?php echo $site__url ?>/assets/images/og.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="330" />
<meta property="og:image:alt" content="<?php echo $og_content_1 ?>" />
<meta name="image" property="og:image" content="<?php echo $site__url ?>/assets/images/og.png">
<meta name="author" content="resourcepad">
<meta name="description" property="og:description" content="<?php echo $og_content_2 ?>">
<!-- OG INFO -->

<!-- OF INFO END -->







<!-------------- bootstrap css start-------------->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- ------------bootstrap css End-------------->

<!----- ------------font awesome start ----------------->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<!----- ------------font awesome End ----------------->


<!-- ------------slick css Start -------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- ------------slick css End-------------->

<!-- ------------jquery Start -------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- ------------jquery Start -------------->


<!-- ------------FancyBox start-------------->
<!-- <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" /> -->
<!-------------- FancyBox End-------------->

<!-- ------------fonts -------------->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- ------------fonts -------------->


<!-------- local files Start -------->
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<!-- ------local files End -------->