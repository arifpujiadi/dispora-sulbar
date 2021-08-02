<script src="../js/jquery-2.1.4.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.offcanvas.js"></script>
<script src="../js/download/jquery.bootstrap-autohidingnavbar.js"></script>
<script src="../js/material.js"></script>
<script src="../js/ripples.js"></script>
<script src="../js/download/nprogress.js"></script>
<script src="../js/download/bootstrap-progressbar.js"></script>
<script>
    $(document).ready(function () {

        $("div.navbar-static").autoHidingNavbar();

        $('#nav').affix({
            offset: {
                top: $('#header-top').height()
            }
        });

        $('#sidebar').affix({
            offset: {
                top: 1000
            }
        });

        $('.a-login').on("click", function () {
            $('.login-popup').fadeToggle(300);
        });

        $(".body-offcanvas").mouseup(function (e)
        {
            var subject = $(".login-popup");

            if (e.target.id != subject.attr('class') && !subject.has(e.target).length)
            {
                subject.fadeOut();
            }
        });
        
        $('.a-search').on("click", function () {
            $('.search-popup').fadeToggle(300);
        });

        $(".body-offcanvas").mouseup(function (e)
        {
            var subject = $(".search-popup");

            if (e.target.id != subject.attr('class') && !subject.has(e.target).length)
            {
                subject.fadeOut();
            }
        });


        /*---------- Material js ----------*/
        $.material.init();

        $('input,textarea').focus(function () {
            $(this).data('placeholder', $(this).attr('placeholder'))
                    .attr('placeholder', '');
        }).blur(function () {
            $(this).attr('placeholder', $(this).data('placeholder'));
        });


        $(".navbar-edit a").on("click", function () {
            $(".navbar-edit").find(".active").removeClass("active");
            $(this).parent().addClass("active");
        });

        $('.btn-filter').on("click", function () {
            $('.share-popup').fadeToggle(300);
        });

        var $unique = $('input.unique');
        $unique.click(function () {
            $unique.filter(':checked').not(this).removeAttr('checked');
        });



        $('.checkbox1').change(function () {
            if (this.checked)
                $('.show-checkbox1').fadeIn(300);
            else
                $('.show-checkbox1').hide();

        });

        $('.checkbox1').change(function () {
            if (this.checked)
                $('.show-checkbox2').hide();
            else
                $('.show-checkbox1').hide();

        });

        $('.checkbox2').change(function () {
            if (this.checked)
                $('.show-checkbox2').fadeIn(300);
            else
                $('.show-checkbox2').hide();

        });

        $('.checkbox2').change(function () {
            if (this.checked)
                $('.show-checkbox1').hide();
            else
                $('.show-checkbox2').hide();

        });

    });

    if (typeof NProgress != 'undefined') {
        $(document).ready(function () {
            NProgress.start();
        });

        $(window).load(function () {
            NProgress.done();
        });
    }
</script>
<script>
    $(document).ready(function () {

        $('.box-lupaPassword').find('a').on('click', function (e) {
            $(this).parents('.boxOut-user').find('.box-username').hide(20);
            $(this).parents('.boxOut-user').find('.box-lupaPassword').hide();
            $(this).parents('.boxOut-user').find('.box-buttonLogin').hide();
            $(this).parents('.boxOut-user').find('.box-email').show(20);
            $(this).parents('.boxOut-user').find('.box-login').show();
            $(this).parents('.boxOut-user').find('.box-buttonReset').show();
        });

        $('.box-login').find('a').on('click', function (e) {
            $(this).parents('.boxOut-user').find('.box-username').show(20);
            $(this).parents('.boxOut-user').find('.box-lupaPassword').show();
            $(this).parents('.boxOut-user').find('.box-buttonLogin').show();
            $(this).parents('.boxOut-user').find('.box-email').hide(20);
            $(this).parents('.boxOut-user').find('.box-login').hide();
            $(this).parents('.boxOut-user').find('.box-buttonReset').hide();
        });

        $(document).on('click', '.yamm .dropdown-menu', function (e) {
            e.stopPropagation()
        });


    });
</script>