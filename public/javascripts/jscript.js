jQuery(document).ready(function() {

  /*
          Forms show / hide
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

function myTable() {
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
