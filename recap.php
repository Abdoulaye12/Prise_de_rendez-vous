<?php

$bdd = new PDO('mysql:host=localhost;dbname=rendez-vous;charset=utf8', 'root', '');
$nom = "";
$prenom = "";
$e_mail = "";
$adresse = "";
$telephone = "";
$services = "";
$date_rv = "";
$heure_rv = "";
if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $e_mail = htmlspecialchars($_POST['e_mail']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $telephone  = htmlspecialchars($_POST['telephone']);
        $services = htmlspecialchars($_POST['services']);
        $date_rv = htmlspecialchars($_POST['date_rv']);
        $heure_rv = htmlspecialchars($_POST['heure_rv']);
        if ($date_rv < date("Y-m-d")) {
            echo "La date est dans le passé";
        } elseif (intval(date_format(date_create($heure_rv), "H")) > 20 || intval(date_format(date_create($heure_rv), "H" < 8))) {
            echo "Time is not available";
        } else {
            $ins = $bdd->prepare('INSERT INTO rendez_vous (nom, prenom, e_mail, adresse, telephone, services, date_rv, heure_rv) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
            $ins->execute(array($nom, $prenom, $e_mail, $adresse, $telephone, $services, $date_rv, $heure_rv));

        }
    } else {
        echo 'Veuillez remplir tous les champs !';
    }
}

$rec = $bdd->query('SELECT * FROM rendez_vous');
$recap = $rec->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Recapitulatif</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
      font-family: 'Montserrat', sans-serif;
    }

    .header_section {
      justify-content: space-between;
      padding: 15px 0;
      background-color: #0A2558;
    }

    .collapse.navbar-collapse {
      margin-left: 250px;
    }

    .custom_nav-container .navbar-nav .nav-item .nav-link {
      padding: 5px 20px;
      color: #131313;
      text-align: center;
      text-transform: uppercase;
      border-radius: 5px;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
      font-weight: 700;
    }

    .custom_nav-container .navbar-nav .nav-item:hover .nav-link,
    .custom_nav-container .navbar-nav .nav-item.active .nav-link {
      color: #7492e2;
    }

    .nav-item.active {
      color: #7492e2;
    }

    a {
      text-decoration: none;
    }

    .lien {
      border: 1px solid #506690;
      padding: 6px;
      border-radius: 5px;
      color: #506690;
    }

    .lien:hover {
      background-color: #506690;
      color: white;
    }

    .img-account-profile {
      height: 35rem;
      width: 30rem;
    }

    .card {
      box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
      font-weight: 500;
    }

    .card-header:first-child {
      border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
      padding: 1rem 1.35rem;
      margin-bottom: 0;
      background-color: rgba(33, 40, 50, 0.03);
      border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
      display: block;
      width: 100%;
      padding: 0.875rem 1.125rem;
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1;
      color: #69707a;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #c5ccd6;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 0.35rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .edit {
      margin-left: 30%;
    }

    span {
      color: red;
    }

    h3 {
      text-align: center;
      margin: 15px;
      font-weight: bold;
    }

    .sect {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 40%;
    }

    .sect2 {
      display: block;
      width: 90%;
      margin: 40px auto;
    }

    #col-66 {
      font-weight: bold;
    }

    #col-6 {
      text-align: right;
    }

    .col-4,
    .col-8 {
      padding: 3px 0px;
    }

    .section {
      margin: 30px 10px;
    }

    p {
      margin: 0px;
    }

    .d-flex {
      justify-content: center;
    }
  </style>
</head>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
  </symbol>
</svg>

<body>
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <p style="color: white;margin:5px">Prise de Rendez-vous</p>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  </div> -->
        <!-- <div>
                    <a href="Iadmin/index.php" type="submit" class="lien">AdminConnexion</a>
                </div> -->
      </nav>
    </div>
  </header>
  <section>
    <section>
      <h3>Récapitulatif</h3>
      <div id="c" class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
          <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
          Votre rendez-vous a été bien pris en compte
        </div>
      </div>
      <section class="section">
        <div class="sect">
          <div class="row">
            <div id="col-66" class="col-4">Prenom</div>
            <div id="col-6" class="col-8"><?php echo $_POST['prenom']; ?></div>
          </div>
          <div class="row">
            <div id="col-66" class="col-4">Nom</div>
            <div id="col-6" class="col-8"><?php echo $_POST['nom']; ?></div>
          </div>
          <div class="row">
            <div id="col-66" class="col-4">E-mail</div>
            <div id="col-6" class="col-8"><?php echo $_POST['e_mail']; ?></div>
          </div>
          <div class="row">
            <div id="col-66" class="col-4">Adresse</div>
            <div id="col-6" class="col-8"><?php echo $_POST['adresse']; ?></div>
          </div>
          <div class="row">
            <div id="col-66" class="col-4">Téléphone</div>
            <div id="col-6" class="col-8"><?php echo $_POST['telephone']; ?></div>
          </div>
          <div class="row">
            <div id="col-66" class="col-4">Service</div>
            <div id="col-6" class="col-8"><?php echo $_POST['services']; ?></div>
          </div>
          <div class="row">
            <div id="col-66" class="col-4">Date rendez-vous</div>
            <div id="col-6" class="col-8"><?php echo $_POST['date_rv']; ?></div>
          </div>
          <div class="row">
            <div id="col-66" class="col-4">Heure rendez-vous</div>
            <div id="col-6" class="col-8"><?php echo $_POST['heure_rv']; ?></div>
          </div>
        </div>
      </section>
      <h6 style="text-align: center;">Envoyé par mail</h6>
      <section>
        <div class="sect2">
          <p><?php echo $_POST['prenom'] . " " . $_POST['nom']; ?></p>
          <p><?php echo $_POST['adresse'] ?></p>
          <p><?php echo $_POST['telephone'] ?></p>
          <p><?php echo $_POST['e_mail'] ?></p>
          <br>
          <?php
          echo date("F j, Y") . " à Dakar" . "<br>";
          ?>
          <br>
          <h5 style="font-weight: bold;">Objet : Confirmation de rendez-vous du <?php echo $_POST['date_rv'] ?> à <?php echo $_POST['heure_rv'] ?></h5>
          <br>
          Madame, Monsieur,
          <br>
          <br>
          <p>je fais suite à notre conversation digitalisé au cour duquel nous avons convenu d'un
            rendez-vous pour consultation <b><em>"<?php echo $_POST['services'] ?>"</em></b>
            <br><br>
            Par la présente, je confirme la date du rendez-vous prevu au Centre Hospitalier Universitaire De Fann a <?php echo $_POST['heure_rv'] ?>.<!-- [S/
            c'est un rendez-vous pour une fierce personne, par exemple votre enfant, preciser le nom et prenom]-->
            <br><br>
            Pour rappel, notre rencontre aura pour objet [precisez la nature du rendezvous]. N'hesitez pas a me
            communiquer les documents dont je dois me munir. <br><br>
            Dans l'attente de vous voir, je vous prie de recevoir, Madame, Monsieur, mes salutations respectueuses. <br><br>
            [Signature]
          </p>
        </div>
      </section>
    </section>
  </section>
</body>

</html>