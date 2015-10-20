/*
 * Sliding Form Labels
 */
(function() {
    var inputs = $('.hire_form--input, .hire_form--textarea');
    var labels = $('.hire_form--label');
    
    // Clear Placeholders and unhide Labels
    inputs.attr('placeholder', '');
    labels.show();
    
    // Remove text for first select option
    $('select').each(function() {
        $(this).children().first().text('');
    });
    
    // Add focused class when input focused
    inputs.focusin(function() {
        $(this).parent().children().addClass('focused');
    });
    
    // Add placeholder class when input unfocused and empty
    inputs.focusout(function() {
        if( $(this).val() == '' ){
            $(this).parent().children().removeClass('focused');
        }
    });
})();