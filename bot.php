<?php
$page = $_GET["name"];
$name = str_replace("_"," ",$page);
include './pages/'.$page.'.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hi.Guru Bots</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Hi.guru bot -->
    <?php echo $bot;?>
</head>

<body id="page-top">

<!-- Navbar with Back Button -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top arenaSideNav shadow" id="sideNav">
    <a class="js-scroll-trigger" href="index.php">
        <i class="fas fa-arrow-circle-left backBtn smallNavBack"></i>
        <span class="d-none d-lg-block">
        <i class="fas fa-arrow-circle-left backBtn"></i>
      </span>
    </a>
</nav>

<div class="container-fluid p-0">

    <section class="company-section centerPhone p-lg-5 d-flex">
        <div class="row">

            <div class="my-auto mx-auto col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="holder">
                    <!-- COMPANY LOGO: -->
                    <!-- Important! Place logo image inside the 'img' folder -->
                    <img src="img/<?php echo strtolower($page)?>.png" alt="<?php echo $name?>">
                </div>
                <div class="holder company-item flex-column flex-md-row ">
                    <div class="mr-auto">
                        <!-- COMPANY NAME: -->
                        <h2 class="mb-0 mt-4 mb-4"><?php echo $name;?></h2>
                    </div>
                </div>
            </div>

            <div class="my-auto mx-auto col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h3 class="questions">Example Questions:</h3>
                <div class="company-item flex-column flex-md-row ">
                    <div class="mr-auto">
                        <ul>
                            <h4 class="mb-0">
                                <!-- EXAMPLE QUESTIONS FOR USERS: -->
                                <?php for ($i = 0; $i < count($questions); $i++){
                                    echo "<li>$questions[$i]</li>";
                                }?>
                            </h4>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="my-auto mx-auto col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="company-item flex-column flex-md-row ">
                    <div class="botHolder">
                        <img src="img/bot_new.gif" alt="bot">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/code.js"></script>

</body>

</html>