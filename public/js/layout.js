var id =  "" ;   
$('#menu-header ul li').mousemove(function () {     
    id  = $(this).attr('data-id');
    if( id != ""){
        $('#content-hover-menutop').css({
            'display' : 'unset'
        });
        $('#content-hover-menutop .content[data-id="'+ id +'"]').css({
            'display': 'flex', 
        })
    }
    
});
$('#content-hover-menutop').mousemove(function (e) { 
    $('#content-hover-menutop').css({
        'display' : 'unset'
    });
    $('#content-hover-menutop .content[data-id="'+ id +'"]').css({
        'display': 'flex', 
    })
});
$('#content-hover-menutop , #menu-header ul li').mouseleave(function () { 
    $('#content-hover-menutop ,  #content-hover-menutop .content').css({
        'display' : 'none'
    });
});
function showMain(){       
    setTimeout(() => {
        $('#header').css({
            'position' : 'fixed'
        });
    }, 490);
    $('#main').css({
        'transform' : 'unset'
    });
}
function hideMain(){
    $('#main').css({
        'transform' : 'scale(0.9)'
    });
    $('#header').css({
        'position' : 'relative'
    });
}
function showMenuMobileLeft(){
    $('.mobile-menu-left').css({
        'animation' : 'moveLeft .5s ease-out 1' , 
        'display' : 'block'
    });   
}
function closeMenuMobileLeft(){
    $('.mobile-menu-left').css({
        'animation' : 'moveLeftClose .5s ease-out 1' 
    });
    setTimeout(() => {
        $('.mobile-menu-left').css({
            'display' : 'none'
        });
    }, 490);
}
function showMenuMobileRight(){
    $('.mobile-menu-right').css({
        'animation' : 'moveRight .5s ease-out 1' , 
        'display' : 'block'
    });  
    $('.mobile-menu-right input').css({
        'width' : '80%'
    });
}
function closeMenuMobileRight(){
    $('.mobile-menu-right').css({
        'animation' : 'moveRightClose .5s ease-out 1' 
    });
    setTimeout(() => {
        $('.mobile-menu-right').css({
            'display' : 'none'
        });
        $('.mobile-menu-right input').css({
            'width' : '0'
        });
    }, 490);
}
$('#btn-top-mobile').click(function (e) { 
    showMenuMobileLeft();  
    hideMain();  
});
$('.mobile-menu-left button').click(function (e) { 
    showMain();  
    closeMenuMobileLeft();     
});
$('#btn-search-top').click(function (e) { 
    showMenuMobileRight();  
    hideMain(); 
});
$('.mobile-menu-right button').click(function (e) { 
    closeMenuMobileRight(); 
    showMain(); 
}); 
$(window).scroll(function () { 
    if($(this).scrollTop() > 0 ){
        $('#header').css({
            'position' : 'fixed' , 
            'top' : '0',
        });          
        $('#header-top').hide(300);
        $('#menu-header > div.logo-small').show(500);
    }else{
        $('#header').css({
            'position' : 'relative' , 
            'top' : '0',
        }); 
        if($('body').width() > 768){
            $('#header-top').show(300);
            $('#menu-header > div.logo-small').hide(300);
        }
        
    }
});

$('.table-content li').click(function(){
    $('.table-content li').removeClass('active');
    $(this).addClass('active');
})
