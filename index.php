<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Delivery corporativo de implementos de oficina">
    <meta name="author" content="Allmark">
    <meta name="keywords" content="allmark - Delivery, delivery corporativo, distribución, artículos de oficina, productos de oficina, productos de oficina en lima, distribuidora de artículos, distribuidora de artículos de oficina en lima, resmas, resmas de papel en lima, productos de oficina, productos de oficina en perú, artículos de oficina, artículos de oficina en perú, resmas de papel, resmas de papel en perú, papel continuo en lima, papel continuo en perú, artículos de aseo, lejía, detergente, jabón, jabón de manos, limpiador pino, artículos de cafetería, papel higiénico en lima, papel higiénico en perú, papel toalla, lejía, cloro, escoba, trapeador, bolígrafo, lapicero, lápiz, borrador, agua mineral, gaseosas, café, infusiones, azúcar, implementos de seguridad, cascos, chalecos, descartables, productos de oficina, productos de oficina en lima, distribuidora de artículos, distribuidora de artículos de oficina en lima, engrapador, perforador, regla, cúter, artesco, artículos de oficina artesco, faber castell, kw-trio, xerox, gallo copy, kero copy, pegafan, pilot, faber, 3m, warrior, atlas, fotocopia, papel fotocopia, pagoda, layconsa, norma">

    <title>Allmark | Delivery corporativo de implementos de oficina</title>
    <link href="css/main.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="favicon.ico">
</head>
<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" id="logo">
                    <img src="img/logo.png" alt="Logo Allmark" class="hidden-xs hidden-sm">
                    <img src="img/logo_min.png" alt="Logo Allmark" class="visible-xs visible-sm">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-center">
                    <li class="active">
                        <a href="#page-top" class="page-scroll">PRODUCTOS</a>
                    </li>
                    <li>
                        <a href="#about-us" class="page-scroll">NOSOTROS</a>
                    </li>
                    <li>
                        <a href="#intranet" data-toggle="modal">INTRANET</a>
                    </li>
                    <li>
                        <a href="#contact-content" class="page-scroll">CONTÁCTENOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" id="page-top">
        <div class="row" id="products">
            <div class="col-lg-12">
                <h1 class="page-header fix-header"> Nuestros Productos</h1>
            </div>
            <div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-stack-custom" data-toggle="modal" data-target="#articulos">
                                  <i class="fa fa-pencil fa-stack-1x fa-stack-1x-custom"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h5>ARTICULOS DE ESCRITORIO</h5>
                            <p>Todo en artículos de escritorio para su oficina o establecimiento con abastecimiento 24/7 en toda Lima Metropolitana.</p>
                            <div class="more-info">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#articulos">
                                  <i class="fa fa-share"></i> Leer más
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-stack-custom" data-toggle="modal" data-target="#aseo">
                                  <i class="fa fa-archive fa-stack-1x fa-stack-1x-custom" style="font-size:1em"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h5>PRODUCTOS DE ASEO, DESINFECTANTES Y ABARROTES EN GENERAL</h5>
                            <p>Distribuimos diversas líneas en productos de aseo y desinfectantes e implementos para su cafetería.</p>
                            <div class="more-info">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aseo">
                                  <i class="fa fa-share"></i> Leer más
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-stack-custom" data-toggle="modal" data-target="#implementos">
                                <i class="fa fa-support fa-stack-1x fa-stack-1x-custom"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h5>IMPLEMENTOS GENERALES DE SEGURIDAD</h5>
                            <p>Pensando en su seguridad, allmark security ofrece una gama amplia en EPPs y artículos de seguridad.</p>
                            <div class="more-info">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#implementos">
                                  <i class="fa fa-share"></i> Leer más
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-stack-custom" data-toggle="modal" data-target="#herramientas">
                                <i class="fa fa-wrench fa-stack-1x fa-stack-1x-custom"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h5>HERRAMIENTAS Y MATERIALES DE CONSTRUCCION</h5>
                            <p>Ponemos a su disposición el abastecimiento general de herramientas de producción nacional y extranjera, al igual que materiales de construcción para su proyecto.</p>
                            <div class="more-info">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#herramientas">
                                    <i class="fa fa-share"></i> Leer más
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row text-justify" id="about-us">
            <div class="col-lg-12">
                <div class="space-hold"></div>
                <h2 class="page-header">NOSOTROS</h2>
            </div>
            <div class="col-sm-8">
               <h4 class="text-center">QUIENES SOMOS</h4>
                <p>Allmark es un equipo multidisciplinario de profesionales que busca entregarle los mejores productos no estratégicos en la comodidad de su oficina o establecimiento, como artículos de escritorio, papelería en general, artículos de aseo, desfinfectantes, y productos de cafetería, buscando relaciones de largo plazo y sostenidos en nuestros cuatro objetivos de distribución tales como: Alta diversidad de productos, precio razonable, entregas a tiempo y disponibilidad total.</p>
                <p>
                    <b>Nuestra Visión</b><br>
                    Ser la distribuidora de implementos generales para la oficina con mayor presencia comercial a nivel nacional.
                </p>
                <p>
                    <b>Nuestra Misión</b><br>
                    Brindar una solución eficiente y eficaz a las diversas necesidades de nuestros clientes, convirtiéndonos en parte fundamental en la cadena de abastecimiento y compras, y ofreciendo en todo momento la búsqueda de la mejora continua para todos los agentes implicados.
                </p>
                <p>En asociación con Lima Courier Corporación SAC – <a href="http://www.limacourier.pe" target="blanck">www.limacourier.pe</a></p>
            </div>
            <div class="col-sm-4">
                <img src="img/about-us.png" alt="Quienes Somos" class="img-responsive">
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12">
                <h4 class="page-header mt10">OBJETIVOS</h4>
            </div>
            <div class="col-sm-3">
                <p>
                    <b>Alta diversidad</b><br>
                    En allmark buscamos mantener una cartera de productos que cumpla las expectativas de nuestros clientes y sobrepase cualquier necesidad en su cadena de abastecimiento.
                </p>
            </div>
            <div class="col-sm-3">
                <p><b>Precio razonable</b><br>
                    Gracias a los vínculos generados con empresas de diversos rubros, buscamos que el cliente final obtenga los mejores precios, todo el año.
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <b>Entregas a tiempo</b><br>
                    Nuestra prioridad siempre serán las necesidades de nuestros clientes, por ello fortalecemos nuestro servicio de delivery corporativo, cada vez mejor, con el único deseo de entregar a tiempo cualquier requerimiento en cualquier lugar de Lima Metropolitana.
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <b>Disponibilidad total</b><br>
                    Con nuestro sistema 24/7, atendemos solicitudes y realizamos entregas todos los días de la semana y en cualquier momento, su necesidad es nuestra prioridad.
                </p>
            </div>
        </div>
        <div class="clientes">
            <p>ALGUNOS DE NUESTROS CLIENTES</p>
        </div>
        <aside class="clients">
            <div class="slider autoplay">
                <div><img src="img/clients/taca.png" class="img-responsive img-centered" alt="Taca"></div>
                <div><img src="img/clients/red_salud.png" class="img-responsive img-centered" alt="Red Salud"></div>
                <div><img src="img/clients/sedapal.png" class="img-responsive img-centered" alt="Sedapal"></div>
                <div><img src="img/clients/avianca.png" class="img-responsive img-centered" alt="Avianca"></div>
                <div><img data-lazy="img/clients/ibero.png" class="img-responsive img-centered" alt="ibero"></div>
                <div><img data-lazy="img/clients/metco.png" class="img-responsive img-centered" alt="Metco"></div>
                <div><img data-lazy="img/clients/soluciones_ali.png" class="img-responsive img-centered" alt="Soluciones ali"></div>
                <div><img data-lazy="img/clients/uvk.png" class="img-responsive img-centered" alt="Cines UVK"></div>
                <div><img data-lazy="img/clients/ctsi.png" class="img-responsive img-centered" alt="CTSI"></div>
            </div>
        </aside>
        <div id="contact-content">
            <div class="space-hold"></div>
            <h2 class="page-header">CONTÁCTENOS</h2>
            <div class="col-sm-7">
                <address>
                    En allmark valoramos las relaciones de largo plazo, contáctenos en forma directa a nuestro call center.
                    <br><br>
                    <ul class="fa-ul info-contact">
                        <li>
                            <i class="fa-li fa fa-check-square text-muted"></i>
                            <strong class="text-primary"><i class="fa fa-fax fa-lg"></i> 51 1 242 2534</strong>
                        </li>
                        <li>
                            <i class="fa-li fa fa-check-square text-muted"></i>
                            <i class="fa fa-mobile-phone" style="font-size:1.9em"></i>
                            51 9881 63388 - RPM (#) 9881 63388
                        </li>
                        <li>
                            <i class="fa-li fa fa-check-square text-muted"></i>
                            <i class="fa fa-envelope fa-lg"></i>
                            <a href="mailto:ventas@allmark.pe">ventas@allmark.pe</a>
                        </li>
                        <li>
                            <i class="fa-li fa fa-check-square text-muted"></i>
                            <i class="fa fa-envelope fa-lg"></i>
                            <a href="mailto:info@allmark.pe">info@allmark.pe</a>
                        </li>
                        <li>
                            <i class="fa-li fa fa-check-square text-muted"></i>
                            <i class="fa fa-map-marker"></i>
                            Av. Sergio Bernales 524 Int. 1204 – Surquillo, Lima, Perú.
                        </li>
                    </ul>
                </address>
                <hr>
                <img src="img/Contacto.jpg" alt="Imagen contacto" class="img-responsive">
            </div>
            <div class="col-sm-5">
                <form action="send.php" id="form-contact" method="post" enctype="multipart/form-data">
                    <div class="control-group form-group">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required class="form-control" data-validation-required-message="Por favor introduzca su nombre y apellido">
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required class="form-control" data-validation-required-message="El numero de teléfono es necesario.">
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <input type="text" id="asunto" name="asunto" placeholder="Asunto" required class="form-control" data-validation-required-message="El asunto es requerido">
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" id="correo" name="correo" placeholder="Correo" required class="form-control" data-validation-required-message="Su correo electrónico es requerido" data-validation-email-message="Debe ingresar un correo electrónico válido">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <input type="file" name="adjunto" class="form-control">
                    </div>
                    <div class="control-group form-group">
                        <textarea name="mensaje" id="mensaje" rows="5" placeholder="Mensaje" class="form-control" data-validation-required-message="Dejenos su mensaje" maxlength="999" style="resize:none" required></textarea>
                        <p class="help-block"></p>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning">Enviar</button>
                    </div>
                    <?php if (isset($_SESSION['MESSAGE'])): ?>
                        <div class="alert alert-success">
                            <?php echo $_SESSION['MESSAGE'] ?>
                            <?php unset($_SESSION['MESSAGE']) ?>
                        </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION['ERROR_MESSAGE'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['ERROR_MESSAGE'] ?>
                        <?php unset($_SESSION['ERROR_MESSAGE']) ?>
                    </div>
                    <?php endif ?>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <hr>
        <footer>
            <div class="row">
                <div class="col-sm-9">
                    <img src="img/logo_min.png" height="34" alt="Logo version Mobil" class="pull-left">
                    <p class="pull-left">Copyright &copy; <?php echo date('Y') ?> allmark sac, all rights reserved.<br>En asociación con Lima Courier Corporación SAC - <a href="http://www.limacourier.pe" target="_blank">www.limacourier.pe</a></p>
                </div>
                <div class="col-sm-3">
                    <a class="fa-stack fa-lg" href="#">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x"></i>
                    </a>
                    <a class="fa-stack fa-lg" href="https://www.linkedin.com/company/allmark-sac" target="_blank">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-linkedin fa-stack-1x"></i>
                    </a>
                    <a class="fa-stack fa-lg" href="#">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-pinterest-p fa-stack-1x"></i>
                    </a>
                    <a class="fa-stack fa-lg" href="#">
                        <i class="fa fa-square fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal fade text-center" id="intranet">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                        <h4 class="modal-title">INTRANET</h4>
                    </div>
                    <div class="modal-body">
                        <h5>EN CONSTRUCCIÓN</h5>
                        <p>Estamos trabajando para ofrecerle un mejor servicio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="articulos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ARTICULOS DE ESCRITORIO</h4>
              </div>
              <div class="modal-body">
                    <div class="col-sm-6">
<p class="text-justify mt20">
Ofrecemos una amplia gama de artículos de escritorio, con una cartera de màs de 650 productos de diversas marcas todas ellas representativas en el mercado peruano.
<strong>Nuestro delivery corporativo recorre todos los distritos de Lima Metropolitana</strong>, suministrando bienes no estratégicos en empresas de diversos rubros comerciales, industriales, entretenimiento, de la salud, y construcción bajo la modalidad 24/7.</p>
<p class="text-justify">
Contamos con las líneas de papelerìa, papel fotocopia, bond, papel bulky, periódico, sobres de manila, sobres bond, engrapadoras, perforadoras, catálogos, adhesivos, bolígrafos y todo para su escritorio.</p>
                    </div> 
                    <div class="col-sm-6"> <img src="img/articulos_escritorio.png"  alt="Imagen articulos de escritorio" class="img-responsive"></div> 
                  <div class="clearfix"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="aseo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">PRODUCTOS DE ASEO, DESINFECTANTES, Y ABARROTES EN GENERAL</h4>
              </div>
            <div class="modal-body">
            <div class="col-sm-6"> <img src="img/productos_aseo.png" alt="Imagen productos de aseo" class="img-responsive"></div> 
                <div class="col-sm-6">
            <p class="text-justify mt20"><strong>"Creemos que es fundamental un abastecimiento integral para su empresa,</strong> por ello hemos ampliado la distribución considerando agregar a nuestra cartera los productos de aseo y desinfectantes para ambientes, pisos, cocinas y cualquier lugar en general con marcas que garantizan protección para sus empleados y sus espacios".</p>

            <p class="text-justify">Comercializamos marcas como Elite, 3M, Kimberly Clark, y Sapolio en líneas como detergente en polvo, lavavajilla, jabón liquido, lejìa, además de escobas, trapeadores, y recogedores.</p>

            <p class="text-justify">Asimismo, proporcionamos soluciones en la línea de cafeterìa ofreciéndole productos como azúcar rubia, café instantáneo, filtrantes, descartables, agua, bebidas gasificadas.</p>
                </div> 
              <div class="clearfix"></div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="implementos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">IMPLEMENTOS DE SEGURIDAD</h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-7">
                        <p class="text-justify mt20">
                        <strong> Buscamos que la seguridad se convierta en el factor común de cada organización,</strong> proporcionando los mejores productos de las mejores marcas, que ofrezcan EPPs de alta calidad y optimo desempeño, señalética, pisos de seguridad, (NOMAD y Confort), luces de emergencia, conos, cintas de seguridad, barras retràctiles y todo el equipamiento que sus colaboradores necesitan.</p>
                        <p>
                            <div><img src="img/implementos_seguridad.png" alt="Imagen marcas" class="img-responsive center-block"></div>
                        </p>
                    </div> 
                    <div class="col-sm-5">
                        <img src="img/obrero2.jpg" alt="Imagen seguridad" class="img-responsive center-block">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="herramientas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">TODO EN HERRAMIENTAS Y MATERIALES DE CONSTRUCCION</h4>
                </div>
                <div class="modal-body">
                    <div class="col-sm-6">
                        <img src="img/construccion.png" alt="Imagen herramientas" class="img-responsive">
                    </div>
                    <div class="col-sm-6">
                        <p class="text-justify mt20">
                        "Con la unidad de negocios de herramientas y materiales de construcción, buscamos ser un aliado contìnuo para su proyecto asegurándole el suministro de herramientas y elementos de ferreterìa en su lugar de trabajo, y proporcionándole los materiales de construcción que su obra necesita.  Atendemos en obras civiles de todo tipo, alcantarillado, mecánica, estructural".</p>
                        <p class="text-justify">
                        Coméntenos sobre su proyecto, conozca nuestras opciones de crédito y condiciones especiales de entrega.</p>
                    </div> 
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.min.js"></script>
</body>
</html>