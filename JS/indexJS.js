const form = document.getElementById('form');

form.addEventListener('submit', e => {
	e.preventDefault();
});

function inputChecker() {
	var uname = document.getElementById("uname").value;
	var password = document.getElementById("pass").value;
	let unameM = document.getElementById("unameM");
	let passM = document.getElementById("passM");

	if(uname=="admin") {
		if (password=="pasok123") {
			window.location.assign("aboutMe.html");
		} else {
			// change the text and color into red for the password
		}
	} else {
		// for the username, change the text and color to red
		return;
	}
};
