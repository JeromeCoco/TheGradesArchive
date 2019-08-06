( function($) {
    
    var ui = { // Include element related scripts here
        homepage_switch_entry: function() {
            $('.sign-up-link a').click(function(e) {
                e.preventDefault();
                $('.signup-form-wrapper').addClass('show-entry-panel');
                $('.login-form-wrapper').removeClass('show-entry-panel');
            });
        }
    }

    var app = { // Include server request scripts here
        
    }

    $(document).ready(function() {
        new WOW().init(); // Initialize animation
        ui.homepage_switch_entry();
    });

    $(window).on('load', function() {

    });
    
    $(window).on('scroll', function() {

	});

})(jQuery);