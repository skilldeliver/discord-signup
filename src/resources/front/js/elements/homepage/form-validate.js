$(function() {
    let $element = $('#form');

    if ($element.length > 0) {
        $element.validate({
            ignore: [],
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: window.validationMessages['email.required'],
                    email: window.validationMessages['email.email']
                }
            },
            errorElement: 'span',
            errorClass: 'error',
            highlight: function(element) {
                $(element).closest('.form-group').find('.backend-error').remove();
                $(element).closest('.form-group').addClass('error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').find('.backend-error').remove();
                $(element).closest('.form-group').removeClass('error');
            }
        });

        $('input').on('focusout', function() {
            $(this).val($.trim($(this).val()));
            $(this).valid();
        });
    }
});
