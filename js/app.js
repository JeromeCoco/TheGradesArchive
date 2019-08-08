( function($) {
    
    var ui = { // Include element related scripts here
        homepage_switch_entry: function() {
            $('.sign-up-link a').click(function(e) {
                e.preventDefault();
                $('.signup-form-wrapper').addClass('show-entry-panel');
                $('.login-form-wrapper').removeClass('show-entry-panel');
            });
        },
        homepage_signup_switch_tab: function() {
            $('.signup-step-user-level-option-item').click(function() {
                var next_step = $(this).data('next-step');
                $('.signup-tab-item.tab-active').removeClass('tab-active');
                $('.signup-tab-item[data-step-id="' + next_step + '"]').addClass('tab-active');
                $('.signup-form-wrapper').addClass(next_step);
            });
        }
    }

    var app = { // Include server request scripts here
        
    }

    $(document).ready(function() {
        // Initialize animation
        new WOW().init();

        // Homepage scripts
        ui.homepage_switch_entry();
        ui.homepage_signup_switch_tab();
    });

    $(window).on('load', function() {

    });
    
    $(window).on('scroll', function() {

	});

})(jQuery);