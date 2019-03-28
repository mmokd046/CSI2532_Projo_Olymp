 
 $(document).ready(function(){

    	$("form").submit(function(e){
  			var vaccin = document.getElementById("vaccin").value;
  			if (vaccin.length == 0) {
  				$("#searchDiv").removeAttr('hidden');
  				$("#searchDiv").text('You have not entered the name of the disease/vaccin');
  				e.preventDefault(e);
  			} else {
  				$("#searchDiv").attr('hidden', true);
  			}
        });
});
