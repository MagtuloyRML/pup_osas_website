var todayDate = new Date();
var month = todayDate.getMonth() + 1; 
var tdate = todayDate.getDate(); 
if(month < 10){
  month = "0" + month 
}
if(tdate < 10){
  tdate = "0" + tdate;
}
var year = todayDate.getUTCFullYear() - 0; 
var maxDate = year + "-" + month + "-" + tdate;
document.getElementById("appoint-date").setAttribute("min", maxDate);
console.log(maxDate);
