var image=document.getElementById('image');
var user=document.getElementById('input-user');
var password=document.getElementById('input-password');
var body = document.querySelector('body');
var anchoMitad = window.innerWidth/2;
var altoMitad = window.innerHeight/2;
let seguirPunteroMouse=true;

body.addEventListener('mousemove', (m) => {
    if(seguirPunteroMouse){
    if(m.clientX < anchoMitad && m.clientY < altoMitad){
        image.src = "img/movimiento/color4.png";
    }else if(m.clientX < anchoMitad && m.clientY > altoMitad){
        image.src = "img/movimiento/color5.png";
    }else if(m.clientX > anchoMitad && m.clientY < altoMitad){
        image.src = "img/movimiento/color3.png";
    }else{
        image.src = "img/movimiento/color2.png";
    }
}
})

user.addEventListener('focus',()=> {
    seguirPunteroMouse=false;
})

user.addEventListener('blur',()=> {
    seguirPunteroMouse=true;
})

user.addEventListener('keyup',()=> {
    seguirPunteroMouse=false;
    let User = user.value.length;
    if(User >= 0 && User<=7){
        image.src = 'img/movimiento/color5.png';
    }else if(User >= 8 && User<=20){
        image.src = 'img/movimiento/color6.png';
    }else if(User >=20 && User<=30){
        image.src = 'img/movimiento/color7.png';
    }else{
        image.src = 'img/movimiento/color2.png';
    }
})

password.addEventListener('focus',()=> {
    seguirPunteroMouse=false;
    let cont = 1;
    var cubrirOjo=setInterval(()=>{
        image.src ='img/pass/'+cont+'.png';
        if(cont < 8){
            cont++;
        }else{
            clearInterval(cubrirOjo);
        }
    },100);
})

password.addEventListener('blur',()=> {
    seguirPunteroMouse=false;
    let cont = 8;
    var descubrirOjo=setInterval(()=>{
        image.src ='img/pass/'+cont+'.png';
        if(cont > 1){
            cont--;
        }else{
            seguirPunteroMouse=true;
            clearInterval(descubrirOjo);
        }
    },100);
})

