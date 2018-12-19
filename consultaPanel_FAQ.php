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
  <script src="https://s3-eu-west-1.amazonaws.com/higuru-webchat-stage/v1/higuru-webchat-stage.min.js"></script>
  <script>
    (function() {
    document.addEventListener("DOMContentLoaded", function(){
    var body = document.body;
    var higuruChatBlock = document.createElement('div');
    higuruChatBlock.setAttribute('id', 'higuru-webchat');
    body.appendChild(higuruChatBlock);
    Higuru.WebChat.init({ selector: "#higuru-webchat", token: 'cfb41e2b-a00f-4228-b4c9-e31d60c60225'});
    });
    })();
  </script>
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
            <img src="img/consultap.png" alt="consulta panel">
          </div>
          <div class="company-item d-flex flex-column flex-md-row ">
            <div class="mr-auto">
              <!-- COMPANY NAME: -->
              <h2 class="mb-0 mt-4">Consulta Panel</h2>
            </div>
          </div>
        </div>

        <div class="my-auto mx-auto col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <h3 class="questions">Example Questions:</h3>
          <div class="company-item d-flex flex-column flex-md-row ">
            <div class="mr-auto">
              <ul>
                <h4 class="mb-0">
                  <!-- EXAMPLE QUESTIONS FOR USERS: -->
                  <li>How do I look today?</li>
                  <li>Why am I sad?</li>
                  <li>Can I get some ice-cream?</li>
                  <li>What is my favourite colour?</li>
                </h4>
              </ul>
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
