<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUP OSAS Admin Page</title>
    <link rel="stylesheet" href="css/admin_nav_style.css">
    <link rel="stylesheet" href="css/admin_sched.css">
    <link rel="stylesheet" href="css/sched_modal.css">
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
            <input class="bttn" type="button" id="bttnAddSched" value="Add Schedule Appointment" >
            <input class="bttn" type="button" id="bttnEditSched" value="Edit Schedule Appointment" >
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
              <td>Student Name</td>
              <td>Student Number</td>
              <td>Date and Time</td>
              <td>Status</td>
            </tr>
          </table>
        </div>
      </div>
  </section>

  <!--adding available sched-->
  <div id="modalAddSched" class="modalSched">
      <div class="modalContent">
        <div class="modalHeader">
          <button type="button" class="closeBtn" data-dismiss="modal">&times;</button>
        </div>
        <form id="schedInfo" action="#">
        <div class="modalBody">
            <h3>Fill up Schedule Info</h3>
            <div class="cont">
              <div class="top-box">
                <div>
                  <h5>Date</h5>
                  <input type="date" id="appoint-date">
                </div>
                <div>
				          <h5>Start Meeting</h5>
				          <input type="time" id="strt_time" name="strt_time">
			          </div>
			          <div>
                  <h5>End Meeting</h5>
				          <input type="time" id="end_time" name="end_time">
			          </div>
			          <div>
                  <!--edit neto kung anong laman neto
                  value-->
                  <h5>Schedule Status</h5>
                  <select name="sched_urgency" id="sched_urgency">
                    <option value="#">Emergency Schedule</option>
                    <option value="#">Regular Schedule</option>
                  </select>
			          </div>
              </div>
		        </div>
        </div>
        </form>
        <div class="modalFooter">
          <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-insert-sched" >Insert Sched</button>
        </div>
      </div>
    </div>
    <!--edit available sched-->
    <div id="modaleditSched" class="modaleditSched">
      <div class="modalContent">
        <div class="modalHeader">
          <button type="button" class="editCloseBtn" data-dismiss="modal">&times;</button>
        </div>
        <form id="schedInfo" action="#">
        <div class="modalBody">
            <h3>Edit Schedule Info</h3>
            <div class="cont">
              <div class="top-box">
                <h5>Select Available Schedule</h5>
                <div>
                  <h5>Date</h5>
                  <input type="date" id="track-appoint-date">
                </div>
                <div>
                <!--mag aapear time pag naclick yun date sa taas-->
                <h5>Schedule Time</h5>
                  <select name="sched_time" id="sched_time">
                    <option value="#">Start time - End Time</option>
                    <option value="#">Start time - End Time</option>
                  </select>
                </div>
			          <div>
                  <h5>Schedule Status</h5>
                  <select name="sched_urgency" id="sched_urgency" readonly>
                    <option value="#">Emergency Schedule</option>
                    <option value="#">Regular Schedule</option>
                  </select>
			          </div>
              </div>
              <div class="top-box">
                <h5>Edit Schedule Info</h5>
                <div>
                  <h5>Date</h5>
                  <input type="date" id="track-appoint-date">
                </div>
                <div>
				          <h5>Start Meeting</h5>
				          <input type="time" id="strt_time" name="strt_time">
			          </div>
			          <div>
                  <h5>End Meeting</h5>
				          <input type="time" id="end_time" name="end_time">
			          </div>
			          <div>
                  <!--edit neto kung anong laman neto
                  value-->
                  <h5>Schedule Status</h5>
                  <select name="sched_urgency" id="sched_urgency">
                    <option value="#">Emergency Schedule</option>
                    <option value="#">Regular Schedule</option>
                  </select>
			          </div>
              </div>
		        </div>
        </div>
        </form>
        <div class="modalFooter">
          <button type="button" class="btn btn-update-sched" >Update Sched</button>
          <button type="button" class="btn btn-delete-sched" >Delete Sched</button>
          <button type="button" class="btn btn-cancel-edit" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>

  <!--avoid pressing past date-->
  <script src="js/app_date_time.js"></script>

  <!--modal add and edit sched-->
  <script src="js/sched_modal.js"></script>
  

  </body>
</html>
