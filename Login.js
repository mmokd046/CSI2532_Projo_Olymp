 
 $(document).ready(function(){

      realuserName = document.getElementById("usernamefromDb").value;

      realPassword = document.getElementById("passwordfromDb").value;

      console.log(realuserName);
      console.log(realPassword);

    	$("form").submit(function(e){
  			var emailValue = document.getElementById("email").value;
  			var passWordValue = document.getElementById("password").value;
        var sameUsername = realuserName === emailValue;
        var samePassword = realPassword === passWordValue;
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

        if (sameUsername && samePassword) {
          $("#emailDiv").attr('hidden', true);
          $("#passwordDiv").attr('hidden', true);
        } else if (!sameUsername) {
          $("#emailDiv").removeAttr('hidden');
          $("#emailDiv").text('Votre username est incorrect');
           e.preventDefault(e);
        } else if (!samePassword ) {
          $("#passwordDiv").removeAttr('hidden');
          $("#passwordDiv").text('Votre mot de passe est invalide');
          e.preventDefault(e);
        } else {
          $("#emailDiv").removeAttr('hidden');
          $("#emailDiv").text('Votre username est incorrect');
          $("#passwordDiv").removeAttr('hidden');
          $("#passwordDiv").text('Votre mot de passe est invalide');
          e.preventDefault(e);
        }


      });
});
