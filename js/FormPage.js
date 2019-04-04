 
 $(document).ready(function(){

    	$("form").submit(function(e){
  			var firstName = document.getElementById("firstName").value;
  			var lastName = document.getElementById("lastName").value;
  			var datepicker = document.getElementById("datepicker").value;
  			var healthConcern = document.getElementById("healthConcern").value;
  			var medicationTaken = document.getElementById("medicationTaken").value;
  			var sex = document.getElementById("sex").value;
  			if (firstName.length == 0) {
  				$("#FirstNameDiv").removeAttr('hidden');
  				$("#FirstNameDiv").text('You have not entered a first name');
  				e.preventDefault(e);
  			} else {
  				$("#FirstNameDiv").attr('hidden', true);
  			}
  			 if (lastName.length == 0) {
  			 	$("#LastNameDiv").removeAttr('hidden');
  			 	$("#LastNameDiv").text('You have not entered a last name');
  			 	e.preventDefault(e);
  			 } else {
  				$("#LastNameDiv").attr('hidden', true);
  			}
  			if (datepicker.length == 0) {
 				$("#dateDiv").removeAttr('hidden');
  				$("#dateDiv").text('You have not selected a birthdate');
  				e.preventDefault(e);
  			}else {
  				$("#dateDiv").attr('hidden', true);
  			}
  			if (healthConcern.length == 0) {
 				$("#healthConcernDiv").removeAttr('hidden');
  				$("#healthConcernDiv").text('You have not entered a health concern');
  				e.preventDefault(e);
  			}else {
  				$("#healthConcernDiv").attr('hidden', true);
  			}
  			if (medicationTaken.length == 0) {
 				$("#medicationTakenDiv").removeAttr('hidden');
  				$("#medicationTakenDiv").text('You have not entered the taken medications');
  				e.preventDefault(e);
  			}else {
  				$("#medicationTakenDiv").attr('hidden', true);
  			}
  			if (String(sex).length == 0) {
 				$("#sexDiv").removeAttr('hidden');
  				$("#sexDiv").text('You have not selected the sex of the baby');
  				e.preventDefault(e);
  			}else {
  				$("#sexDiv").attr('hidden', true);
  			}
        });
});
