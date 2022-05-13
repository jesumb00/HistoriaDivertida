$(document).ready(function(){

    $("#open").click(function(){
        debugger;
        setTimeout(function(){ 
            for (let i = -100; i <= 0; i++) {
                debugger;
                $(".full-menu").css({'left':''+i+''});
            } 
        }, 100); 
       
    });

    $("#close").click(function(){
        debugger;
        $(".full-menu").css({'left':''});
        setTimeout(function(){ 
            debugger;
            for (let i = 0; i <= -100; i--) {
                debugger;
                $(".full-menu").css({'left':''+i+''});
            } 
        }, 100); 
       
    });
})




document.addEventListener('DOMContentLoaded',()=>{
    const elementCarousel=document.querySelectorAll('.carousel');
    M.Carousel.init(elementCarousel, {
        duration: 150,
        dist: -80,
        shift: 5, padding: 5,
        numVisible: 3,
        indicators: true,
        noWrap:true

        
    });
} );

