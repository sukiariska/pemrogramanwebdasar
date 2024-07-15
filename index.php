        <?php 
        session_start();
        if (isset($_GET['x']) && $_GET['x']=='home'){
          $page ="home.php";
          include "main.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='costumer'){
          $page ="costumer.php";
          include "main.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='karyawan'){
          $page ="karyawan.php";
          include "main.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='mobil'){
          $page ="mobil.php";
          include "main.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='sewa'){
          $page ="sewa.php";
          include "main.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='pembayaran'){
          $page ="pembayaran.php";
          include "main.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='user'){
          if($_SESSION['level_rental_mobil']==1) {
            $page ="user.php";
            include "main.php";
          } else {
            $page ="home.php";
          include "main.php";
          }
            
        }elseif (isset($_GET['x']) && $_GET['x']=='report'){
          if($_SESSION['level_rental_mobil']==1) {
            $page ="report.php";
            include "main.php";
          } else {
            $page ="home.php";
          include "main.php";
          }
        
        }elseif (isset($_GET['x']) && $_GET['x']=='login'){
            include "login.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='logout'){
          include "proses/proses_logout.php";
        }else{
          $page ="home.php";
          include "main.php";
        }
        ?>