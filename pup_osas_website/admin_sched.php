<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUP OSAS Admin Page</title>
    <link rel="stylesheet" href="css/admin_nav_style.css">
    <link rel="stylesheet" href="css/admin_sched.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
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
          <li><a href="admin_index.php"><i class="fas fa-chart-area"></i>Overview</a></li>
          <li><a href="admin_clients.php"><i class="fas fa-address-book"></i>Clients</a></li>
          <li><a href="admin_acc.php"><i class="fas fa-user"></i>User</a></li>
          <li><a href="admin_notif.php"><i class="fas fa-bell"></i>Notification</a></li>
          <li><a class="active" href="admin_sched.php"><i class="fas fa-calendar-day"></i>Available Sched</a></li>
          <li><a href="admin_add_admin.php"><i class="fas fa-user-plus"></i>Add Admin</a></li>
        </ul>
      </nav>
    </div>
    <section class="content">
      <h2 class="title">Schedule</h2>
      <div class="top-box top-box-a">
         <!--<input type="date" id="appoint-date">-->
         <div class="app-sched">
           <h2>Appointment Schedule</h2>
           <div class="app-list">
              <div class="app-item">
                <p>No Appointment Today</p>
                <a href="#">View Details</a>
              </div>
           </div>
         </div>
      </div>
      <div class="top-box top-box-b">
        <div class="add-sched">
          <div class="add-app-sched">
            <input class="bttn" type="button" value="Add Schedule Appointment" onclick="location.href='#';">
          </div>
        </div>
      </div>
      <div class="top-box top-box-c">
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
  </section>

  <!--<script src="js/app_date_time.js"></script>-->
  </body>
</html>
