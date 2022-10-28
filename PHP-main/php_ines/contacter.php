<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" />
  <title>Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <!-- Z-Index permet de donner un ordre de priorité d'affichage -->
  <nav class="navbar navbar-expand-lg bg-dark" style="z-index: 5;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active fs-4" aria-current="page" href="index.html" style="color: white;">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4" href="cv.html" style="color:white;">Cv</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4" href="#" style="color:white;">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-4" aria-current="page" href="contacter.php" style="color: white;">Me contacter</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="media">
      <!--Script pour logo Insta-->
      <a class="insta fs-1" href="https://www.instagram.com/ines.msr__/?next=%2F&hl=fr" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
      <!--Script pour logo LinkedIn-->
      <a class="linkedin fs-1" href="https://www.linkedin.com/in/ines-mansouri-40b765253/" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
      <!--Script pour le logo Twitter-->
      <a class="twitter fs-1" href="https://twitter.com/R0nare" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
    </div>
  </nav>

  <!--Background animé violet-->
  <div class="area">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <div class="w-75" id="box">
        <h3 class="display-3">Me contacter</h3>
        <form method="post">
          <input type="text" name="nom" placeholder = "Nom">
          <br><br>
          <input type="email" name="email" placeholder = "Email">
          <br><br>
          <input type="tel" name='telephone' placeholder = "Téléphone">
          <br><br>
          <input type="text" name='sujet' placeholder = "Demande de renseignement">
          <br><br>
          <input type="text" name='message' placeholder = "Message...">
          <br><br>
          <input type="submit" id="send" value="Envoyer">
        </form>
        <div class="col-auto my-1"> <!-- AlertLogin is a function called in the Admin's page -->
          <button type="button" onclick="AlertLogin()" class="btn"> >Admin's Page </button>
        </div>

      </div>

  </div>



  <?php
    $pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->exec("INSERT INTO contact (Nom, Email, Telephone, Sujet, Message) VALUES ('$_POST[nom]', '$_POST[email]', '$_POST[telephone]', '$_POST[sujet]', '$_POST[message]')");

  ?>

  <!--script pour les icons de réseau sociaux-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--Script pour la nav bar-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script>
      function AlertLogin() {
        let pseudo = prompt("Entrez l'identifiant admin :");
        if (pseudo == "root") {
          let password = prompt("Entrez le mot de passe admin :");
          if(password == "root"){
            window.open("admin.php", "_blank");
          }
           else {
           alert("Mot de passe Incorrect")
           }
        }
         else {
           alert("Identifiant Incorrect")
         }
      }

  </script>

</body>
</html>