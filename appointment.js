function openNav() {
	document.getElementById("mySidemenu").style.width = "150px";
	document.getElementById("main").style.marginLeft = "150px";
	document.body.style.backgroundColor = "rgba(0, 0, 0, 0.4)";
}
	
function closeNav() {
	document.getElementById("mySidemenu").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
	document.body.style.backgroundColor = "LightGrey";
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}