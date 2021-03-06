<?php
require('../Backend/config/database.php');
include('../Backend/noticias.php');
include('../Backend/empresas.php');

$idEmpresa = $_GET['id'];
$busqueda = $_GET['buscar'];

$empresa = mysqli_fetch_assoc(selectEmpresaPorId($idEmpresa));
$resultado = buscarNoticias($idEmpresa, $busqueda);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>PRIVACY</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/search.css">

    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'  href="./"><small><?php echo $empresa['denominacion'] ?></small></a>
          </h1>
          <a class="search-form_toggle" href="#"></a>
        </div>

        <div class="help-box text-right">
          <p>Telefono</p>
          <a href="callto:#"><?php echo $empresa['telefono'] ?></a>
          <small><span>Horario:</span> <?php echo $empresa['horario_de_atencion'] ?></small>
        </div>
      </div>
     
	  <div id="stuck_container" class="stuck_container">
        <div class="container">   
			<nav class="navbar navbar-default navbar-static-top pull-left">            
				<div class="">  
				  <ul class="nav navbar-nav sf-menu sf-js-enabled sf-arrows" data-type="navbar">
					<li style="list-style: none;" class="active">
					  <a href="home.php?id=<?php echo $empresa['id'] ?>">INICIO</a>
					</li>
					<li style="list-style: none;">
					  <a href="./">LISTA EMPRESAS</a>
					</li>
				  </ul>                           
				</div>
			</nav>
			<form class="search-form" action="buscador.php" method="GET" accept-charset="utf-8">
			  <label class="search-form_label">
				<input class="search-form_input" type="text" name="buscar" autocomplete="off" placeholder="Ingrese Texto"/>
				<input style="display: none;" type="text" name="id" value="<?php echo $empresa['id'] ?>"/>
				<span class="search-form_liveout"></span>
			  </label>
			  <button class="search-form_submit fa-search" type="submit"></button>
			</form>
				 
        </div>

      </div>  

    </header>

  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
		
        <div class="container">
			
          <h2>
            <?php echo $busqueda ?>
          </h2>
          <div class="row offs2">
            
            <table width="90%" align="center">
				<tbody>
					<?php while($noticia = mysqli_fetch_assoc($resultado)): ?>
						<tr>
							<td>
								<a href="detalle.php">
									<img width="250px" class="imgNoticia" src="http://localhost:82/template_html/images/page-1_slide1.jpg?1583775512626" alt="">
								</a>
							</td>
							<td width="25"></td>
							<td style="text-align:justify;" valign="top">
								<a style="text-align:justify; font-size:20px" href="detalle.php" class="banner"><?php echo $noticia['titulo_de_la_noticia'] ?></a>
								<div class="verOcultar">
									<?php echo $noticia['resumen_de_la_noticia'] ?>
									<a href="detalle.php?id=<?php echo $noticia['id'] ?>&idEmpresa=<?php echo $empresa['id'] ?>" style="color:blue"> Leer Mas - <?php echo $noticia['fecha_publicacion'] ?></a>
								</div>
							</td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
			<hr>
			
			
          </div>
        </div>
      </section>   
      

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
   <section class="well">
      <div class="container"> 
            <p class="rights">
			<?php echo $empresa['denominacion'] ?> &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Privacy Policy</a>
              <!-- {%FOOTER_LINK} -->
            </p>        
      </div> 
    </section>    
  </footer>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->

<!-- coded by vitlex -->

  </body>
</html>
