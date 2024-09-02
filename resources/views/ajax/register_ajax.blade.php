<script>
$(document).ready(function(){
    
    //===================================Teacher Data Insert Start=======================================>
$("#registraFrom").submit(function(e){
             e.preventDefault();
             var formData = new FormData(this);

            $.ajax({
                url: '{{ route("registration_post")}}',
                type: 'post',
                data :formData,
                dataType: 'json',
                contentType:false,
                processData:false,
                success: function(response){          
                   if (response.status == false) {
                       var errors = response.errors;
                            if (errors.name) {
                                $("#name").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.name)
                                }else(
                                $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('')
                            )
                            if (errors.email) {
                                $("#email").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.email)
                                }else(
                                $("#email").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('')
                            )
                            if (errors.password) {
                                $("#password").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.password)
                                }else(
                                $("#password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('')
                            )
                            if (errors.confirm_password) {
                                $("#confirm_password").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.confirm_password)
                                }else(
                                $("#confirm_password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('')
                            )  
                            if (errors.is_role) {
                                $("#is_role").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors.is_role)
                                }else(
                                $("#is_role").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('')
                            )  
                    }
                    else{

                            $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            $("#email").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            $("#password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            $("#confirm_password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                            $("#is_role ").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');

                            window.location.href = '{{ route("loginpage") }}'

                    }
                }
             });

         });
//===================================Teacher Data Insert End=======================================>

});
</script>