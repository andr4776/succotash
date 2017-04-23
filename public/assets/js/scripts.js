jQuery(document).ready(function() {

    /*
        Background slideshow
    */
    $('.top-content').backstretch("../../assets/img/backgrounds/1.jpg");

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
 var countTo = 24 * 46 * 60 * 60 * 1000 + now.valueOf();
 $('.timer').countdown(countTo, function(event) {
	 $(this).find('.days').text(event.offset.totalDays);
	 $(this).find('.hours').text(event.offset.hours);
	 $(this).find('.minutes').text(event.offset.minutes);
	 $(this).find('.seconds').text(event.offset.seconds);
 });

/*
    CUSTOM JAVASCRIPT --- VALIDATION ----- EMPTY FIELD
  */
function required()
{
var empt = document.forms["form1"]["form-email"].value;
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






  /*function ValidateEmail (mail){
    if (document.queryForm.inputFirstName.value == ""){
      alert ( "First name is required please");
      document.queryForm.inputFirstName.focus();
      return false;
    }
    if (document.queryForm.inputLastName.value == ""){
      alert ("Last name is required please");
      document.queryForm.inputLastName.focus();
      return false;
    }
    if (document.queryForm.inputUserName.value == ""){
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
  }
