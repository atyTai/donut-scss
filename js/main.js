$(function () {


    // ナビゲーションボタンの開扉
    $('.menu-bottun').on('click', function () {
        // フェードイン or フェードアウトする
        if (!$('.menu-bottun').hasClass('open')) {
            $('.menu-bottun').addClass('open');
            $('.menu-bottun i').removeClass('fa-bars');
            $('.menu-bottun i').addClass('fa-xmark');
            $('.global-nav').slideDown();

        } else {
            $('.menu-bottun').removeClass('open');
            $('.menu-bottun i').removeClass('fa-xmark');
            $('.menu-bottun i').addClass('fa-bars');
            $('.global-nav').slideUp();

        }

        return false
    });



    // スクロールボタン

    $('a[href="#"]').click(function () {


        $('html, body').animate({
            'scrollTop': 0
        }, 500, 'swing');

        return false;
    });



    // 100pxを境にTOPに戻るボタンの表示・非表示を切り替える  
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.bottun-saport').fadeIn();
        } else {
            $('.bottun-saport').fadeOut();
        }




    });




});