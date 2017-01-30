(function(){

	function init(){
		var $window = $(window),
			$siteHeader = $('.navbar'),
            $body = $('body');

        $window.on('scroll', function() {
            var scrollTop = $window.scrollTop(),
                triggerPoint = 80;

            if (scrollTop > triggerPoint && !$siteHeader.hasClass('sticky')) {
                $siteHeader.addClass('sticky');
            } else if (scrollTop <= triggerPoint && $siteHeader.hasClass('sticky')) {
                $siteHeader.removeClass('sticky');
            }
        });
	}

    function video() {
        $('.video-background').videobackground({
            videoSource: ['video/vaivaler-apenapb.mp4', 'video/mp4'],
            loop: true,
            loadedCallback: function() {
                $(this).videobackground('mute');
            }
        });
    }

	init();
    video();

}());