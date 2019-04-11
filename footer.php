		
	</div><div id="footer">
           <div class="content">
              <div class="colF">  
                <a id="logoF" href="index.html">index</a>
                <ul id="social">
                  <li><a href="https://www.facebook.com/TlacuacheBlue-1510244045892228/" target="_blank"><img src="http://tlacuacheblue.com/images/fb.png"></a></li>
                  <li><a href="https://twitter.com/TlacuacheBlue" target="_blank"><img src="http://tlacuacheblue.com/images/twitter.png"></a></li>
                  <li><a href="https://instagram.com/tlacuacheblue/" target="_blank"><img src="http://tlacuacheblue.com/images/ig.png"></a></li>
                  <li><a href="https://www.linkedin.com/company/tlacuache-blue" target="_blank"><img src="http://tlacuacheblue.com/images/linkedin.png"></a></li>
                </ul>
              </div>
              
              <div class="colF">
                <h4>menú</h4>
                 <ul>
                    <li><a href="http://tlacuacheblue.com/quienes-somos.html">¿Quiénes somos?</a></li>
                    <li><a href="http://tlacuacheblue.com/que-hacemos.html">¿Qué hacemos?</a></li>
                    <li><a href="http://tlacuacheblue.com/urban-energies.html">Urban Energies</a></li>
                    <li><a href="http://tlacuacheblue.com/purple.html">Purple</a></li>
                    <li><a href="http://tlacuacheblue.com/contacto.html">Contacto</a></li>
                    <li><a href="http://tlacuacheblue.com/aviso-de-privacidad.html">Aviso de Privacidad</a></li>
                  </ul>
              </div>    

                <div class="colF">
                 <h4>contacto</h4>
                 <p>Benjamín Franklin 140 Piso 3 <br>
                    Col. Escandón, CP 11800,<br>
                    Del. Miguel Hidalgo, México DF</p>

                <a href="mailto:contacto@tlacuacheblue.com">contacto@tlacuacheblue.com</a>

                <p>+52 (55) 6821 2036</p>
               </div>


               <div class="colF">

                <div id="form-messages"></div>

                <form id="ajax-contact" method="post" action="http://tlacuacheblue.com/form.php">
                    <div class="field">
                        <label for="name">nombre</label>
                        <input type="text" name="nombre" required>
                    </div>

                    <div class="field">
                        <label for="email">correo</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="field">
                        <label for="message">mensaje</label>
                        <textarea name="message" required></textarea>
                      </div>
                    

                        <button type="submit">enviar</button>
                    
                </form>

               </div>


            </div>

          </div>


        


         <script>

if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 
$('.Stres').remove()
  $('#main-menu').after('<div id="menuMobile" class="inactive"><span></span></div>')

  $('#main-menu li:nth-of-type(5)').after('<li id="data"> <a href="aviso-de-privacidad.html">AVISO DE PRIVACIDAD</a> <br><a>+52 (55) 6821 2036</a></div>')

        
 
 
}




    $(function() {

   
         $('#main-menu').after('<div id="menuMobile" class="inactive"><span></span></div>')


     
    });
$(window).load(function() {


   jQuery.fn.mover = function () {
    $(this).animate({
        marginLeft: 130},400)
  }

  jQuery.fn.regresar = function () {
    $(this).animate({
        marginLeft: 0},400)
  }



  $('#menuMobile ').click(function(){

   
    if ($(this).hasClass('inactive')){
        $(this).addClass('active');
        $(this).removeClass('inactive');
        $('#logo').mover()
        $(this).mover()
        $('#main-menu').animate({
        marginLeft: 0},400)
    } else {
        $(this).addClass('inactive');
        $(this).removeClass('active');
        $('#logo').regresar()
        $(this).regresar()
        $('#main-menu').animate({
        marginLeft: -130},400)
    }

   });

  

    var menu = $('#slider-container')


    pos = menu.offset();




});
  </script>
	


</body>

</html>
