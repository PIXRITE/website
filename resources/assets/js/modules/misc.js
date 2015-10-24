/*
 * Sliding Form Labels
 */
(function() {
    var inputs = $('.form--input, .form--textarea');
    var labels = $('.form--label');
    
    // Clear Placeholders and unhide Labels
    inputs.attr('placeholder', '');
    labels.show();
    inputs.each(function() {
        if( $(this).val() != '' ){
            $(this).parent().children().addClass('focused');
        }
    });
    
    // Remove text for first select option
    $('select').each(function() {
        $(this).children().first().text('');
    });
    
    // Add focused class when input focused
    inputs.focusin(function() {
        $(this).parent().children().addClass('focused');
    });
    
    // Remove focused class when input unfocused and empty
    inputs.focusout(function() {
        if( $(this).val() == '' ){
            $(this).parent().children().removeClass('focused');
        }
    });
})();