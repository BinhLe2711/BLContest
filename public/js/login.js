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
    var formData = new FormData();
    formData.append("email", username);
    formData.append("password", password);
    $.ajax({
        type: "POST",
        url: apiUrl+"/auth/login",
        data: formData,
        processData: false,
        contentType: false,
        success: (msg)=>{
            toastr.success('Đăng nhập thành công', 'Success!');
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var data = XMLHttpRequest.responseJSON;
            toastr.error("Sai tài khoản hoặc mật khẩu", 'Oops!');
        }
    });
});