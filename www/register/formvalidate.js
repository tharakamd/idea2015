// JavaScript Document

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
                    schoolname: "required",
                    firststudent: "required",
                    secondstudent: "required",
                    thirdstudent: "required",
                    fourthtudent: "required",
                    mentorname: "required",
                    selectleader:{
                        required: true
                    },
                    email1: {
                        required: true,
                        email: true
                    },
                    email2: {
                        required: true,
                        email: true
                    },
                    email3: {
                        required: true,
                        email: true
                    },
                    email4: {
                        required: true,
                        email: true
                    },
                    email5: {
                        required: true,
                        email: true
                    },
                    number1: {
                        required: true,
                        number:true,
                        maxlength: 10,
                        minlength: 10
                    },
                    number2: {
                        required: true,
                        number:true,
                        maxlength: 10,
                        minlength: 10
                    }
                },
                messages: {
                    schoolname : "Please Enter Your School Name",
                    firststudent: "Please Enter First Student Name",
                    secondstudent: "Please Enter Second Student Name",
                    thirdstudent: "Please Enter Third Student Name",
                    fourthtudent: "Please Enter Fourth Student Name",
                    mentorname: "Please Enter Mentor`s Name",
                    number1: {
                        required: "Please Provide a Valid Mobile Number.",
                        maxlength: "Your Mobile Number Should Not Contain More Than 10 Numbers.",
                        minlength: "Your Mobile Number Should Contain 10 Numbers.",
                        number: "Enter Numbers Only"
                    },
                    number2: {
                        required: "Please Provide a Valid Mobile Number.",
                        maxlength: "Your Mobile Number Should Not Contain More Than 10 Numbers.",
                        minlength: "Your Mobile Number Should Contain 10 Numbers.",
                        number: "Enter Numbers Only"
                    },
                    selectleader: {
                        required: "Please Select a Group Leader"
                    },
                    email1: "Please Enter a Valid Email Address",
                    email2: "Please Enter a Valid Email Address",
                    email3: "Please Enter a Valid Email Address",
                    email4: "Please Enter a Valid Email Address",
                    email4: "Please Enter a Valid Email Address",
                    email5: "Please Enter a Valid Email Address"
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