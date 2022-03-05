<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Prise de Rendez-vous</title>
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
    <header id="notify2" class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a href="index.php">
                    <p style="color: white;margin:5px">Prise de Rendez-vous</p>
                </a>
            </nav>
        </div>
    </header>

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
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $e_mail = htmlspecialchars($_POST['e_mail']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $telephone  = htmlspecialchars($_POST['telephone']);
            $services = htmlspecialchars($_POST['services']);
            $date_rv = htmlspecialchars($_POST['date_rv']);
            $heure_rv = htmlspecialchars($_POST['heure_rv']);
            if ($date_rv < date("Y-m-d")) {
                echo '<div id="c" class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
                </svg>
                <div>
                  La date est dans le passée
                </div>
              </div>';
            } elseif (intval(date_format(date_create($heure_rv), "H")) > 20) {
                echo '<div id="c" class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
                </svg>
                <div>
                  l\'heure n\'est pas disponible Choississez entre 08h et 20h
                </div>
              </div>';
            } elseif (intval(date_format(date_create($heure_rv), "H")) < 8) {
                echo '<div id="c" class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill"/>
                </svg>
                <div>
                l\'heure n\'est pas disponible Choississez entre 08h et 20h
                </div>
              </div>';
            } else {
                $ins = $bdd->prepare('INSERT INTO rendez_vous (nom, prenom, e_mail, adresse, telephone, services, date_rv, heure_rv) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
                $ins->execute(array($nom, $prenom, $e_mail, $adresse, $telephone, $services, $date_rv, $heure_rv));
                require('recap.php');
        ?>
                <style>
                    #notify,
                    #notify2,
                    #notify3 {
                        display: none;
                    }
                </style>
        <?php
            }
        }
        ?>
        <section>
        <section id="notify3">
            <marquee height="55px" direction="left" class="mt-5 ">
                <h3>Nous vous souhaitons la bienvenue sur notre site de prise de rendez-vous.</h3>
            </marquee>
        </section>
        <div id="notify" class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-7">
                    <div class="card mb-4">
                        <div class="card-header">Veuillez remplir ces champs</div>
                        <div class="card-body">
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label>Nom <span>*</span></label>
                                    <input required name="nom" class="form-control" value="<?php echo $nom; ?>" type="text" placeholder="Nom">
                                </div>
                                <div class="mb-3">
                                    <label>Prenom <span>*</span></label>
                                    <input required name="prenom" class="form-control" value="<?php echo $prenom; ?>" type="text" placeholder="Prenom">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input name="e_mail" class="form-control" type="email" value="<?php echo $e_mail; ?>" placeholder="name@exemple.com">
                                </div>
                                <div class="mb-3">
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" name="adresse" value="<?php echo $adresse; ?>" placeholder="Adresse">
                                </div>
                                <div class="mb-3">
                                    <label>Numero de téléphone <span>*</span></label>
                                    <input required type="text" class="form-control" value="<?php echo $telephone; ?>" name="telephone" placeholder="+221-77-000-00-00">
                                </div>
                                <div class="mb-3">
                                    <label>Services <span>*</span></label>
                                    <select required name="services" class="form-select" aria-label="Disabled select example">
                                        <option value="">-- Aucun --</option>
                                        <option value="Généraliste" <?php echo $services == "Généraliste" ? "selected" : ''; ?>>Généraliste</option>
                                        <option value="Ophtalmologie" <?php echo $services == "Ophtalmologie" ? "selected" : ''; ?>>Ophtalmologie</option>
                                        <option value="Dentiste" <?php echo $services == "Dentiste" ? "selected" : ''; ?>>Dentiste</option>
                                        <option value="Radiologie" <?php echo $services == "Radiologie" ? "selected" : ''; ?>>Radiologie</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Date du rendez vous <span>*</span></label>
                                    <input required type="date" class="form-control" value="<?php echo $date_rv; ?>" name="date_rv">
                                </div>
                                <div class="mb-3">
                                    <label>Heure du rendez vous <span>*</span></label>
                                    <input required type="time" class="form-control" value="<?php echo $heure_rv; ?>" name="heure_rv">
                                </div>
                                <hr class="hrBas mt-3 mb-4">
                                <div class="col-md-7 edit">
                                    <button class="btn btn-outline-secondary" type="submit" name="submit">Valider</button>
                                    <button class="btn btn-danger" type="" name="annuler">Annuler</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class=" mb-4 mb-xl-0" style="border-radius:5px;border:1px">
                        <div style="width:30rem;height:55px;padding-top:15px;padding-left:15px;background-color:rgba(33, 40, 50, 0.03);">Notre Localisation</div>
                        <hr class="mt-0 mb-0" style="width:30rem;" />
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.86956127835!2d-17.41156968584571!3d14.776376276707868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10cf54611405f%3A0xbacab62dafe3b7a4!2sCENTRE%20DE%20SANTE%20GOLF%20SUD!5e0!3m2!1sfr!2ssn!4v1644961991778!5m2!1sfr!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="img-account-profile  mb-2"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>