$(function(){
    setTimeout(() => {
        $('.toast').removeClass('show');
    }, 4000);
    $('.btn-close-toast').click(function(){
        $('.toast').removeClass('show');
    })

    
})