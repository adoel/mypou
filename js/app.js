(function($, moment) {
    "use strict";

    var now = moment();

    $.fn.getHeightInPercent = function () {
        var height = parseFloat($(this).css('height'))/parseFloat($(this).parent().css('height'));
        return Math.round(100*height);
    };

    $.fn.getWidthInPercent = function () {
        var width = parseFloat($(this).css('width'))/parseFloat($(this).parent().css('width'));
        return Math.round(100*width);
    };

    // MAKAN
    $(document).on('click', 'footer div.food img', function(event) {
        var currentHeight = $('li span.food').getHeightInPercent(),
            target = currentHeight + 20;

        if (target > 10) { $('body').removeClass('hungry'); }
        if (target > 100) { target = 100; }

        $('li span.food').css('height', target.toString() + '%' );
    });

    // TIDUR
    $(document).on('click', 'div.lamp img', function(event) {
        $('body').toggleClass('sleeping');
    });

    setInterval(function() {
        now.add('hours', 0.5);

        // Pagi - Siang - Sore - Malem
        if (now.format('H') > 0 && now.format('H') <= 6) {
            $('body').attr('langit', 'pagi');
        } else if(now.format('H') > 6 && now.format('H') <= 12) {
            $('body').attr('langit', 'siang');
        } else if(now.format('H') > 12 && now.format('H') <= 18) {
            $('body').attr('langit', 'sore');
        } else if(now.format('H') > 18 && now.format('H') <= 24) {
            $('body').attr('langit', 'malem');
        }

        // Laper kagak
        // var foodCurrentHeight = $('li span.food').getHeightInPercent(),
        //     foodTarget = foodCurrentHeight - 10;

        // if (foodTarget <= 10 ||  foodCurrentHeight < 10) { $('body').addClass('hungry'); }
        // if (foodTarget < 0) { foodTarget = 0; }

        // $('li span.food').css('height', foodTarget.toString() + '%' );

        // Energy
        // var isSleeping = $('body').hasClass('sleeping'),
        //     energyCurrentHeight = $('li span.energy').getHeightInPercent(),
        //     energyTarget = (! isSleeping) ? energyCurrentHeight - 10 : energyCurrentHeight + 10;

        // if (energyTarget <= 10 || energyCurrentHeight < 10) { $('body').addClass('sleepy'); }
        // if (energyCurrentHeight > 10) { $('body').removeClass('sleepy'); }
        // if (energyTarget < 0) { energyTarget = 0; }
        // if (energyTarget > 100) { energyTarget = 100; }

        // $('li span.energy').css('height', energyTarget.toString() + '%' );

    }, (1000));
})(window.$, window.moment);
