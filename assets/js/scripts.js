jQuery(document).ready(function() {

    /*
        Background slideshow
    */
    $('.top-content').backstretch("assets/img/backgrounds/1.jpg");

    /*
        Wow
    */
    new WOW().init();

    /*
        Search form
    */
    $('.navbar-search-button .search-button').on('click', function(e){
    	e.preventDefault();
    	$(this).blur();
    	$('.navbar-header, .navbar-menu-items, .navbar-search-form').toggleClass('disabled');
    	$('.navbar-search-form input.search').val('').focus();
    });

});
/*
		 Countdown initializer
 */
 var now = new Date();
 var countTo = 7 * 24 * 60 * 60 * 1000 + now.valueOf();
 $('.timer').countdown(countTo, function(event) {
	 $(this).find('.days').text(event.offset.totalDays);
	 $(this).find('.hours').text(event.offset.hours);
	 $(this).find('.minutes').text(event.offset.minutes);
	 $(this).find('.seconds').text(event.offset.seconds);
 });

/*
    CUSTOM JAVASCRIPT --- VALIDATION ----- EMPTY FIELD
  */
function emailrequired()
{
var empt = document.forms["form"]["email-form"].value;
  if (empt =="")
  {
    alert("Please input your email")
    return false;
  }
  else {
    return true;
  }
}

function EmptyValidation(formEmail)
{
  if (formEmail.value.length == 0)
  {
    document.formEmail.style.border = "#ed7b28";
      alert("Please fill in empty fields");
  }
  else {
    document.formEmail.style.border = "#e91575";
  }
  alert("Please fill in empty fields")
  return console.error();
}





  /*

  function formValidate(){
    if (document.queryForm.form-userName.value == ""){
      alert ( "User name is required please");
      document.queryForm.form-username.focus();
      return false;
    }
    if (document.queryForm.form-password.value == ""){
      alert (" Password is required please");
      document.queryForm.form-password.focus();
      return false;
    }

    /*
    if (document.queryForm.inpu.value == ""){
      alert ("User name is required please");
      document.queryForm.inputUserName.focus();
      return false;
    }
    if (document.queryForm.inputEmail.value == "" ){
      alert (" Email is required please");
      document.queryForm.inputEmail.focus();
      return false;
    }
      if (document.queryForm.inputQuery.value == ""){
        alert ( "Your query please");
        document.queryForm.inputQuery.focus();
        return false;
       }
       return true;
      }
*/
 /*
  Validation form
  */
  function ValidateEmail(inputText)
  {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(inputText.value.match(mailformat))
    {
      alert("Thank You, Email Adress Valid ");
      document.form1.inputEmail.focus();
      return true;

    }
    else {
      alert("You have entered an invalid email address!");
      document.form1.inputEmail.focus().style.border ="red";
      return false;

    }
    function ValidateEmail(inputText)
    {
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(inputText.value.match(mailformat))
      {
        alert("Thank You, Email Adress Valid ");
        document.form1.inputEmail.focus();
        return true;

      }
      else {
        alert("You have entered an invalid email address!");
        document.form1.inputEmail.focus().style.border ="red";
        return false;

      }
    }

    function openModal() {
      document.getElementById('myModal').style.display = "block";
    }

    function closeModal() {
      document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }

    function myTableFun() {
      // Declare variables
      var input, filter, table, tr, td, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    function myToast(){
      // getting snack bar divider
      var x= document.getElementById("snackbar")
      // adding show class to div
      x.className ="show";
      // after 4 seconds, remove the show cladd from div
    setTimeout(function(){x.className = x.className.replace("show","");},4000);
    }

  });
