<?php

require '../functions/NavLink.php';

// ACCEPTE COOKIE
if(isset($_GET['accepte-cookie'])) {
    setcookie('accepte-cookie', 'true', time() + 365*24*3600);
    header('Location: ../public/index.php');
  }

?><!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" class="js no-touch history boxshadow csstransforms3d csstransitions video svg gecko win js sticky-header-enabled sticky-header-negative dark">
<head>
<!--
	ISMAEL SHEPHERD 2021
	DESIGN : TEMPLATE

-->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= $title ?? 'Sublime Life' ?></title>

<meta property="og:title" content="SublimeLife">
<meta property="og:site_name" content="SublimeLife">
<meta property="og:image" content="img/logob.jpg">
<meta property="og:type" content="website">
<meta property="og:description" content="Communauté roleplay sous candidature. Avec plus de deux années d'existence sur FiveM, GTALife propose un gameplay et du contenu roleplay exclusif.">
<meta name="keywords" content="gta,SublimeLife,rp,slots,pnj,FiveM,illégal,gang,police,lspd,fun,communauté,fivem,french,life,multiplayer,gta 5" />

<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="../img/apple-touch-icon.html">

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

<link href="../fonts.googleapis.com/css8b58.css?family=Roboto+Slab:300,400,700" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../vendor/animate/animate.min.css">
<link rel="stylesheet" href="../vendor/simple-line-icons/css/simple-line-icons.min.css">
<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="../vendor/magnific-popup/magnific-popup.min.css">

<link rel="stylesheet" href="../css/theme.css">
<link rel="stylesheet" href="../css/theme-elements.css">
<link rel="stylesheet" href="../css/theme-blog.css">
<link rel="stylesheet" href="../css/theme-shop.css">

<link rel="stylesheet" href="../vendor/rs-plugin/css/settings.css">
<link rel="stylesheet" href="../vendor/rs-plugin/css/layers.css">
<link rel="stylesheet" href="../vendor/rs-plugin/css/navigation.css">

<link rel="stylesheet" href="../css/demos/demo-insurance.css">

<link rel="stylesheet" href="../css/skins/default.css">

<link rel="stylesheet" href="../css/custom.css">

<script src="../vendor/modernizr/modernizr.min.js"></script>
<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-113326766-1', 'auto');
		ga('send', 'pageview');
	</script>
<script data-ad-client="ca-pub-9028113783361044" async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
</head><body>
<div class="body">
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
<div class="header-body header-body-bottom-border border-top-0">
<div class="header-container container">
<div class="header-row">
<div class="header-column">
<div class="header-row">
<div class="header-logo">
<a href="index-2.html">
<img alt="Sublime Life" width="62" height="60" data-sticky-width="52" data-sticky-height="50" src="">
</a>
</div>
</div>
</div>
<div class="header-column justify-content-end">
<div class="header-row">
<div class="header-nav header-nav-line header-nav-bottom-line">
<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
<nav class="collapse">
<ul class="nav nav-pills" id="mainNav">

<!--AJOUT NAVBAR LINK-->
<li class="navbar-nav me-auto mb-2 mb-md-0">
			<?= nav_menu('nav-link'); ?>
        </li>
</li>

</ul>
</nav>
</div>
<a href="../admin/connexion.php" class="btn btn-xl btn-outline btn-rounded btn-primary text-1 ml-3 font-weight-bold text-uppercase">WHITELIST</a>
<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
<i class="fas fa-bars"></i>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</header>