$(function() {
    // Smooth scroll to target

    var smoothScroll = false;

    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        if (target) {
            smoothScroll = true;

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 600, 'swing', function() {
                window.location.hash = target;

                smoothScroll = false;
            });
        }
    });
});
