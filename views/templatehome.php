<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL; ?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/new_style.css" type="text/css">


    <link href="<?php echo BASE_URL; ?>assets/css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script type="text/javascript">var BASE_URL = "<?php echo BASE_URL; ?>";</script>

    <title>RepublicaON </title>


</head>


<body>
    <div class="page-wrapper">
        <div id="page-header">
            <header>
                <div class="container">
                    <div class="secondary-nav">
                        <div class="nav-trigger"><a data-toggle="collapse" href="#secondary-nav" aria-expanded="false" aria-controls="secondary-nav"><i class="fa fa-user"></i></a></div>
                        <div id="secondary-nav">
                            <nav>
                                <div class="left opacity-60">
                                    <a href="https://api.whatsapp.com/send?phone=5531998131909&text=Ol%C3%A1%2C%20quero%20tirar%20uma%20duvida%20do%20Rep%C3%BAblicaON..." target="_blank"><i class="fa fa-phone"></i>(31) 9 9813 - 1909</a>
                                    <a href="mailto:hello@example.com"><i class="fa fa-envelope"></i>contato@republicaon.com.br</a>
                                </div>
                                <!--end left-->
                                <div class="right">
                                    
                                    <!--end element-->
                                    <?php if (isset($_SESSION['administrator_online']) && !empty($_SESSION['administrator_online'])): ?>
                                        <div class="element">
                                            <a href="<?php echo BASE_URL; ?>administrator" >Minhas Repúblicas</a>
                                        </div>

                                        <div class="element">
                                            <a href="<?php echo BASE_URL; ?>home/logout" >Sair</a>
                                        </div>

                                        
                                    <?php else: ?>
                                        <div class="element">
                                            <a href="#tab-sign-in" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Entrar</a>
                                        </div>
                                        <div class="element">
                                            <a href="<?php echo BASE_URL; ?>home/register" >Registrar</a>
                                        </div>


                                    <?php endif; ?>
                                   
                                    
                                    <div class="element">
                                        <select>
                                            <option>BR</option>
                                            <option>EN</option>
                                            <option>ES</option>
                                        </select>
                                    </div>
                                    <!--end element-->
                                </div>
                                <!--end right-->
                            </nav>
                        </div>
                    </div>
                    <!--end secondary-nav-->
                </div>
                <!--end container-->
                <hr>
                <div class="container">
                    <div class="primary-nav">
                        <div class="left">
                            <a href="<?php echo BASE_URL; ?>" id="brand"><img id="new_style_img_logo" src="<?php echo BASE_URL; ?>assets/img/logo.png" alt=""></a>
                            <a class="nav-trigger" data-toggle="collapse" href="#primary-nav" aria-expanded="false" aria-controls="primary-nav"><i class="fa fa-navicon"></i></a>
                        </div>
                        <!--end left-->
                        <div class="right" >
                            <nav id="primary-nav">
                                <ul>
                                    <li <?php echo ($viewData['main_menu'] == "home") ? "class='active'" : "class=''"; ?>><a href="<?php echo BASE_URL; ?>">INICIO</a></li>
                                    <li <?php echo ($viewData['main_menu'] == "about") ? "class='active'" : "class=''"; ?>><a href="<?php echo BASE_URL; ?>about">SOBRE NÓS</a></li>
                                    <li <?php echo ($viewData['main_menu'] == "republic") ? "class='active'" : "class=''"; ?>>
                                        <a href="#" class="has-child">REPÚBLICAS</a>
                                        <ul class="child-nav">
                                            <li><a href="<?php echo BASE_URL; ?>republic/list?search=Mista">MISTA</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>republic/list?search=LGBT">LGBT</a></li> 
                                            <li><a href="<?php echo BASE_URL; ?>republic/list?search=Masculina">MASCULINA</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>republic/list?search=Feminina">FEMININA</a></li>                                           
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo BASE_URL; ?>" class="has-child">OUTROS IMÓVEIS</a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-child">EVENTOS</a>
                                        <ul class="child-nav">
                                            <li><a href="<?php echo BASE_URL; ?>">MISTA</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>">MASCULINA</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>">FEMININA</a></li>                                           
                                        </ul>
                                    </li>
                                      <li>
                                        <a href="#" class="has-child">OPORTUNIDADES</a>
                                        <ul class="child-nav">
                                            <li><a href="<?php echo BASE_URL; ?>">ESTÁGIO</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>">TRABALHO</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>">FREELANCERS</a></li>
                                            <!-- SUBMENU 
                                            <li>
                                                <a href="#" class="has-child">Admin</a>
                                                <ul class="child-nav">
                                                    <li><a href="edit.html">Edit Accommodation</a></li>
                                                    <li><a href="my-accommodations.html">My Accommodations</a></li>
                                                    <li><a href="profile.html">Profile</a></li>
                                                    <li><a href="reservations.html">Reservations</a></li>
                                                    <li><a href="reviews.html">Reviews</a></li>
                                                </ul>
                                            </li>
                                            -->
                                           
                                        </ul>
                                    </li>
                                    <!--
                                        <li class="submit"><a href="submit.html"><span>Fidelidade</span><i data-toggle="tooltip" data-placement="top" title="Fidelidade"><img src="<?php echo BASE_URL; ?>assets/img/icons/cartao_fidelidade.png" alt=""></i></a></li>
                                    -->
                                    
                                </ul>
                            </nav>
                            <!--end nav-->
                        </div>
                        <!--end right-->
                    </div>
                    <!--end primary-nav-->
                </div>
                <!--end container-->
            </header>
            <!--end header-->
        </div>
        <!--end page-header-->

    <?php $this->loadViewInTemplate($viewName, $viewData); ?> <!-- adicionando o template os dados da view -->

    <footer id="page-footer">
            <div class="row-one">
                <div class="container">
                    <div class="logos">
                        <div class="logo">
                            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/logo-1.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/logo-2.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/logo-3.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/logo-4.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                        <div class="logo">
                            <a href="#"><img src="<?php echo BASE_URL; ?>assets/img/logo-5.png" alt=""></a>
                        </div>
                        <!--/ .logo-->
                    </div>
                    <!--/ .logos-->
                </div>
            </div>
            <!--end row-one-->
            <div class="row-two clearfix">
                <div class="container">
                    <div class="copyright pull-left">(C) 2019 InfoCept, All Rights Reserved</div>
                    <div class="footer-nav pull-right">
                        <a href="<?php echo BASE_URL; ?>">Inicio</a>
                        <a href="about-us.html">Sobre Nós</a>
                        <a href="listing.html">Republicas</a>
                    </div>
                </div>
                <div class="bg-transfer"><img src="<?php echo BASE_URL; ?>assets/img/footer-bg.jpg" alt=""></div>
            </div>
            <!--end row-two-->
    </footer>
        <!--end page-footer-->
    </div>
    <!--end page-wrapper-->
    <a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="fa fa-hand-o-up"></i></a>

    <div class="modal fade login" id="loginModal">
              <div class="modal-dialog login animated">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                                <!--
                                    <div class="social">
                                        <a class="circle github" href="#">
                                            <i class="fa fa-github fa-fw"></i>
                                        </a>
                                        <a id="google_login" class="circle google" href="#">
                                            <i class="fa fa-google-plus fa-fw"></i>
                                        </a>
                                        <a id="facebook_login" class="circle facebook" href="#">
                                            <i class="fa fa-facebook fa-fw"></i>
                                        </a>
                                    </div>

                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                -->
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="POST" accept-charset="UTF-8" id="formLogin">
                                    <input id="email" class="form-control" type="text" placeholder="E-mail" name="email" required>
                                    <input id="password" class="form-control" type="password" placeholder="Senha" name="password" required>
                                    <input class="btn btn-default btn-login" type="submit" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                                <a href="#">Esqueceu a senha ???</a>
                             </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Não tem cadastro ?
                                 <a href="">clique aqui.</a>
                            </span>
                        </div>
                    </div>
                  </div>
              </div>
    </div>


    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>    
    <script src="<?php echo BASE_URL; ?>assets/js/validate/jquery.validate.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/login-register.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEHqt9IPMOV3TaavbYSgotUUdbXLK6gM"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/infobox.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/markerclusterer_packed.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/richmarker-compiled.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/markerwithlabel_packed.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/masonry.pkgd.min.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/maps.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/republic.js"></script>

    <!--[if lte IE 9]>
    <script src="<?php echo BASE_URL; ?>assets/js/ie.js"></script>
    <![endif]-->

    <script>
        var _latitude = -20.759840;
        var _longitude = -42.864576;
        var element = "map-item";
        var useAjax = true;
        bigMap(_latitude,_longitude, element, useAjax);
    </script>
</body>
</html>
 

 

