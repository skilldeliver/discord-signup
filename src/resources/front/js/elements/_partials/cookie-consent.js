$(function() {
    // Cookie consent block

    let siteCookie = Cookies.get('discord_signup_cookies');

    if (siteCookie != 1) {
        setTimeout(function() {
            $('.cookie-consent').addClass('show');
        }, 800);

        $('#cookie-hide').click(function(e) {
            $('.cookie-consent').removeClass('show');
        });

        $('#cookie-agree').click(function(e) {
            Cookies.set('discord_signup_cookies', 1, {
                expires: 90,
                path: '/'
            });

            $('.cookie-consent').removeClass('show');

            setTimeout(function() {
                $('.cookie-consent').remove();
            }, 300);
        });
    } else {
        $('.cookie-consent').remove();
    }
});
