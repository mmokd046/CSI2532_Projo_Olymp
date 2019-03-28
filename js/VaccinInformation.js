 
 $(document).ready(function(){
  const urlParams = new URLSearchParams(window.location.search);
  const myParam = urlParams.get('VaccineName');
  var date = String(myParam);
  $("#VaccinName").text(date);
  $("#VaccinBasicDescription").text("Basic Description of "+date);
  $("#VaccinIntent").text("Intent of "+date);

});
