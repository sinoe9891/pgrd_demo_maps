<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l3">
          <img class="imgfooter aligncenter" src="img/logo-pgrd.png" alt="" >
        </div>

        <div class="col l3 s12">
          <h4 class="">Enlaces de interés</h4>
          <ul>
          <?php if (!isset( $_SESSION['perfiles_user'] )) {?>
                  <li><a class="" href="acceso.php">Log in</a></li>
                <?php }elseif (isset( $_SESSION['perfiles_user'] )) {?>

                  <li><a class="" href="includes/logout.php">Log out: <?php echo "Usuario: ".$_SESSION['perfiles_user']; ?></a></li>
                  <li><a class="" href="busqueda-avanzada.php">Busqueda avanzada</a></li>


                <?php } ?>
            <li><a class="" href="https://www.zamorano.edu/mapa-del-sitio/">COPECO</a></li>
          <li><a class="" href="https://mail.zamorano.edu/owa/auth/logon.aspx?replaceCurrent=1&amp;url=https%3a%2f%2fmail.zamorano.edu%2fowa%2f">Zamomail</a></li>
          <li><a class="" target="_blank" href="https://www.zamorano.edu/alisonbixby/">Escuela Alison Bixby Stone School</a></li>
          <li><a class="" href="https://www.zamorano.edu/donar-en-linea/">Donar en Línea</a></li>
          <li><a class="" href="https://secure.icomstec.com/zamorano/">Pago en línea</a></li>
          <li><a class="" href="https://estudiantes.zamorano.edu/">Portal Estudiantil</a></li>
          <li><a class="" href="https://empleados.zamorano.edu/">Portal Empleados</a></li>
          <li><a class="" href="http://pacad.zamorano.edu/pacad/CursoAGI01.html">Educación en Línea</a></li>
          <li><a class="" href="https://www.zamorano.edu/category/oportunidades_laborales/">Oportunidades Laborales</a></li>
          </ul>

        </div>

        <div class="col l3 s12 grey-text text-lighten-4">
          <p></p>
          <strong>HONDURAS</strong>
          <p>PO Box 93, Km 30 road from Tegucigalpa to Danli,
           Yeguare Valley, Municipality of San Antonio de Oriente. Francisco Morazan, Honduras, C.A.
          Tel. (504) 2287-2000,
          Fax: (504) 2776-6240
          Email: zamorano@zamorano.edu</p>
          <hr>
          <strong>UNITED STATES</strong>
          <p>1701 Pennsylvania Ave., NW, Suite 300
          Washington, DC 20006
          Tel: (202) 461-2242
          Fax: (202) 580-6559
          Email: wdc@zamorano.edu</p>

        </div>

        <div class="col l3 s12 grey-text text-lighten-4">
          <p></p>
          <strong>HONDURAS</strong>
          <p>PO Box 93, Km 30 road from Tegucigalpa to Danli,
           Yeguare Valley, Municipality of San Antonio de Oriente. Francisco Morazan, Honduras, C.A.
          Tel. (504) 2287-2000,
          Fax: (504) 2776-6240
          Email: zamorano@zamorano.edu</p>
          <hr>
          <strong>UNITED STATES</strong>
          <p>1701 Pennsylvania Ave., NW, Suite 300
          Washington, DC 20006
          Tel: (202) 461-2242
          Fax: (202) 580-6559
          Email: wdc@zamorano.edu</p>

        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © <?php echo date('Y');?> <a class="grey-text text-lighten-4" href="https://www.zamorano.edu">Universidad Zamorano1.</a> All Rights Reserved.
      </div>
    </div>

          </div>
  </footer>
