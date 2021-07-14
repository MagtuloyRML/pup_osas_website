<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUPBC OSAS Admin Page</title>
    <link rel="stylesheet" href="css/admin_nav_style.css">
    <link rel="stylesheet" href="css/admin_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  </head>
  <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Menu</div>
        <ul class="list-items">
          <li><a class="active" href="admin_index.php"><i class="fas fa-chart-area"></i>Overview</a></li>
          <li><a href="admin_clients.php"><i class="fas fa-address-book"></i>Clients</a></li>
          <li><a href="admin_acc.php"><i class="fas fa-user"></i>User</a></li>
          <li><a href="admin_notif.php"><i class="fas fa-bell"></i>Notification</a></li>
          <li><a href="admin_sched.php"><i class="fas fa-calendar-day"></i>Available Sched</a></li>
        </ul>
      </nav>
    </div>
    <section class="content">
      <div class="content1">
      <h2>Overview</h2>
      <div class="main__cards">
        <div class="card">
          <i class="fa fa-user fa-2x" aria-hidden="true"></i>
          <div class="card_inner">
            <p class="text-primary-p">Monitor Client</p>
            <span class="font-bold text-title">2</span>
          </div>
        </div>

        <div class="card">
          <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
          <div class="card_inner">
            <p class="text-primary-p">Upcoming Meeting</p>
            <span class="font-bold text-title">3</span>
          </div>
        </div>

        <div class="card">
          <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
          <div class="card_inner">
            <p class="text-primary-p">Upcoming Appointment</p>
            <span class="font-bold text-title">3</span>
          </div>
        </div>
        </div>

        <div class="chart">

          <canvas id="myChart"></canvas>

          <div class="app-transac">
          <h2>Previous Appoinment</h2>
          <table class="app-td-list">
             <tr class="app-title">
               <th>Student Name</th>
               <th>Student Number</th>
               <th>Appointment Date and Time</th>
               <th>Status</th>
             </tr>
             <tr class="app-td-item">
              <td>Student Name</th>
              <td>Student Number</td>
              <td>Date and Time</th>
              <td>Status</th>
            </tr>
          </table>
          </div>
        </div>
      </div>
      
    </section>

  <script src="js/chart.js"></script>
  </body>
</html>
