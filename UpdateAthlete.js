$(document).ready(function() {
    var modifyButton = $(".athlete");

    var x = 1;
    $(modifyButton).click(function(e) {
    	$(this).closest('form').submit()
    }); 
});

