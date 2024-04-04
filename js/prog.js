$(document).ready(function()
{

$('.artlistado').hover(function()
{
    $(this).children('.imagenesaire').css({'transform': 'scale(1.2)','transition':'4s'})
},
function()
{

    $(this).children('.imagenesaire').css({'transform': 'scale(1)','transition':'4s'})

})

$('.artlistado2').hover(function()
{
    $(this).children('.imagenes3juntas').css({'transform': 'scale(1.2)','transition':'2s'})
},
function()
{

    $(this).children('.imagenes3juntas').css({'transform': 'scale(1)','transition':'2s'})

})

/* ---MOSTRAR TITULOS FOTOS MUSEOS--- */

/* $('.gallery_img').hover(function()
{
$(this).siblings('.gallery_container').css({'opacity':1,'transition':'1s'})
},
function()
{
    $(this).children('.gallery_container').css({'opacity':0,'transition':'1s'})
}) */




$('.icon-keyboard_arrow_up').click(function()
    {
        $('html').animate({'scrollTop':'0px'},1000)
    })

    $('.icon-keyboard_arrow_up').hide()

    $(window).scroll(function()
    {

        if($('html').scrollTop()>300)
        {
           $('.icon-keyboard_arrow_up').fadeIn(1000)     
        }
        else
        {
            $('.icon-keyboard_arrow_up').fadeOut(1000) 
        }

    })

    var desplegado=0

    

    $('.icon-menu').click(function()
    {

        
       
        $('.navsumario').animate({'top':'100px'},800)

        /* $('.separadorhn').fadeIn(3000) */

        /* $('body').animate({'padding-top':'168px'},800)
 */
        $('.icon-menu').hide()

        $('.icon-cancel').show()

        desplegado = 1
        
    })

    $('.icon-cancel').click(function()
    {
       

        $('nav>ul').animate({'top':'-110px'},800)

        /* $('.separadorhn').fadeOut() */

        /* $('body').animate({'padding-top':'28px'},800) */

        $('.icon-cancel').hide()

        $('.icon-menu').show()

        desplegado = 0
       


    })

    $(window).resize(function()
{
        
    if(window.matchMedia('(min-width:768px)').matches)
   {

            $('nav>ul').css({'top':'0'})
            /* $('.separadorhn').css({'display':'none'}) */
           /*  $('body').css({'padding-top':'168px'}) */
            $('.icon-menu').hide()
            $('.icon-cancel').hide()

   }
   else
   {

       
// A LA VUELTA SE TIENE QUE QUEDAR COMO LO DEJE
                if( desplegado == 1) 
                {
                    $('.navsumario').css({'top':'100px'})

                    /* $('.separadorhn').css({'display':'flex'}) */

                   /*  $('body').css({'padding-top':'168px'}) */

                    $('.icon-menu').hide()

                    $('.icon-cancel').show()


                }
                else
                {
                    $('nav>ul').css({'top':'-220px'})

                    /* $('.separadorhn').css({'display':'none'}) */

                    /* $('body').css({'padding-top':'28px'}) */

                    $('.icon-cancel').hide()

                    $('.icon-menu').show()

                }
   } 
})//final
})
