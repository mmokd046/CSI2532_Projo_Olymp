$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $("#installationOlympContainer");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div id="installationOlympContainer" class="input-group mb-3"><input type="text" class="form-control" placeholder="Entrer un service medical" name ="installationOlympique[]" aria-describedby="basic-addon1"><button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); //add input box
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