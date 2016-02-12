function checkmobile(e){
	
	var mobilenum = document.getElementById("mobile").value;
	var mobileRepeatNum = document.getElementById("repeatmobile").value;
	
	if(mobilenum != mobileRepeatNum){
		e.preventDefault();
		alert("Mobile numbers do not match!!");
	}
	//this.submit();
}

document.getElementById("signup-form").onsubmit = checkmobile;