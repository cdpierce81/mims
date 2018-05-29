var myIndex = 0;
carousel();

function carousel() {
	var i;
	var x = document.getElementsByClassName("pic");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	myIndex++;
	if (myIndex > x.length) {
		myIndex = 1
	}
	x[myIndex - 1].style.display = "block";
	setTimeout(carousel, 2000); //Change image every 2 seconds
}

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
