<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Superior Fermosa</title>

    <!-- ============================== -->
    <!-- =========== FAVICON ==========-->
    <!-- ============================== -->

    <link rel="icon" href="assets/img/icon/icon.png" type="image/x-icon">

    <!-- ============================== -->
    <!-- =========== STYLE ============-->
    <!-- ============================== -->

    <link rel="stylesheet" href="assets/styles/style.css">

    <!-- ============================== -->
    <!-- =========== ICONS ============-->
    <!-- ============================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />

    <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- ============================== -->
    <!-- =========== FONTS ============-->
    <!-- ============================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;500;600&display=swap" rel="stylesheet">

</head>

<body>

    <!-- ============================== -->
    <!-- =========== HEADER ============-->
    <!-- ============================== -->

    <?php
    include('assets/templates/nav.php');
    ?>

    <!-- ============================== -->
    <!-- =========== SLIDER ===========-->
    <!-- ============================== -->

    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="assets/img/slider/image1.jpg" alt="">
            </div>
            <div class="item">
                <img src="assets/img/slider/image2.jpg" alt="">
            </div>
            <div class="item">
                <img src="assets/img/slider/image3.jpg" alt="">
            </div>
            <!-- <div class="item">
                <img src="img/4.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/5.jpg" alt="">
            </div> -->
        </div>
        <div class="buttons">
            <button id="prev">
                < </button>
                    <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!-- ============================== -->
    <!-- =========== ABOUT US =========-->
    <!-- ============================== -->

    <div class="about-section">
        <div class="inner-container">
            <h1>About us</h1>
            <p class="text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, optio illum! Temporibus praesentium repellat mollitia eos deserunt, minima quisquam quae veniam non maiores ullam? A est iste ad modi quis.
            </p>
            <div class="skills">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span>
            </div>
        </div>
    </div>

    <!-- ============================== -->
    <!-- =========== SCRIPTS ==========-->
    <!-- ============================== -->

    <script src="assets/js/script.js" defer></script>

</body>

</html>