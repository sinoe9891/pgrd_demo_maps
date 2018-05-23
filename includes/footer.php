
<footer class="page-footer">
  <div class="footer-copyright">
    <div class="container">
    <h4 class="text-action">VISIÓN COMPARTIDA: COMUNIDAD, GOBIERNO MUNICIPAL, COPECO</h4>
    </div>
  </div>
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
          <li><a class="" href="https://mail.zamorano.edu/owa/auth/logon.aspx?replaceCurrent=1&amp;url=https%3a%2f%2fmail.zamorano.edu%2fowa%2f">Situación Actual</a></li>
          <li><a class="" target="_blank" href="https://www.zamorano.edu/alisonbixby/">Estaciones Sismicas</a></li>
          <li><a class="" href="https://www.zamorano.edu/donar-en-linea/">Radar Meteorológico</a></li>
          <li><a class="" href="https://secure.icomstec.com/zamorano/">Estaciones Meteorológicas</a></li>
          </ul>
        </div>

        <div class="col l3 s12">
          <h4 class="">Enlaces de interés</h4>
          <ul>
            <li><a class="" href="https://creativehonduras.com/pgrd.copeco.gob.hn/que-hacemos/fortalecimiento-de-la-capacidad-de-gestion-de-riesgos-a-nivel-nacional/">-Fortalecimiento de la capacidad de Gestión de Riesgos a Nivel Nacional.</a></li>
          <li><a class="" href="https://mail.zamorano.edu/owa/auth/logon.aspx?replaceCurrent=1&amp;url=https%3a%2f%2fmail.zamorano.edu%2fowa%2f">Situación Actual</a></li>
          <li><a class="" target="_blank" href="https://www.zamorano.edu/alisonbixby/">Estaciones Sismicas</a></li>
          <li><a class="" href="https://www.zamorano.edu/donar-en-linea/">Radar Meteorológico</a></li>
          <li><a class="" href="https://secure.icomstec.com/zamorano/">Estaciones Meteorológicas</a></li>
          </ul>
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
          <li><a class="" href="https://mail.zamorano.edu/owa/auth/logon.aspx?replaceCurrent=1&amp;url=https%3a%2f%2fmail.zamorano.edu%2fowa%2f">Situación Actual</a></li>
          <li><a class="" target="_blank" href="https://www.zamorano.edu/alisonbixby/">Estaciones Sismicas</a></li>
          <li><a class="" href="https://www.zamorano.edu/donar-en-linea/">Radar Meteorológico</a></li>
          <li><a class="" href="https://secure.icomstec.com/zamorano/">Estaciones Meteorológicas</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a>© <?php echo date('Y');?> All Rights Reserved</a> <a class="" href="http://www.copeco.gob.hn/">COPECO</a>.
      </div>
    </div>

          </div>
  </footer>
