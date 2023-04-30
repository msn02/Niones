const form = document.getElementById('form');
const uname = document.getElementById("uname");
const pass = document.getElementById("pass");
const unameM = document.getElementById("unameM");
const passM = document.getElementById("passM");

const textStyle1 = document.querySelector('#unameM');
const textStyle2 = document.querySelector('#passM');

// log in credentials
var username = "admin";
var password = "password123";

form.addEventListener('submit', e => {
	e.preventDefault();
});

function inputChecker() {
	if (uname.value.trim()==username && pass.value.trim()==password) {
		window.location.assign("aboutMe.html");
	} else {
		// username
		if (uname.value.trim()==username) {
			textStyle1.style.setProperty('opacity', '0');
		} 
		else {
			textStyle1.style.setProperty('color', 'red');
			unameM.innerHTML = "Invalid username";
		}
		// password
		if (pass.value.trim()==password) {
			textStyle2.style.setProperty('opacity', '0');
		} 
		else {
			textStyle2.style.setProperty('color', 'red');
			passM.innerHTML = "Invalid password"; 
		}
	}
};