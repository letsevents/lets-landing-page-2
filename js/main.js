$(function () {
    $('.lazy').Lazy();
    scrollSmooth();
    pinBackground();
});

//http://jquery.eisbehr.de/lazy/

function pinBackground() {
    $(window).scroll(function () {

        var pxScrollado = $(window).scrollTop();
        var inicioFix = 1000;
        var fimFix = 2100;

        console.log("pxScrollado", pxScrollado);

        //After scrolling 100px from the top...
        if (pxScrollado <= inicioFix) {
            $('#venda-mais').css('background-attachment', 'scroll');
            $('#sua-lista').css('background-attachment', 'scroll');
            $('#formidaveis').css('background-attachment', 'scroll');

        } else if ((pxScrollado >= inicioFix) && (pxScrollado <= fimFix)) {
            $('#venda-mais').css('background-attachment', 'fixed');
            $('#sua-lista').css('background-attachment', 'fixed');
            $('#formidaveis').css('background-attachment', 'fixed');

        } else {
            $('#formidaveis').css('background-attachment', 'scroll');
        }

    });
}


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