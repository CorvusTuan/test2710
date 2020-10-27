function validate() {
var u = document.getElementById("username").value;
var p = document.getElementById("phone").value;
var e = document.getElementById("email").value;
  
if(u== "") {
alert("Vui lòng nhập tên!");
return false;
}
if(p == "") {
alert("Vui lòng nhập số điện thoại!");
return false;
}
// if(p != 10) {
// alert("Sai đt!");
// return false;
// }
if(e == "") {
alert("Vui lòng nhập email!");
return false;
} 
return true;
}