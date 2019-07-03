function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// $('.close-div').on('click', function(){
//     $(this).closest("#clients-edit-wrapper").remove();
// });
$(document).ready(function(){
  $("#delete-me").click(function(){
    $("#delete-product").remove();
  });
  $("#delete-me2").click(function(){
    $("#delete-product2").remove();
  });
  $("#delete-me3").click(function(){
    $("#delete-product3").remove();
  });
  $("#delete-me4").click(function(){
    $("#delete-product4").remove();
  });
  $("#delete-me5").click(function(){
    $("#delete-product5").remove();
  });
  $("#delete-me6").click(function(){
    $("#delete-product6").remove();
  });
});