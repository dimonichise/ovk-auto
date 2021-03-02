$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                data: {
                    required: true,
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "У тебя же есть имя? Ну тогда не стесняйся и напиши его",
                    minlength: "Имя должно состоять минимум из 2 букв"
                },
                subject: {
                    required: "Ну на пиши пожалуйста тему. Нам будет легче ответить",
                    minlength: "Давай напишим хотя бы 4 буквы"
                },    
                number: {
                    required: "Написав телефон ты поможешь быстрее решить проблему",
                    minlength: "Номер телефона можно уместить минимум в 10 цифр"
                },
                email: {
                    required: "E-mail нужен полюбому)))"
                },
                data: {
                    required: "Для записи надо выбрать дату"
                },
                time: {
                    required: "Для записи надо выбрать время"
                },
                message: {
                    required: "Как решить вопрос если его нет? Напишите хоть что-то пожалуйста",
                    minlength: "И это всё? Ты серьёзно?"
                }
            },
			submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').val('');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').val('');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})