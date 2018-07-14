jQuery(function($){
    
    var MANGUE = window.LOAD || {};

    var host = window.location.hostname;

    if (host == "joao-da-areia") {
        adm_path = "http://joao-da-areia/"
    } else {
        adm_path = "http://joao-da-areia-adm.siritecnologia.com.br/"
    }
    
    MANGUE.preloader = function(){

        // verificar se vai ter
        
        /*$('.status').fadeOut();
        $('.preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow':'visible'});*/

    }

    MANGUE.scroll = function(){

        var lastId, 
            topMenu = $(".header"),
            topMenuHeight = topMenu.outerHeight()+15,
            menuItems = topMenu.find("a"),
            body = $(".scroll-click"),
            bodyItens = body.find("a"),

            scrollItems = menuItems.map(function(){
                var item = $($(this).attr("href"));
                if (item.length) { return item; }
            });

            bodyItens.click(function(e){
                var href = $(this).attr("href"),
                    offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
                    $('html, body').stop().animate({ 
                        scrollTop: offsetTop
                    }, 300);
                
                e.preventDefault();
            });

        $(window).scroll(function(){

            var fromTop = $(this).scrollTop()+topMenuHeight;
            var cur = scrollItems.map(function(){
                if ($(this).offset().top < fromTop)
                    return this;
            });

            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                menuItems.parent().removeClass("active").end().filter("[href='#"+id+"']").parent().addClass("active");
            }                   
        });

        var nav = $('.app-content header');   
        
        $(window).scroll(function () { 
            if ($(this).scrollTop() > 768) { 
                nav.addClass("header-scroll"); 
            } else { 
                nav.removeClass("header-scroll"); 
            } 
        });  

    }

    MANGUE.fancybox = function(){
        //$(".fancybox").fancybox();
    }

    MANGUE.slick = function(){

        $('.parceiros-slider').slick({
            accessibility: true,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow:3,
            slidesToScroll:3,
                
            responsive: [
                {
                    breakpoint: 1045,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true
                    }
                },
                {
                    breakpoint: 420,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }
            ]
        });

    }

    MANGUE.effects = function(){

    }

    MANGUE.mascaras = function(){

        var FormataNumero = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },

        Options = {
            onKeyPress: function(val, e, field, options) {
                field.mask(FormataNumero.apply({}, arguments), options);
            }
        };

        $('.input-telefone').mask(FormataNumero, Options);

    }

    MANGUE.contato = function(){

        $('.form-contato').validate({

            rules: {
                email: { required: true, email: true },
                nome: { required: true },
                assunto: { required: true},
                mensagem: { required: true }
            },
            messages: {
                email: { required: 'Preencha o campo email', email: 'Insira um email válido' },
                nome: { required: 'Preencha o campo nome' },
                assunto: { required: 'Preencha o campo assunto'},
                mensagem: { required: 'Preencha o campo mensagem'}
            },

            submitHandler: function( form ){

                var dados = $('.form-contato');

                $.ajax({
                    type: "POST",
                    url: adm_path+"json/contato",
                    data: dados.serialize(),

                    beforeSend: function( data ) {

                        $(".form-contato button").text('Enviando...');

                        $(".form-contato button").prop('disable', true);

                    },

                    success: function( data ) {

                        // sucesso 200 trabalhar retorno...

                        if (data == 200) {

                            $('.input').val('');
                            
                            /*$('#modal').modal('show');

                            $('.modal-title').text('Enviado com sucesso');*/

                        } else {
                            // trabalhar erro aqui
                        }


                    },
                    error : function(){
                       // feedback de erro aqui generico
                   },
                   complete: function(){
                    $(".form-contato button").text('Enviar');
                    $(".form-contato button").prop('disable', false);
                },
            });

                return false;
            }

        });

    }


    /* ==================================================
    Init
    ================================================== */

    $(document).ready(function(){

        // quando quiser passar algo onload passa pela main ou outra div

        $('main[onload]').trigger('onload');

        MANGUE.mascaras();
        MANGUE.scroll();
        MANGUE.preloader();
        MANGUE.slick();
        MANGUE.effects();
        MANGUE.contato();

    });    

});

/* externas aqui embaixo */