<?php
  $dir = './';
  $files = scandir($dir);
  $pages = array();
  for($i = 0; $i < count($files); $i++){
    if (strpos($files[$i], '.php') !== false && strcmp($files[$i],"index.php")){
      array_push($pages, $files[$i]);
    }
  }
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

</head>
<style>
</style>

<body id="page-top" class="scroll">

  <!-- Navbar with Back Button -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top normalSideNav shadow" id="sideNav">
    <a class="js-scroll-trigger" href="index.php">
      <i class="fas fa-home backBtn smallNavBack homebtn"></i>

      <span class="d-none d-lg-block">
        <i class="fas fa-home backBtn"></i>
      </span>

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- COMPANIES & THEIR LINKS -->
    <div class="collapse navbar-collapse navCollapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php
          for($i = 0; $i < count($pages); $i++){
            $name = str_replace("_"," ",chop($pages[$i],".php"));
            echo("<li class=\"nav-item\">
            <a class=\"nav-link\" href=\"$pages[$i]\">".$name."</a>
            </li>");
          }
         ?>
      </ul>
    </div>
  </nav>


  <div class="container">
    <div class="row logoItemMargin">

        <?php
            for($i = 0; $i < count($pages); $i++){
                $name = str_replace("_"," ",chop($pages[$i],".php"));
                $picture = chop($pages[$i], ".php").".png";
                echo("<div class=\"col-lg-4 col-md-4 col-sm-12\">
                    <a href=\"$pages[$i]\">
                      <div class=\"logoItem shadow mt-3\">
                        <div class=\"holder\">
                          <img src=\"img/$picture\" alt=\"$name\">
                          <div class=\"company-item\">
                            <h5 class=\"mt-3\">$name</h5>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>");
            }
        ?>

    </div>
  </div>

  <hr class="m-0">

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/code.js"></script>
  <script src="js/codeJquery.js"></script>

</body>

</html>