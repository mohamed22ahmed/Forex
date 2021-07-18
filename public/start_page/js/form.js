document.querySelector("#sendButton").addEventListener("click", function() {
    const Toast = Swal.mixin({
        toast: false,
        position: 'center',
        showConfirmButton: false,
        timer: 10000
    })

    Toast.fire({
        type: 'success',
        title: 'Request Send successfully We <br> will send message to you in your email soon!!'
    })
});


$('.get-start').click(function() {
    $('.content-cover').hide(350);
    $('.card-cover').show(350);
})
$('.close').click(function() {
    $('.card-cover').hide(350);
    $('.card-cover-reg').hide(350);
    $('.content-cover').show(350);

})

function closeicon() {
    $('.card-cover').hide(350);
    $('.card-cover-reg').hide(350);
    $('.content-cover').show(350);

}

function x() {
    $('.card-cover').hide(350);
    $('.content-cover').hide(350);
    $('.card-cover-reg').show(350);
}


function success() {
    const Toast = Swal.mixin({
        toast: false,
        position: 'center',
        showConfirmButton: false,
        timer: 10000
    })
    Toast.fire({
        type: 'success',
        title: 'Thank You For Your Request. Pro Traders Will Answer Soon'
    })
}