<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUP OSAS Admin Page</title>
    <link rel="stylesheet" href="css/admin_nav_style.css">
    <link rel="stylesheet" href="css/admin_add_adm.css">
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
          <li><a href="admin_sched.php"><i class="fas fa-calendar-day"></i>Available Sched</a></li>
          <li><a class="active" href="admin_add_admin.php"><i class="fas fa-user-plus"></i>Add Admin</a></li>
        </ul>
      </nav>
    </div>
    <section class="content">
      <h2>Add Admin</h2>
      <form class="add-adm">
      <div class="top-box top-box-a">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" id="stud_ID" name="#" placeholder="Username" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" id="stud_ID" name="#" placeholder="Password" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" id="stud_ID" name="#" placeholder="Confirm Password" required>
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" id="stud_ID" name="#" placeholder="Email" required>
        </div>
      </div>
      <div class="top-box top-box-b">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" id="stud_ID" name="#" placeholder="First Name" required>
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" id="stud_ID" name="#" placeholder="Last Name" required>
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" id="stud_ID" name="#" placeholder="Middle Name" required>
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" id="stud_ID" name="#" placeholder="Contact Number" required>
        </div>
      </div>
      <div class="add-adm">
        <input class="bttn" type="button" value="Add Schedule Appointment" onclick="location.href='#';">
      </div>
      </form>
    </section>
  </body>
</html>
