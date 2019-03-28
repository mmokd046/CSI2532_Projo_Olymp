 
 $(document).ready(function(){

    	$("form").submit(function(e){
  			var emailValue = document.getElementById("email").value;
  			var passWordValue = document.getElementById("password").value;
  			if (emailValue.length == 0) {
  				$("#emailDiv").removeAttr('hidden');
  				$("#emailDiv").text('You have not entered an email');
  				e.preventDefault(e);
  			} else {
  				$("#emailDiv").attr('hidden', true);
  			}
  			if (passWordValue.length == 0) {
  				$("#passwordDiv").removeAttr('hidden');
  				$("#passwordDiv").text('You have not entered a password');
  				e.preventDefault(e);
  			} else if (passWordValue.length > 0 && passWordValue.length < 8) {
  				$("#emailDiv").attr('hidden', true);
  				$("#passwordDiv").removeAttr('hidden')
  				$("#passwordDiv").text('The length of the password should be a minimum of 8 characters')
  				e.preventDefault(e);
  			} else {
  				$("#emailDiv").attr('hidden', true);
  				var hasNumber = false;
  				var UpperCase = false;
  				var i = 0;
  				while(i < passWordValue.length) {
  					if ('0123456789'.includes(passWordValue.charAt(i))) {
  						console.log("Number found in the password")
  						hasNumber = true
  					}
  					if (passWordValue.charAt(i) === passWordValue.charAt(i).toUpperCase()) {
  						console.log("Upper case value found")
  						UpperCase = true
  					}
  					if (UpperCase && hasNumber ) {
  						break;
  					}
  					i++;
  				}
  				 console.log(UpperCase)
  				 console.log(hasNumber)
  				if (UpperCase == false || hasNumber == false ){
					$("#passwordDiv").removeAttr('hidden');
  					$("#passwordDiv").text('Password must contain at least one upper case and one number');
  					e.preventDefault(e);
  				}
  			}   
        });
});
