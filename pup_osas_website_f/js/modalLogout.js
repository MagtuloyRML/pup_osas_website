var modalLG = document.getElementById("modalLogOut");
var lGBttn = document.getElementById("bttnLogOut");
var closeModal1 = document.getElementsByClassName("closeBtn")[0];
var closeModal2 = document.getElementsByClassName("btn btn-cancel")[0];


lGBttn.onclick = function() {
    modalLG.style.display = "block";
  }
closeModal1.onclick = function() {
    modalLG.style.display = "none";
  }
closeModal2.onclick = function() {
    modalLG.style.display = "none";
  }
