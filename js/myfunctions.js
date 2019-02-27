function deleteImage(id) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(event) {
		if (this.status == 200)
		{
			window.location.reload();
		};
	};
	xhr.open('POST', 'delete.php');
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send('imageid='+id);
}

function signup() {
	var xhr = new XMLHttpRequest();
	var username = document.querySelector("#signupusername").value;
	var password = document.querySelector("#signuppassword").value;
	var confirm = document.querySelector('#signupconfirm').value;
	var email = document.querySelector('#email').value;
	xhr.onreadystatechange = function(event) {
		if (this.status == 200 && this.readyState == 4)
		{
			document.querySelector(".signupModalError").innerHTML = this.response;
		}
	}
	xhr.open('POST', 'modal/signup.php');
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("username=" + username + "&password=" + password + "&confirm=" + confirm + "&email=" + email);
}