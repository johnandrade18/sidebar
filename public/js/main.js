$(document).ready(function(){
    $('.menu li:has(ul)').click(function(e){
        e.preventDefault();

        if ($(this).hasClass('activado')){
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }else{
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        }
    });
});

var $boton = document.getElementById('sidebarCollapse');
var $sidebar = document.getElementById('sidebar');
    function toggleMenu(){
    $sidebar.classList.toggle('active');
    };

  function abrirCerrar(){
      if($sidebar){
        console.log('se cumplio')
        $boton.addEventListener('click',toggleMenu);

      }else{
        $boton.removeEventListener('click',toggleMenu);
        console.log('no')
      }
    }
  abrirCerrar();



    // $(document).ready(function(){
    //     $('#sidebarCollapse').on('click',function(){
    //         $('#sidebar').toggleClass('active');
    //     });
    // }); 

var $icono = document.getElementById('icon');
var $menu = document.getElementById('menu-link');

function iconoArriba(){
    $icono.classList.toggle('fa-chevron-up')
};
function iconoAbajo(){
    $icono.classList.toggle('fa-chevron-down')
};

function cambia(){
    if($icono){
        $menu.removeEventListener('click',iconoAbajo)
        $menu.addEventListener('click',iconoArriba)
      } else {
        $menu.removeEventListener('click',iconoAbajo)
        $menu.addEventListener('click',iconoArriba)
      }
}
cambia();  




    // $(document).ready(function(){
    //     $(".dropdown").hover(            
    //         function() {
    //             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("1000");
    //             $(this).toggleClass('open');        
    //         },
    //         function() {
    //             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("1000");
    //             $(this).toggleClass('open');       
    //         }
    //     );
    // });

    // function startTime() {
    //     var today = new Date();
    //     var hr = today.getHours();
    //     var min = today.getMinutes();
    //     var sec = today.getSeconds();
    //     //Add a zero in front of numbers<10
    //     min = checkTime(min);
    //     sec = checkTime(sec);
    //     document.getElementById("clock").innerHTML = hr + " : " + min + " : " + sec;
    //     var time = setTimeout(function(){ startTime() }, 500);
    // }
    // function checkTime(i) {
    //     if (i < 10) {
    //         i = "0" + i;
    //     }
    //     return i;
    // }


/*Reloj*/

$(function(){
    var actualizarHora = function(){
      var fecha = new Date(),
          hora = fecha.getHours(),
          minutos = fecha.getMinutes(),
          segundos = fecha.getSeconds(),
          diaSemana = fecha.getDay(),
          dia = fecha.getDate(),
          mes = fecha.getMonth(),
          anio = fecha.getFullYear(),
          ampm;
      
      var $pHoras = $("#horas"),
          $pSegundos = $("#segundos"),
          $pMinutos = $("#minutos"),
          $pDiaSemana = $("#diaSemana"),
          $pDia = $("#dia"),
          $pMes = $("#mes"),
          $pAnio = $("#anio");
      var semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
      var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
      
      $pDiaSemana.text(semana[diaSemana]);
      $pDia.text(dia);
      $pMes.text(meses[mes]);
      $pAnio.text(anio);
      
      if(hora<10){$pHoras.text("0"+hora)}else{$pHoras.text(hora)};
      if(minutos<10){$pMinutos.text("0"+minutos)}else{$pMinutos.text(minutos)};
      if(segundos<10){$pSegundos.text("0"+segundos)}else{$pSegundos.text(segundos)};
    };
    
    
    actualizarHora();
    var intervalo = setInterval(actualizarHora,1000);
  });
