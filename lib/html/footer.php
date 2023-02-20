<script src="<?php echo DIRPAGE.'lib/js/javascript.js'; ?>"></script>



<!-- RODAPÉ -->

    <section>
    <footer class="page-footer blue-grey lighten-1 hide-on-med-and-down">
          <div class="container">
            <div class="row">

              <div class="col s6 container">
                <h5 class="white-text">Siga-nos nas redes</h5>
                <p class="white-text text-lighten-4">Fique por dentro de todas as novidades e compartilhe com seus amigos!</p>
              </div>
              <div class="col s6 container">
                <h5 class="white-text">Menu</h5>
                <ul>
                  <li><a href="<?php echo DIRPAGE.'index.php' ;?>" style="color:darkorange">Home</a></li>
                  <li><a class="white-text" href="<?php echo DIRPAGE.'contato.php' ;?>">Contato e Informações</a></li>
                  <li><a class="white-text" href="<?php echo DIRPAGE.'servicos.php' ;?>">Serviços</a></li>
                  <li><a href="<?php echo DIRPAGE.'views/manager/index.php' ;?>" style="color:darkgreen;">Gerenciamento</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="footer-copyright">
            <div class="container">
            © 2022- Todos os direitos reservados
            <a class="grey-text text-lighten-4 right" href="#!">Mais Links</a>
            </div>
          </div>
        </footer>

      </section>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- MATERIALIZE JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- FULL CALENDAR -->
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/index.global.min.js'; ?>"></script>
    <!-- JS FULL CALENDAR -->
    <script src="<?php echo DIRPAGE.'lib/js/FullCalendar/index.global.js'; ?>"></script>
    <!-- SWEET ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
$(document).ready(function(){
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.modal').modal();
    $('.tabs').tabs();
  });
</script>


</body>
</html>