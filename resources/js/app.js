//Enable Tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});

//Sweetalert Defaults
const sweetAlert = Swal.mixin({
    position: 'top',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false,
    allowEnterKey: false,
    showClass: {
        popup: false
    },
    hideClass: {
        popup: false
    }
})

//Delete Model Confirmation
$('.form-delete').on('submit', function (e) {

    e.preventDefault();
    var form = this;

    sweetAlert.fire({
        title: $(this).data('title'),
        icon: 'warning',
        html: $(this).data('text'),
        showCancelButton: true,
        focusConfirm: false,
    }).then((result) => {
        if ( result.isConfirmed ) {

            form.submit();
        }
    })
});
