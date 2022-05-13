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
