toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
$('#login').click(()=>{
    var username = $('#tk').val();
    var password = $('#mk').val();
    var email = $('#email').val();
    var role = $('#role').val();
    var fullname = $('#fullname').val();
    var formData = new FormData();
    formData.append("username", username);
    formData.append("role", role);
    formData.append("email", email);
    formData.append("name", fullname);
    formData.append("password", password);

    $.ajax({
        type: "POST",
        url: apiUrl+"/auth/register",
        data: formData,
        processData: false,
        contentType: false,
        success: (msg)=>{
            toastr.success('Đăng kí thành công', 'Success!');
            window.location=server+"/login";
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var data = XMLHttpRequest.responseJSON;
            toastr.error(data.message, 'Oops!');
            console.log(data);
        }
    });
});