(function() {
    $('#siteNavButton').click(function() {
        $('#siteNavMenu').slideToggle();
        $(this).toggleClass('active');
        $(this).children('i').toggleClass('fa-rotate-180');
    });
})();