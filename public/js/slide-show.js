function sildeShow(){
    let counter =  1 ;  
    let numberItem = $('#banner-top a').length;
    Hide(); 
    Show(counter);  

    setInterval(() => {
        if( counter == numberItem ){
            Hide();  
            Show(counter);  
            counter = 1 ; 
        }else{
            Hide(); 
            Show( counter);  
            counter++ ; 
        }
    }, 2000);  
}
function Show( n){
    $('#banner-top a:nth-child(' + n + ')').show();
    console.log(n);  
}
function Hide(){
    $('#banner-top a').hide();
}
sildeShow();  