<?php session_start();

if (isset($_SESSION['valid'])) {

  $bdd = new PDO('mysql:host=localhost;dbname=rendez-vous;charset=utf8', 'root', '');
  $rv = $bdd->query('SELECT * FROM rendez_vous/* ORDER BY id_rv DESC*/');

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <style>
      table {
        font-size: 15px;
        border-collapse: collapse;
        width: 100%;
        text-align: left;
      }
    </style>
  </head>

  <body>

    <div class="sidebar">
      <div class="logo-details">
        <span style="margin-left: 25px;" class="logo_name">Rendez-vous</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="listeRV.php" class="active">
            <i class='bx bx-box'></i>
            <span class="links_name">Liste Rendez-vous</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li> -->
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
          <span class="dashboard">Liste Rendez-vous</span>
        </div>
        <div class="profile-details">
          <!-- prendre l'initial du nom -->
          <span style="border: 1px solid black;padding:8px;border-radius:50px;margin-left: 15px">
            <?php $rest = strtoupper(substr($_SESSION['prenom'], 0));
            $rest1 = strtoupper(substr($_SESSION['nom'], 0));
            echo $rest[0] . $rest1[0]; ?>
          </span>
          <span class="admin_name"><?php echo $_SESSION['prenom']; ?></span>
        </div>
      </nav>
      <div class="home-content rv">
        <div class="sales-boxes rvs">
          <div class="recent-sales rvsx box">
            <table>
              <thead>
                <tr>
                  <th>Numéro</th>
                  <th>Prénom</th>
                  <th>Nom</th>
                  <th>Téléphone</th>
                  <th>Services</th>
                  <th>Date RV</th>
                  <th>Heure RV</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($a = $rv->fetch()) { ?>
                  <tr>
                    <td><?= $a['id_rv'] ?></td>
                    <td><?= $a['prenom'] ?></td>
                    <td><?= $a['nom'] ?></td>
                    <td><?= $a['telephone'] ?></td>
                    <td><?= $a['services'] ?></td>
                    <td><?= $a['date_rv'] ?></td>
                    <td><?= $a['heure_rv'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <hr>
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
  require("index.php");
} ?>