<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body
        {
            font-family: 'Montserrat', sans-serif;
        }
        .header_section{
            justify-content:space-between;
            padding: 15px 0;
            background-color:#0A2558;
        }
        .collapse.navbar-collapse
        {
            margin-left:250px;
        }
        .custom_nav-container .navbar-nav .nav-item .nav-link 
        {
            padding: 5px 20px;
            color: #131313;
            text-align: center;
            text-transform: uppercase;
            border-radius: 5px;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            font-weight: 700;
        }
        .custom_nav-container .navbar-nav .nav-item:hover .nav-link, .custom_nav-container .navbar-nav .nav-item.active .nav-link 
        {
            color: #7492e2;
        }
        .nav-item.active
        {
            color: #7492e2;
        }
        a
        {
            text-decoration:none;
        }
        .lien
        {
            border:1px solid #506690;
            padding:6px;
            border-radius:5px;
            color:#506690;
        }
        .lien:hover
        {
            background-color:#506690;
            color:white;
        }
        .img-account-profile 
        {
            height: 35rem;
            width:30rem;
        }
        .card 
        {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }
        .card .card-header 
        {
            font-weight: 500;
        }
        .card-header:first-child 
        {
            border-radius: 0.35rem 0.35rem 0 0;
        }
        .card-header 
        {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }
        .form-control, .dataTable-input 
        {
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
        .edit
        {
            margin-left:30%;
        }
    </style>
</head>
<body>
<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <p style="color: white;margin:5px">PriseDeRendez-vous</p>
                  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  </div> -->
                  <div>
                  <a href="Iadmin/index.html" type="submit" class="lien">AdminConnexion</a>
                  </div>
               </nav>
        </div>
</header>
<section>
<section>
        <marquee height="55px" direction="left" class="mt-5 ">
            <h3>Nous vous souhaitons la bienvenue sur notre site de prise de rendez-vous.</h3>
        </marquee>
    </section>
<div class="container-xl px-4 mt-4" >
    <div class="row">
        <div class="col-xl-7">
            <div class="card mb-4">
                <div class="card-header">Veuillez remplir ces champs</div>
                <div class="card-body">
                <form method="post">
                <div class="mb-3">
                    <label>Nom</label>
                    <input name="nom" class="form-control" type="text" placeholder="Nom">
                    </div>
                    <div class="mb-3">
                        <label>Prenom</label>
                        <input name="prenom" class="form-control" type="text" placeholder="Prenom">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input name="email" class="form-control" type="text" placeholder="name@exemple.com">
                    </div>
                    <div class="mb-3">
                        <label>Adresse</label>
                        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                    </div>
                    <div class="mb-3">
                        <label>Numero de téléphone</label>
                        <input type="text" class="form-control" name="phonenumber" placeholder="+221-77-000-00-00">
                    </div>
                    <div class="mb-3">
                        <label>Services</label>
                        <select class="form-select" aria-label="Disabled select example" >
                        <option value="0">-- Aucun --</option>
                        <option value="1">Généraliste</option>
                        <option value="2">Ophtalmologie</option>
                        <option value="3">Dentiste</option>
                        <option value="4">Radiologie</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Date du rendez vous</label>
                        <input type="date" class="form-control" name="dateRdv">
                    </div>
                    <div class="mb-3">
                        <label>Heure du rendez vous</label>
                        <input type="time" class="form-control" name="dateRdv">
                    </div>
                    <hr class="hrBas mt-3 mb-4">
                    <div class="col-md-7 edit">
                        <button class="btn btn-outline-secondary" type="submit" name="edit">Valider</button>
                        <button class="btn btn-danger" type="reset" name="annuler">Annuler</button>
                    </div>   
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class=" mb-4 mb-xl-0" style="border-radius:5px;border:1px">
                <div style="width:30rem;height:55px;padding-top:15px;padding-left:15px;background-color:rgba(33, 40, 50, 0.03);">Notre Localisation</div>
                <hr class="mt-0 mb-0" style="width:30rem;"/>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.86956127835!2d-17.41156968584571!3d14.776376276707868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10cf54611405f%3A0xbacab62dafe3b7a4!2sCENTRE%20DE%20SANTE%20GOLF%20SUD!5e0!3m2!1sfr!2ssn!4v1644961991778!5m2!1sfr!2ssn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="img-account-profile  mb-2"></iframe>            
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>