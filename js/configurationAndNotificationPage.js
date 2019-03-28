 
 $(document).ready(function(){
      var period = document.getElementById("period").value;
      var notificationOption = document.getElementById("notificationOption").value;
      var email = document.getElementById("email").value;
      var phoneNumber = document.getElementById("phoneNumber").value;
      const urlParams = new URLSearchParams(window.location.search);
      const myParam = urlParams.get('birth');
      $('#passedValue').attr('value', myParam);;
      if (notificationOption.length == 0) {
          $("#email").removeAttr('hidden');
      }
      $( "#notificationOption" ).change(function () {  
        var fieldsetName = $(this).val();  
        if (fieldsetName.length == 0) {
          $("#email").removeAttr('hidden');
          $("#phoneNumber").attr('hidden', true);
        } else if (fieldsetName.length == 1) {
          $("#phoneNumber").removeAttr('hidden');
          $("#email").attr('hidden', true);
        } else {
          $("#phoneNumber").removeAttr('hidden');
          $("#email").removeAttr('hidden');
        }
      });  
    	$("form").submit(function(e){
        period = document.getElementById("period").value;
        notificationOption = document.getElementById("notificationOption").value;
        email = document.getElementById("email").value;
        phoneNumber = document.getElementById("phoneNumber").value;
  			if (period.length == 0) {
  				$("#periodDiv").removeAttr('hidden');
  				$("#periodDiv").text('You have not selected a notification period');
  				e.preventDefault(e);
  			} else {
  				$("#periodDiv").attr('hidden', true);
          if (notificationOption.length == 0 && email.length == 0 ) {
          $("#emailDiv").removeAttr('hidden');
          $("#emailDiv").text('You have not entered an email address');
          e.preventDefault(e);
          }else if (notificationOption.length == 1 && phoneNumber.length == 0 ) {
            $("#phoneNumberDiv").removeAttr('hidden');
            $("#phoneNumberDiv").text('You have not entered a phone number');
            e.preventDefault(e);
        } else if (notificationOption.length == 2) {
          if (email.length == 0) {
          $("#emailDiv").removeAttr('hidden');
          $("#emailDiv").text('You have not entered an email address');
          e.preventDefault(e);
          } else {
            $("#emailDiv").attr('hidden', true);
          }   
          if (phoneNumber.length == 0) {
            $("#phoneNumberDiv").removeAttr('hidden');
            $("#phoneNumberDiv").text('You have not entered a phone number');
            e.preventDefault(e);
          } else {
            $("#phoneNumberDiv").attr('hidden', true);
          }
        } else {
          ;
        }
      }
    });
});
