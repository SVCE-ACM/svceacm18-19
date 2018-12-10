function outroAnimation(nav, body) {
	$('.nav-link').click(function() {
        var link = this.href;
        console.log(link);
        if ($(this).hasClass('active')) {
            return;
        } else {
            event.preventDefault();
            $(nav).addClass('fadeOutUp');
            $(body).addClass('fadeOut');
            setTimeout(function() {
                window.location.href = link;
            }, 500);
        }
    });
}

function makeParallax(windowWidth, padding) {
    if (windowWidth <= 1024) {
        $('.parallax-bg').removeClass('parallax-bg');
        $('.page-content').css({
            'margin-top': '0'
        });
    } else {
        $('.page-head').addClass('parallax-bg');
        $('.page-content').css({
            'margin-top': (($('.test').height() + 60 + padding) + 'px')
        });
    }
}

function switchTabs(tabType) {
    $(".tabs").on("click", "a", function() {
        $('.tabs a').removeClass("active");
        $(this).addClass('active');
        var tab_id = this.href.substring(this.href.indexOf("#") + 1);
        $(tabType).removeClass('active');
        $('#' + tab_id).addClass('active');
        // $(window).scrollTop($('#' + tab_id).offset().top + 60);

        $('html, body').animate({
            scrollTop: $('#' + tab_id).offset().top - 170
        }, 1000);
    });
}