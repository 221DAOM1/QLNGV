<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Người giúp việc</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1234567890123456" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Jquery-ui.min css -->
    <link rel="stylesheet" href="./public/css/jquery-ui.min.css">
    <!-- Lib -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>
    <script src="./public/js/jquery.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./Publics/css/style.css">
    <link rel="stylesheet" href="./Publics/css/reset.css">
    <link rel="stylesheet" href="./Publics/css/main.css">
    <link rel="stylesheet" href="./Publics/css/login.css">
    <link rel="stylesheet" href="./Publics/css/recruiter.css">
</head>
<body>
    <?php
        require_once("header_footer/header.php");
    ?>
    <?php
        //điều hướng
        require_once("navigation.php");
    ?>
   <?php
        require_once("header_footer/footer.php");
    ?>
    <script src="./Publics/lib/owl.carousel.min.js"></script>

    <script src="./Publics/lib/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./Publics/js/main.js"></script>
    <!-- <script src="./public/js/countdown.js"></script> -->
    <script>
        var $sliderBanner = $('.slider-list')
        $sliderBanner.owlCarousel({
            margin:10,
            loop: true,
            nav:true,
            autoplay:true,
            autoplayTimeout:4000,
            responsive:{
                1000:{
                    items:1
                },
                768:{
                    items:1
                },
                500:{
                    items:1
                }
            }
        });
    </script>
    <script>
        function start() {
            const timeLeft = JSON.parse(localStorage.getItem('timeLeft'));
            if(timeLeft==null){
                localStorage.setItem('timeLeft', JSON.stringify({
                    d: 7,
                    h: 0,
                    m: 0,
                    s: 0,
                }))
            } else {
                return
            }
        }
        start()
    </script>
</body>
</html>