<?php session_start();

if (isset($_SESSION['valid'])) {
  include("connexion.php");
  $result = mysqli_query($mysqli, "SELECT * FROM user");
  $bdd = new PDO('mysql:host=localhost;dbname=rendez-vous;charset=utf8', 'root', '');
  $requete = $bdd->query('SELECT COUNT(id_rv) as countid FROM rendez_vous');
  $nbligne = $requete->fetch();
  // echo 'Il y a ' . $nbligne['countid'] . ' entrée dans la table.';

  // $requete2 = $bdd->query('SELECT COUNT(id_rv) as countid FROM rendez_vous WHERE DAY(date_rv) = DAY(NOW()) AND MONTH(date_rv) = MONTH(NOW()) AND YEAR(date_rv) = YEAR(NOW()) ');
  // $nbligne2 = $requete2->fetch();

  $requete2 = $bdd->query('SELECT COUNT(id_rv) as countid FROM rendez_vous WHERE DATE_ADD(date_rv, INTERVAL 1 DAY) < NOW()');
  $nbligne2 = $requete2->fetch();
  var_dump($nbligne2);

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
          <span class="admin_name">Amadou</span>
        </div>
      </nav>

      <div class="home-content">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total rendez-vous</div>
              <div class="number"><?php echo $nbligne['countid']; ?></div>
              <div class="indicator">
<<<<<<< HEAD
                <!-- <i class='bx bx-up-arrow-alt'></i> -->
                <span class="text">Rendez_vous</span>
=======
>>>>>>> 186f1cd4ff26be3764370a6f00cb9d37b198e342
              </div>
            </div>
            <!-- <i class='bx bx-alt '></i> -->
          </div>
          <div class="box">
            <div class="right-side">
<<<<<<< HEAD
              <div class="box-topic">Aujourd'hui</div>
              <div class="number"><?php echo $nbligne2['countid']; ?></div>
              <div class="indicator">
                <!-- <i class='bx bx-up-arrow-alt'></i> -->
                <span class="text">Rendez-vous</span>
              </div>
            </div>
            <!-- <i class='bx bxs-cart-add cart two'></i> -->
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Dans 3 jours</div>
              <div class="number">$12,876</div>
              <div class="indicator">
                <!-- <i class='bx bx-up-arrow-alt'></i> -->
                <span class="text">Rendez-vous</span>
              </div>
            </div>
            <!-- <i class='bx bx-cart cart three'></i> -->
=======
              <div class="box-topic">Total hebdomadaire</div>
              <div class="number"></div>
              <div class="indicator">
              </div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Mensuel</div>
              <div class="number"></div>
              <div class="indicator">
              </div>
            </div>
>>>>>>> 186f1cd4ff26be3764370a6f00cb9d37b198e342
          </div>
          <!-- <div class="box">
            <div class="right-side">
<<<<<<< HEAD
              <div class="box-topic">Dans 1 semaine</div>
=======
              <div class="box-topic">Total </div>
>>>>>>> 186f1cd4ff26be3764370a6f00cb9d37b198e342
              <div class="number">11,086</div>
              <div class="indicator">
                <!-- <i class='bx bx-down-arrow-alt down'></i> -->
                <span class="text">Rendez-vous</span>
              </div>
            </div>
<<<<<<< HEAD
            <!-- <i class='bx bxs-cart-download cart four'></i> -->
          </div>
=======
            <i class='bx bxs-cart-download cart four'></i>
          </div> -->
>>>>>>> 186f1cd4ff26be3764370a6f00cb9d37b198e342
        </div>
        <div class="sales-boxes">
          <div class="recent-sales box">
          <canvas id="myChart" width="400" height="250"></canvas>
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