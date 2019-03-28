 
 $(document).ready(function(){
  const urlParams = new URLSearchParams(window.location.search);
  const myParam = urlParams.get('Birthday');
  var date = String(myParam);
  var month = date[0]+date[1];
  var day = date[3]+date[4];
  var year = date[6]+date[7]+date[8]+date[9];
  var birthDate= new Date(year, month , day);
  var newMonth = birthDate.getUTCMonth()+1;
  var birthday = birthDate.getUTCFullYear() + "/" + newMonth  + "/" + birthDate.getUTCDate();
  $('#passedValue').attr('value', date);
  $("#Birthday").text(birthday);
  var secondDate = new Date(birthDate.valueOf());
  secondDate.setMonth(secondDate.getMonth() + 2);
  var newMonth1 = secondDate.getUTCMonth()+1;
  var after2month = secondDate.getUTCFullYear() + "/" + newMonth1  + "/" + secondDate.getUTCDate();
  $("#secondDate").text(after2month);

  var secondDate1 = new Date(birthDate.valueOf());
  secondDate1.setMonth(secondDate1.getMonth() + 4);
  var newMonth2 = secondDate1.getUTCMonth()+1;
  var after4month = secondDate1.getUTCFullYear() + "/" + newMonth2  + "/" + secondDate1.getUTCDate();
  $("#thirdDate").text(after4month);

  var secondDate2 = new Date(birthDate.valueOf());
  secondDate2.setMonth(secondDate2.getMonth() + 6);
  var newMonth3 = secondDate2.getUTCMonth()+1;
  var after6month = secondDate2.getUTCFullYear() + "/" + newMonth3  + "/" + secondDate2.getUTCDate();
  $("#fourthDate").text(after6month);

  var secondDate3 = new Date(birthDate.valueOf());
  secondDate3.setMonth(secondDate3.getMonth() + 12);
  var newMonth4 = secondDate3.getUTCMonth()+1;
  var after12month = secondDate3.getUTCFullYear() + "/" + newMonth4  + "/" + secondDate3.getUTCDate();
  $("#fifthDate").text(after12month);

  var secondDate4 = new Date(birthDate.valueOf());
  secondDate4.setMonth(secondDate4.getMonth() + 15);
  var newMonth5 = secondDate4.getUTCMonth()+1;
  var after15month = secondDate4.getUTCFullYear() + "/" + newMonth5  + "/" + secondDate4.getUTCDate();
  $("#sixthDate").text(after15month);

  var secondDate5 = new Date(birthDate.valueOf());
  secondDate5.setMonth(secondDate5.getMonth() + 18);
  var newMonth6 = secondDate5.getUTCMonth()+1;
  var after18month = secondDate5.getUTCFullYear() + "/" + newMonth6  + "/" + secondDate5.getUTCDate();
  $("#seventhDate").text(after18month);
  
});
