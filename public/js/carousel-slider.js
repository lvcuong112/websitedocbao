
function carouselSlider(){
    const srcFirst = $('.carousel-slider a:last-child img').attr('src'); 
    const scrLast =  $('.carousel-container a:first-child img').attr('src'); 
    const imgLast =  `<a href="#">
                        <img src="${scrLast}" alt="" id="firstImg">
                    </a>` ;  
    const imgFirst =    `<a href="#">
                        <img src="${srcFirst}" alt="" id="lastImg">
                        </a>` ;  
    const width = $('.carousel-container').width();  
    const height = width / 3 - 20 ;   
    $('.carousel-slider').css({
        'height' : height + 'px'
    });
    var counter = 2 ;    
    var carouselStatus =  true ;  
    $('.carousel-slider').prepend(imgFirst);
    $('.carousel-slider').append(imgLast);
    $('.carousel-container img').width(width);
    $('.carousel-slider').css({
        'transform' : 'translateX(' + ( -width * counter + width ) +  'px)' ,  
    })
    $('.btn-carousel-prew').click( () => {
        if( counter > 1 ){
            counter--;
        }else{
            counter = 1 ;  
        }
        $('.carousel-slider').css({
            'transition' : 'transform .7s ease-out', 
            'transform' : 'translateX(' + ( -width * counter + width ) +  'px)' ,  
        });  
        carouselStatus = false  ; 
    });  
    $('.btn-carousel-next').click( () => {
        if( counter < $('.carousel-slider a').length ){
            counter++ ;  
        }else{
            counter = $('.carousel-slider a').length; 
        }
        
        $('.carousel-slider').css({
            'transition' : 'transform .7s ease-out', 
            'transform' : 'translateX(' + ( -width * counter + width) +  'px)' ,  
        });  
        $(this).css({
            'pointer-events' : 'none'
        })
        carouselStatus = true ;  
    });  
    $('.carousel-slider').on('transitionend webkitTransitionEnd oTransitionEnd' , () => {
        if( $('.carousel-slider a:nth-child(' + counter +  ') img').attr('id') === 'lastImg'){
            counter =  $('.carousel-slider a').length - 1 ;  
            $('.carousel-slider').css({
                'transition' : 'none', 
                'transform' : 'translateX(' + ( -width * counter + width ) +  'px)' ,  
            });  
        }  
        if( $('.carousel-slider a:nth-child(' + counter +  ') img').attr('id') === 'firstImg'){
            counter =  2 ;  
            $('.carousel-slider').css({
                'transition' : 'none', 
                'transform' : 'translateX(' + ( -width * counter + width ) +  'px)' ,  
            });  
        }
        
    }); 
    setInterval( function (){
        if( carouselStatus ){
            if( counter < $('.carousel-slider a').length ){
                counter++ ;  
            }else{
                counter = $('.carousel-slider a').length; 
            }
            
            $('.carousel-slider').css({
                'transition' : 'transform .7s ease-out', 
                'transform' : 'translateX(' + ( -width * counter + width) +  'px)' ,  
            });  
            $(this).css({
                'pointer-events' : 'none'
            })
        }else{
            if( counter > 1 ){
                counter--;
            }else{
                counter = 1 ;  
            }
            $('.carousel-slider').css({
                'transition' : 'transform .7s ease-out', 
                'transform' : 'translateX(' + ( -width * counter + width ) +  'px)' ,  
            });  
        }
        
    }, 4000);  
}
carouselSlider();