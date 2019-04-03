 
 $(document).ready(function(){

      realuserName = document.getElementById("username").value;

      realPassword = document.getElementById("password").value;

    	$("form").submit(function(e){
  			var emailValue = document.getElementById("email").value;
  			var passWordValue = document.getElementById("password").value;
  			if (emailValue.length == 0) {
  				$("#emailDiv").removeAttr('hidden');
  				$("#emailDiv").text('Vous avez pas rentrer de username');
  				e.preventDefault(e);
  			} else {
  				$("#emailDiv").attr('hidden', true);
  			}
  			if (passWordValue.length == 0) {
  				$("#passwordDiv").removeAttr('hidden');
  				$("#passwordDiv").text('Vous avez pas rentrer de mot de passe');
  				e.preventDefault(e);
  			} else {
            $("#passwordDiv").attr('hidden', true);
          } 
          if (emailValue !=== realuserNamel) {
            $("#emailDiv").removeAttr('hidden');
            $("#emailDiv").text('Votre username est incorrect');
    				$("#passwordDiv").attr(true);
    				e.preventDefault(e);
  			} else if (passWordValue !=== realPassword) {
            $("#emailDiv").removeAttr('hidden');
            $("#emailDiv").text('Votre mot de passe est incorrect');
            $("#passwordDiv").attr(true);
            e.preventDefault(e);
        } else {
    				$("#emailDiv").attr('hidden', true);
            $("#passwordDiv").attr(true);
  			}   
        });
});
