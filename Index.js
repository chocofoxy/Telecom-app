function login(){
	var login = document.Index.getElementById('login').value;
	var password = document.Index.getElementById('password').value;
	if(login.toUpperCase() == "ADMIN" && password.toUpperCase() == "ADMIN"){
		alert("Admin");
	}else if(login.toUpperCase() == "EMP" && password.toUpperCase() == "EMP"){
		alert("Employé");
	}
}