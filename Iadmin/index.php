<?php session_start();

if (isset($_SESSION['valid'])) {
  include("connexion.php");
  $result = mysqli_query($mysqli, "SELECT * FROM user");
  $bdd = new PDO('mysql:host=localhost;dbname=rendez-vous;charset=utf8', 'root', '');

  /* pour total */

  $requete = $bdd->query('SELECT COUNT(id_rv) as countid FROM rendez_vous');
  $nbligne = $requete->fetch();

  /* pour aujourd'hui */

  $requete0 = $bdd->query('SELECT COUNT(id_rv) as countid FROM rendez_vous WHERE DAY(date_rv) = DAY(NOW()) AND MONTH(date_rv) = MONTH(NOW()) AND YEAR(date_rv) = YEAR(NOW()) ');
  $nbligne0 = $requete0->fetch();
  $a0 = $nbligne0['countid'];

  /* pour 3 jours  */

  $requete1 = $bdd->query('SELECT COUNT(date_rv) as countid FROM rendez_vous WHERE date_rv = DATE_ADD(CAST(NOW() AS DATE), INTERVAL 1 DAY)');
  $nbligne1 = $requete1->fetch();
  $a1 = $nbligne1['countid'];

  $requete2 = $bdd->query('SELECT COUNT(date_rv) as countid FROM rendez_vous WHERE date_rv = DATE_ADD(CAST(NOW() AS DATE), INTERVAL 2 DAY)');
  $nbligne2 = $requete2->fetch();
  $a2 = $nbligne2['countid'];

  $requete3 = $bdd->query('SELECT COUNT(date_rv) as countid FROM rendez_vous WHERE date_rv = DATE_ADD(CAST(NOW() AS DATE), INTERVAL 3 DAY)');
  $nbligne3 = $requete3->fetch();
  $a3 = $nbligne3['countid'];

  $b = $a1 + $a2 + $a3;  /* pour 1 semaine */

  $requete4 = $bdd->query('SELECT COUNT(date_rv) as countid FROM rendez_vous WHERE date_rv = DATE_ADD(CAST(NOW() AS DATE), INTERVAL 4 DAY)');
  $nbligne4 = $requete4->fetch();
  $a4 = $nbligne4['countid'];

  $requete5 = $bdd->query('SELECT COUNT(date_rv) as countid FROM rendez_vous WHERE date_rv = DATE_ADD(CAST(NOW() AS DATE), INTERVAL 5 DAY)');
  $nbligne5 = $requete5->fetch();
  $a5 = $nbligne5['countid'];

  $requete6 = $bdd->query('SELECT COUNT(date_rv) as countid FROM rendez_vous WHERE date_rv = DATE_ADD(CAST(NOW() AS DATE), INTERVAL 6 DAY)');
  $nbligne6 = $requete6->fetch();
  $a6 = $nbligne6['countid'];

  $requete7 = $bdd->query('SELECT COUNT(date_rv) as countid FROM rendez_vous WHERE date_rv = DATE_ADD(CAST(NOW() AS DATE), INTERVAL 7 DAY)');
  $nbligne7 = $requete7->fetch();
  $a7 = $nbligne7['countid'];

  $c = $b + $a4 + $a5 + $a6 + $a7;

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

    <div class="sidebar">
      <div class="logo-details">
        <span style="margin-left: 25px;" class="logo_name">Rendez-vous</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="active">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="listeRV.php">
            <i class='bx bx-box'></i>
            <span class="links_name">Liste Rendez-vous</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog'></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Déconnexion</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class='bx bx-menu sidebarBtn'></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="profile-details">
          <!-- c'est pas encore dynamique -->
          <span style="border: 1px solid black;padding:8px;border-radius:50px">
            <?php $rest = strtoupper(substr($_SESSION['prenom'], 0));
            $rest1 = strtoupper(substr($_SESSION['nom'], 0));
            echo $rest[0] . $rest1[0]; ?>
          </span>
          <span class="admin_name"><?php echo $_SESSION['prenom']; ?></span>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total rendez-vous</div>
              <div class="number"><?php echo $nbligne['countid']; ?></div>
              <div class="indicator">

              </div>
            </div>
            <i class='bx bx-alt '></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Aujourd'hui</div>
              <div class="number"><?php echo $a0; ?></div>
              <div class="indicator">
                <span class="text">Rendez-vous</span>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">3 prochain jours</div>
              <div class="number"><?php echo $b; ?></div>
              <div class="indicator">
                <span class="text">Rendez-vous</span>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">7 prochain jours</div>
              <div class="number"><?php echo $c; ?></div>
              <div class="indicator">
                <span class="text">Rendez-vous</span>
              </div>
            </div>
          </div>
        </div>
        <div class="sales-boxes">
          <div class="recent-sales box">
          <canvas id="myChart" width="600" height="350"></canvas>
          <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: ['janvier', 'février', 'Mars', 'Avril', 'Mais', 'Juin'],
                  datasets: [{
                    data: [55, 70, 65, 50, 25, 45],

                  }]
                },
                options: {

                }
              });
            </script>
          </div>
          <div class="top-sales box">
            <canvas id="myChart1" width="150" height="200"></canvas>
            <script>
              var barColors = [
                "#3e5580",
                "rgba(0,0,255,0.8)",
                "#0A2558",
                "rgba(0,0,255,0.4)",
              ];
              const ctx1 = document.getElementById('myChart1').getContext('2d');
              const myChart1 = new Chart(ctx1, {
                type: 'pie',
                data: {
                  labels: ['janvier', 'février', 'Mars', 'Avril'],
                  datasets: [{
                    backgroundColor: barColors,
                    data: [55, 70, 65, 50],
                  }]
                },
                options: {

                }
              });
            </script>
          </div>
        </div>
      </div>
    </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>
  </body>

  </html>

<?php
} else {
  session_destroy();
  require('login.php');
} ?>