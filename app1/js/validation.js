
function validation() {
	var username = document.register.username;
	var email = document.register.email;
	var pwd = document.register.pwd;
	var cpwd = document.register.cpwd;

	if(username.value=='') {
		alert('Enter Username');
		username.focus();
		return false;		
	}
	if(email.value=='') {
		alert('Enter Email');
		email.focus();
		return false;		
	}
	if(pwd.value=='') {
		alert('Enter Password');
		pwd.focus();
		return false;		
	}
	if(cpwd.value=='') {
		alert('Enter Confirm Password');
		cpwd.focus();
		return false;		
	}

	if(pwd.value !=  cpwd.value) {
		alert('Password & Confirm password not matched');
		pwd.focus();
		return false;	
	}
	if(pwd.length<6){  
  alert("Password must be at least 6 characters long.");  
	pwd.focus();
  return false;  
  }  
	
	//email validation
	var validEmailExpression = /(\w+)\@(\w+)\.[a-zA-Z]/g;
	
	 if(!validEmailExpression.test(email.value)){
        alert("Please enter a valid email");
				email.focus();
		return false;		
    } 
	
}
