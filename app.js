const closeBtn = document.querySelector(".close");

if(closeBtn){
closeBtn.addEventListener("click", closePopUp);
}
function closePopUp() {
	document.querySelector(".popUp").style.display = "none";
}




