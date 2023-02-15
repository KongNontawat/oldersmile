$(function () {
    setTimeout(() => {
        $('.toast').removeClass('show');
    }, 4000);
    $('.btn-close-toast').click(function () {
        $('.toast').removeClass('show');
    })

    $('#image').change(function () {
        const file = this.files[0];
        console.log(file);
        if (file) {
            let reader = new FileReader();
            reader.onload = function (event) {
                $('#imgpreview').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    })
})