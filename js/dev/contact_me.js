define(['bootstrapValidation'], function(jqBootstrapValidation) {
    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form) {
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
});