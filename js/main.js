$.extend($.lazyLoadXT, { edgeY:  400 });

$(function () {
    scrollSmooth();
    handleFixedCTAPosition();

    // Manually fix issue with lazy loading images on the carousel
    $('.carousel').on('slide.bs.carousel', function(evt) {
        var $displayedSlide = $(evt.relatedTarget);

        var $stillNotLoaded = $displayedSlide.find('[data-bg]');
        $stillNotLoaded.css('background-image', 'url(' + $stillNotLoaded.data('bg') + ')');
        $stillNotLoaded.removeData('bg');
    })

    var areas = $("#areas-atuacao").html();
    changeWords(window.listaPalavras, 2500);

    $("#myModal").on('hidden.bs.modal', function (e) {
        $("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));
    });
});

function changeWords(wordsArray, intervalo) {
    var $areas = $("#areas-atuacao").text(wordsArray[0]);
    var count = 1;

    setInterval(function () {
        count++;

        $areas.removeClass('flipInX')
        $areas.addClass('flipOutX')

        setTimeout(function() {
          $areas.removeClass('flipOutX')
          $areas.text(wordsArray[count % wordsArray.length] + ".")
          $areas.addClass('flipInX')
        }, 250);

    }, intervalo);
}

function handleFixedCTAPosition() {
    var SCROLL_THRESHOLD = 1/5;
    var lastStateWasVisible = false;
    var $cta = $("#cta-fixo");

    var scroll = window.requestAnimationFrame ||
                 window.webkitRequestAnimationFrame ||
                 window.mozRequestAnimationFrame ||
                 window.msRequestAnimationFrame ||
                 window.oRequestAnimationFrame ||
                 // IE Fallback
                 function(callback){ window.setTimeout(callback, 1000/60) };

    function loop() {
        var top = window.pageYOffset;
        var shouldBeVisible = top > (window.innerHeight * SCROLL_THRESHOLD);

        if (shouldBeVisible != lastStateWasVisible) {
            $cta.toggleClass('cta-fixo-hidden', !shouldBeVisible);
            lastStateWasVisible = shouldBeVisible;
        }

        scroll(loop)
    }

    loop();
}

function scrollSmooth() {
    // Select all links with hashes
    $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                        ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            }
                            ;
                        });
                    }
                }
            });
}