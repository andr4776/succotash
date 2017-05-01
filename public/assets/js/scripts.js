jQuery(document).ready(function() {

    /*
        Background
    */
    $('.top-content').backstretch("../assets/img/backgrounds/1.jpg");

    /*
        Wow
    */
    new WOW().init();


    /*
        Login form Validation
    */

    /*
        Search form
    */
    $('.navbar-search-button .search-button').on('click', function(e){
    	e.preventDefault();
    	$(this).blur();
    	$('.navbar-header, .navbar-menu-items, .navbar-search-form').toggleClass('disabled');
    	$('.navbar-search-form input.search').val('').focus();
    });

/*
		 forms show/hide
 */
 $('.show-register-form').on('click', function(){
     if( ! $(this).hasClass('active') ) {
       $('.show-login-form').removeClass('active');
       $(this).addClass('active');
       $('.login-form').fadeOut('fast', function(){
         $('.register-form').fadeIn('fast');
       });
     }
   });
   // ---
   $('.show-login-form').on('click', function(){
     if( ! $(this).hasClass('active') ) {
       $('.show-register-form').removeClass('active');
       $(this).addClass('active');
       $('.register-form').fadeOut('fast', function(){
         $('.login-form').fadeIn('fast');
       });
     }
   });
   /*
           Login form validation
       */
       $('.l-form input[type="text"], .l-form input[type="password"], .l-form textarea').on('focus', function() {
       	$(this).removeClass('input-error');
       });

       $('.l-form').on('submit', function(e) {

       	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
       		if( $(this).val() == "" ) {
       			e.preventDefault();
       			$(this).addClass('input-error');
       		}
       		else {
       			$(this).removeClass('input-error');
       		}
       	});

       });


       /*
               Registration form validation
           */
           $('.r-form input[type="text"], .r-form textarea').on('focus', function() {
           	$(this).removeClass('input-error');
           });

           $('.r-form').on('submit', function(e) {

           	$(this).find('input[type="text"], textarea').each(function(){
           		if( $(this).val() == "" ) {
           			e.preventDefault();
           			$(this).addClass('input-error');
           		}
           		else {
           			$(this).removeClass('input-error');
           		}
           	});

           });


           // Get the modal
           var modal = document.getElementById('myModal');

           // Get the button that opens the modal
           var btn = document.getElementById("myBtn");

           // Get the <span> element that closes the modal
           var span = document.getElementsByClassName("close")[0];

           // When the user clicks the button, open the modal
           btn.onclick = function() {
               modal.style.display = "block";
           }

           // When the user clicks on <span> (x), close the modal
           span.onclick = function() {
               modal.style.display = "none";
           }

           // When the user clicks anywhere outside of the modal, close it
           window.onclick = function(event) {
               if (event.target == modal) {
                   modal.style.display = "none";
               }
           }

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
function emailrequired()
{
var empt = document.forms["form"]["form-email"].value;
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
