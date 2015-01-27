$("input,textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // something to have when submit produces an error ?
        // Not decided if I need it yet
    },
    submitSuccess: function($form, event) {
        alert('Datos correctos')
        event.preventDefault();
    },
    filter: function() {
        return $(this).is(":visible");
    },
});

$('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
});