$(document).ready(function(){
    setTimeout(function(){
        $('#overlay').fadeOut();
    },1000)
    $('#Locktain').hide();
    $( "#draggable" ).draggable();
    $( "#dragclock" ).draggable();
    $( "#dragTer" ).draggable();
    $( "#dragFileM" ).draggable();
    $('#dragProfile').draggable();
    $('.crdbout').fadeOut();
    $('.crdFile').fadeOut();
    $('.crdclock').fadeOut();
    $('.crdTer').fadeOut();
    $('.crdProfile').fadeOut();

    $('.about').on('click',function(){
        $('.crdbout').show(1000);

        $('.crdbout').on('click',function(){
            $(this).css('z-index', 2);
            $('.crdclock').css('z-index', 1);
            $('.crdTer').css('z-index', 1);
            $('.crdFile').css('z-index', 1);
            $('.crdProfile').css('z-index', 1);
        });
    })
    $('.btnX').on('click',function(){
        $('.crdbout').fadeOut(1000);
    })

    $('.clock').on('click',function(){
        $('.crdclock').show(1000);

        $('.crdclock').on('click',function(){
            $(this).css('z-index', 2);
            $('.crdbout').css('z-index', 1);
            $('.crdTer').css('z-index', 1);
            $('.crdFile').css('z-index', 1);
            $('.crdProfile').css('z-index', 1);
        });
    })
    $('.btnC').on('click',function(){
        $('.crdclock').fadeOut(1000);
    })

    $('.Terminal').on('click',function(){
        $('.crdTer').show(1000);
        $('.crdTer').on('click',function(){
            $(this).css('z-index', 2);
            $('.crdbout').css('z-index', 1);
            $('.crdclock').css('z-index', 1);
            $('.crdFile').css('z-index', 1);
            $('.crdProfile').css('z-index', 1);
        });
    })
    $('.btnT').on('click',function(){
        $('.crdTer').fadeOut(1000);
    })

    $('.Folder').on('click',function(){
        $('.crdFile').show(1000);
        $('.crdFile').on('click',function(){
            $(this).css('z-index', 2);
            $('.crdbout').css('z-index', 1);
            $('.crdclock').css('z-index', 1);
            $('.crdProfile').css('z-index', 1);
        });
    })
    $('.btnFM').on('click',function(){
        $('.crdFile').fadeOut(1000);
    })

    $('.profile-btn').on('click',function(){
        $('.crdProfile').show(1000);
        $('.crdProfile').on('click',function(){
            $(this).css('z-index', 2);
            $('.crdbout').css('z-index', 1);
            $('.crdclock').css('z-index', 1);
            $('.crdFile').css('z-index', 1);
        });
    })
    $('.btnPr').on('click',function(){
        $('.crdProfile').fadeOut(1000);
    })


    $('.Locklogo').on('click',function(){
        $('#Locktain').slideUp(1000);
    })
    $('.lock-screen').on('click',function(){
        $('#Locktain').slideDown(1000);

        $(document).keydown(function(evt){
            if (evt.keyCode == 32) {
                $('#Locktain').slideUp(1000);
            }
        })
    })
    $('#jqV').text('Jquery Version: '+$().jquery);
    $('#jquV').text('Jquery UI Version: '+$.ui.version);
})