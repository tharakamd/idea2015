
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    name: "required",
		    subject: "required",
                    message: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    mobile: {
                        number: true,
                        required: true,
                        minlength: 10,
			maxlength: 10
                    }
                },
                messages: {
                    name: "Please Enter Your Name.",
                    subject: "Subject Can`t Be Empty.",
                    mobile: {
                        required: "Please Provide Your Mobile Number",
			number : "Enter Numbers Only",
                        minlength: "Your Mobile Number Must Contain 10 Numbers",
			maxlength: "Your Mobile Number Can`t Have More Than 10 Numbers"
                    },
                    email: "Please Enter a Valid Email Address",
		    message : "This Are Can`t Be Empty."
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });


})(jQuery, window, document);