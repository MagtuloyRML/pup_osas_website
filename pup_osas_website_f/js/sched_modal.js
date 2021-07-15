//open add sched modal
var modalAdd = document.getElementById("modalAddSched");
var addBttn = document.getElementById("bttnAddSched");
var closeModal1 = document.getElementsByClassName("closeBtn")[0];
var closeModal2 = document.getElementsByClassName("btn btn-cancel")[0];


addBttn.onclick = function() {
    modalAdd.style.display = "block";
  }
closeModal1.onclick = function() {
    modalAdd.style.display = "none";
  }
closeModal2.onclick = function() {
    modalAdd.style.display = "none";
  }

//open edit sched modal
var modalEdit = document.getElementById("modaleditSched");
var editBttn = document.getElementById("bttnEditSched");
var closeModal3 = document.getElementsByClassName("editCloseBtn")[0];
var closeModal4 = document.getElementsByClassName("btn btn-cancel-edit")[0];
  
  
editBttn.onclick = function() {
  modalEdit.style.display = "block";
}
closeModal3.onclick = function() {
  modalEdit.style.display = "none";
}
closeModal4.onclick = function() {
  modalEdit.style.display = "none";
}

//open appoint sched stud modal
var modalAddsched = document.getElementById("modalAddApp");
var addAppBttn = document.getElementById("bttnAddAppSched");
var closeModal5 = document.getElementsByClassName("addCloseBtn")[0];
var closeModal6 = document.getElementsByClassName("btn addBtn-cancel")[0];


addAppBttn.onclick = function() {
    modalAddsched.style.display = "block";
  }
closeModal5.onclick = function() {
    modalAddsched.style.display = "none";
  }
closeModal6.onclick = function() {
    modalAddsched.style.display = "none";
  }