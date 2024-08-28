<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <?php require('includes/navbar.php') ?>
        <!-- home -->
        <div class="home" id="home">
            <img class="bg-home" src="assets/images/brunobg.png" alt="">
            <div class="content-right">
                <h1 class="subtitle">COMMING SOON</h1>
                <H2 class="title">Bruno On Stage</H2>
                <p class="location">Jakarta Intenational Stadium</p>
                <div class="informasi">
                    <p>Tour for the Latest Album - '24K Magic'.</p>
                    <p>Sunday, September 15, 2024</p>
                </div>
            </div>
        </div>

        <!-- about -->


        <!-- ticket -->
        <?php include("includes/ticket.php"); ?>
        <?php include("includes/modalhowtoorder.php"); ?>

        <!-- layout -->


        <!-- galery -->


        <!-- footer -->
    </div>
    <script src="assets/js/main.js"></script>
</body>

</html>