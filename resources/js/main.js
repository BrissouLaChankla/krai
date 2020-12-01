$( document ).ready(function() {
    
    window.addEventListener('scroll', function(){
        let value = window.scrollY;
        let paraheight = $('.parallax-brice').css('height').replace('px', '');
        
        $('.clouds').css('top', value/3);
        $('.montains').css('top', value/2);
        $('.parallax-brice .text').css('top', -value/2);
        
        $('.bears').css('background', 'rgb(0,0,0,'+value/1500+')');


         if(value > paraheight){
            jQuery('nav').addClass('scrolled');
        }
        else {
            jQuery('nav').removeClass('scrolled')
        }
    })

   

});



