const closeModal = document.getElementById('close');
const modal = document.getElementById('openModal');
var elemID ="";

document.onclick = function(place) {
	if (document.getElementById(place.target.id).classList.contains('place') == true) {
		var placeNum = document.getElementById(place.target.id);
		if (placeNum.classList.contains('place__off') == true) {
			alert('Place is already taken!');
		} else {
			elemID = placeNum.id;
			location.href = "http://localhost:82/seat_reservation/index.php?elemID=" + elemID;
		}
	}
}

window.onclick = function(event) {
	if (event.target == modal || event.target == closeModal) {
	modal.style.display = 'none';
	modal.style.pointerEvents = 'none';
	}
}

if (loginUser < 3 || loginUser === "" || loginUser === null) {
	if (window.location != "http://localhost:82/seat_reservation/") {
	modal.style.display = 'block';
	modal.style.pointerEvents = 'auto';
	}
}