/*
    Raymond
    The namespace
 */
var indobalon = {};

$(document).ready(function(){

    // Owl Carousel 1
    if ( $('#owl-carousel-1').length ) {
        $("#owl-carousel-1").owlCarousel({

        });
    }

    if ( $('#owl-carousel-2').length ) {
        $("#owl-carousel-2").owlCarousel({});
    }
    if ( $('#owl-carousel-3').length ) {
        $('#owl-carousel-3').owlCarousel({});
    }
    if ( $('#owl-carousel43').length ) {
        $('#owl-carousel-4').owlCarousel({});
    }
    if ( $('#owl-carousel-5').length ) {
        $('#owl-carousel-5').owlCarousel({});
    }

    // Client validation for the form
    if( $('#contactForm').length ){

        $('#contactForm').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    message: 'The name is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The name is required and cannot be empty'
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: 'The name must be more than 3 and less than 30 characters long'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and cannot be empty'
                        },
                        emailAddress: {
                            message: 'The email address is not valid'
                        }
                    }
                },
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'The phone number is required and cannot be empty'
                        },
                        stringLength: {
                            min: 3,
                            message: 'The phone number must be more than 3 characters long'
                        },
                        numeric: {
                            message: 'The phone number must be numeric only'
                        }
                    }
                },
                comment: {
                    validators: {
                        notEmpty: {
                            message: 'The comment is required'
                        },
                        stringLength: {
                            min: 3,
                            message: 'The name must be more than 3 characters long'
                        }
                    }
                }
            }
        })

    }



});