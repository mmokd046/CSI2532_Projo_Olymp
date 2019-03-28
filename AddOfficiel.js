$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $("#epreuveContainer");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $("#athlete").clone().appendTo(wrapper);
        } else {
            alert('You Reached the limits')
        }
    });
     $(wrapper).on("click", ".close", function(e) {
         e.preventDefault();
         $(this).parent('div').remove();
         x--;
     })  
});