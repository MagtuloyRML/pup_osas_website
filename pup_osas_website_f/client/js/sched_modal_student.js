//open add appoint sched modal student
var modalAddApp = document.getElementById("modalAppSched");
var addBttn = document.getElementById("bttnAddAppSched");
var closeModal1 = document.getElementsByClassName("appCloseBtn")[0];
var closeModal2 = document.getElementsByClassName("btn btn-cancel-app")[0];


addBttn.onclick = function() {
    modalAddApp.style.display = "block";
  }
closeModal1.onclick = function() {
    modalAddApp.style.display = "none";
  }
closeModal2.onclick = function() {
    modalAddApp.style.display = "none";
  }

//open edit appoint sched modal student
var modalEditApp = document.getElementById("modalAppEditSched");
var editBttn = document.getElementById("bttnEditAppSched");
var closeModal3 = document.getElementsByClassName("appEditCloseBtn")[0];
var closeModal4 = document.getElementsByClassName("btn btn-cancel-edit")[0];


editBttn.onclick = function() {
    modalEditApp.style.display = "block";
  }
closeModal3.onclick = function() {
    modalEditApp.style.display = "none";
  }
closeModal4.onclick = function() {
    modalEditApp.style.display = "none";
  }