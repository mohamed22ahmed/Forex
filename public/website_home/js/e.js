
$('.dark').click(function(){
  $('.change').addClass('dark-mood').removeClass('light-mood');
  $('.change-color-h').addClass('dark-color-h').removeClass('light-color-h');
  $('.change-color-p').addClass('dark-color-p').removeClass('light-color-p');
  $('change-footer').addClass('footer-dark').removeClass('footer-light');

})
$('.light').click(function(){
  $('.change').addClass('light-mood').removeClass('dark-mood');
  $('.change-color-h').addClass('light-color-h').removeClass('dark-color-h');
  $('.change-color-p').addClass('light-color-p').removeClass('dark-color-p');
  $('change-footer').addClass('footer-light').removeClass('footer-dark');
})

$(window).on("scroll",function(){
  if($(window).scrollTop()>=100) {
      $('.nav-scroll').css({
        boxShadow:'4px 4px 3px #F5F5F5',
      });
    }
      else {
        $('.nav-scroll').css({
          boxShadow:'none',

        });
      }
}) ;


$('#modal1').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
});





function success() {
    const Toast = Swal.mixin({
        toast: false,
        position: 'center',
        showConfirmButton: false,
        timer: 3500
      })
      Toast.fire({
        type: 'success',
        title: 'Edit Done Succefully'
      })
}

function accept() {
  const Toast = Swal.mixin({
      toast: false,
      position: 'center',
      showConfirmButton: false,
      timer: 3500
    })
    
    Toast.fire({
      type: 'success',
      title: 'Request Accepted successfully'
    })
}
function Canceled() {
  const Toast = Swal.mixin({
      toast: false,
      position: 'center',
      showConfirmButton: false,
      timer: 3500
    })
    
    Toast.fire({
      type: 'success',
      title: 'Request Refused successfully'
    })
}
function complain() {
  const Toast = Swal.mixin({
      toast: false,
      position: 'center',
      showConfirmButton: false,
      timer: 3500
    })
    
    Toast.fire({
      type: 'success',
      title: 'Compain Sent successfully'
    })
}

function success2() {
    const Toast = Swal.mixin({
        toast: false,
        position: 'center',
        showConfirmButton: false,
        timer: 5500
      })
      
      Toast.fire({
        type: 'success',
        title: '4SOFT has received your request successfully and we will answer soon'
      })
}

function success3() {
  const Toast = Swal.mixin({
      toast: false,
      position: 'center',
      showConfirmButton: false,
      timer: 3000
    })
    
    Toast.fire({
      type: 'success',
      title: 'Updated successfully'
    })
}




$(window).on("scroll",function(){
    if($(window).scrollTop()>=300)
    {
        $('#goUPButton').slideDown(700);
    }
    else
    {
        $('#goUPButton').slideUp(700); 
    }
}) ;
function goUP(){
    window.scrollTo(0,0); 
};
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


var real = document.getElementById('real-life');
var btn  = document.getElementById('choose-btn-pc');
var customTxt  = document.getElementById('customTxt');
var srcBtn = document.getElementById('src-btn');
var fileBtn = document.getElementById('file-btn');
var customTxt2 = document.getElementById('customTxt2');


btn.addEventListener("click",function() {
  real.click();
});
real.addEventListener("change",function() {
  if(real.value) {
    customTxt.innerHTML = real.value;
  } else {
    customTxt.innerHTML = "No File Chosen yet !";
  }
});

srcBtn.addEventListener("click",function() {
  fileBtn.click();
});
fileBtn.addEventListener("change",function() {
  if(fileBtn.value) {
    customTxt2.innerHTML = fileBtn.value;
  } else {
    customTxt2.innerHTML = "No File Chosen yet !";
  }
})



/**** Course Content Section  ****/


