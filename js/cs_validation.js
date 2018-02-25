function showMessage(location,message,color){
     document.getElementById(location).innerHTML = message;
     document.getElementById(location).style.color= color;
    }

// -----------------------SignUp------------------------ //
function validateName(){
	var uname = document.getElementById('usrname').value;
	if(uname.length == ""){

		showMessage('errUsername','Empty Field','red');
		return true;
          }
        

	else if (uname.length < 3 ) {
		
		showMessage('errUsername','Must be at least 3 characters ','red');
		return true;
	}
	

	else if (!uname.match(/^[a-zA-Z]{2,30}\s{1}[a-zA-Z]{3,30}$/)){
		
		showMessage('errUsername','Enter First & Lastname with space ','red');
		return true;
	}
	else{
		
	showMessage('errUsername','Valid username','green');
	return false;
	}

}

  
function validateEmail(){

	var email= document.getElementById('email').value;
		
		if(email.length == "")
		{
			
			showMessage('errEmail','Empty field','red');
			return true;
			
		}
		//else if(atpos < 1 || dotpos < atpos + 2 || dotpos + 2 > email.length)
		else if(!email.match(/([a-zA-Z0-9]{3,20})+@([a-z]{5,7})+.com$/))
       {    
       	   
			showMessage('errEmail','Invalid Email','red');
			return true;
			
	     }
	else{

		showMessage('errEmail','Valid Email','green');
		return false;
		
	} 


}

function validateAddress(){

	var address = document.getElementById("address").value;
	 if (address.length == "") {
	 	
	 	showMessage('errAddress', 'Empty Field', 'red');
	 	return true;
	 }
	 else if(address.length < 3){
	 	showMessage('errAddress' , 'Invalid Address','red');
	 	return true;
	 }
	 else if(address.match(/[\?+*|\":<>[\]{}`\\()';@&$%#!]/)){
	 	
	 	showMessage('errAddress', 'Invalid Address Format', 'red');
	 	return true;
	 }
	 else{
	 	
		showMessage('errAddress','Valid Address','green');
		return false;
	 }
	
}

function validateContactNo(){
	
	var Regx =/^9+([7-8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])+/;
	var number = document.getElementById('number').value;
	if (number.length == ""){
		
		showMessage('errNumber', 'Empty Field', 'red');
		return true;
	}
	else if(number.length > 10){
		
		showMessage('errNumber','Invalid MobileNo.','red');
		return true;
	}
	else if(!number.match(Regx)){
		
		showMessage('errNumber','Invalid MobileNo.','red');
		return true;
	}
	else{
		
		showMessage('errNumber','Valid MobileNo.','green');
		return false;
	}
	
}

function validatePassword(){
		var password = document.getElementById('password').value;
		if (password.length == "") {
			
			showMessage('errPassword','Empty Field','red');
			return true;
		}
		else if(password.match(/[\?+*|\":<>[\]{}`\\()';@&$%#!]/)){
          
             showMessage('errPassword','Only letters & numbers are allowed','red');
             return true;
		}
		else if(!password.match(/[a-zA-Z0-9]{6,10}/)){
            
             showMessage('errPassword','Weak Password','red');
             return true;
		}
		else{
			
			showMessage('errPassword','Strong Password','green');
			return false;
		}
}

function validateForm(){
	 
	var a = validateName();
	var b = validateEmail();
	var c = validateAddress();
	var d = validateContactNo();
	var e = validatePassword();
	if (a === false && b === false && c === false && d === false && e === false) {
		
		alert('Successfull Registration');	
		return true;
		
	}

else {
		alert('Re-check Form field !!');
		return false;
	}

}

  

//---------------------Login ----------------------//

function validateName1(){
	var uname = document.getElementById('usrname1').value;
	if(uname.length == ""){

		showMessage('errUsername1','Empty Field','red');
		return true;
          }
        

	else if (uname.length < 3 ) {
		
		showMessage('errUsername1','Must be at least 3 characters','red');
		return true;
	}
	

	else if (!uname.match(/^[a-zA-Z]{2,30}\s{1}[a-zA-Z]{3,30}$/)){
		
		showMessage('errUsername1','Enter Fullname ','red');
		return true;
	}
	else{
		
	showMessage('errUsername1','Valid username','green');
	return false;
	}

}

function validatePassword1(){
		var password = document.getElementById('password1').value;
		if (password.length == "") {
			
			showMessage('errPassword1','Empty Field','red');
			return true;
		}
		else if(password.match(/[!@#$%^&*()_|.,?]/)){
          
             showMessage('errPassword1','Only letters & numbers allowed','red');
             return true;
		}
	
		else{
			
			showMessage('errPassword1','Valid Password','green');
			return false;
		}
}


function validateForm1(){
	 
	var a = validateName1();
	var b = validatePassword1();
	if (a === false && b === false ) {
			
		return true;
		
	}

else {
		alert('Re-check Form field !!');
		return false;
	}

}