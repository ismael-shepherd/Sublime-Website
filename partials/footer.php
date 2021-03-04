<footer id="footer" class="mt-0">
<div class="footer-copyright">
<div class="container py-2">
<div class="row py-4">
<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
<p>© Copyright 2021. Tous droits réservés. Ismael Shepherd</p>
</div>
<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
<nav id="sub-menu">
<ul>
<li><i class="fas fa-angle-right"></i><a href="wiki/index.html" class="ml-1 text-decoration-none"> Wiki</a></li>
<li><i class="fas fa-angle-right"></i><a href="https://discord.gg/tGV2cu3GvC" class="ml-1 text-decoration-none"> Discord</a></li>
<li><i class="fas fa-angle-right"></i><a href="contact.html" class="ml-1 text-decoration-none"> Nous contacter</a></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</footer>
</div>

<!--CSS-->
<style>
.banniere {
  background: rgba(0, 0, 0, 0.911);
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  color: white;
  display: flex;
  justify-content: space-around;
  padding: 30px;
}

.text-banniere p{
  font-size: large;
}
</style>
<!--CSS-->

<?php
if(!isset($_COOKIE['accepte-cookie'])) {
  ?>

<div class="banniere">
  <div class="text-banniere">
    <p>Notre site utilise des cookies pour une meilleure expèrience. <a href="https://www.sun-abris.fr/condition-dutilisation-des-cookies/" target="_blank">Nos conditions</a></p>
  </div>
  <div class="button-banniere">
    <a class="btn btn-success" href="?accepte-cookie">OK, J'accepte</a>
  </div>
</div>

<?php
    }
?>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="../vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="../vendor/popper/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/common/common.min.js"></script>
<script src="../vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="../vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="../vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="../vendor/isotope/jquery.isotope.min.js"></script>
<script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="../vendor/vide/jquery.vide.min.js"></script>
<script src="../vendor/vivus/vivus.min.js"></script>

<script src="../js/theme.js"></script>

<script src="../vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="../vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="../js/views/view.contact.js"></script>

<script src="../js/demos/demo-insurance.js"></script>

<script src="../js/custom.js"></script>

<script src="../js/theme.init.js"></script>
</body>
</html>
