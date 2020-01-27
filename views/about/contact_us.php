
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li class="active">About</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>Contate-nos</h2>
                            <ul class="links">
                                <li <?php echo ($active_menu == "home") ? "class='active'" : "class=''"; ?>><a href="<?php echo BASE_URL; ?>">Sobre Nós</a></li>
                                <li <?php echo ($active_menu == "affiliate") ? "class='active'" : "class=''"; ?>><a href="<?php echo BASE_URL; ?>about/affiliate">Torne-se um afiliado</a></li>
                                <li <?php echo ($active_menu == "terms_commitments") ? "class='active'" : "class=''"; ?>><a href="<?php echo BASE_URL; ?>about/terms_commitments">Termos & Condições</a></li>
                                <li <?php echo ($active_menu == "contact_us") ? "class='active'" : "class=''"; ?>><a href="<?php echo BASE_URL; ?>about/contact_us">Contate-Nos</a></li>
                            </ul>
                        </div>
                        <!--end filter-->
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title">
                            <h1>Contate-nos</h1>
                        </div>
                        <!--end title-->
                        <section>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <h2>Informações</h2>
                                    <address>
                                        (31) 9 9813 - 1909<br>
                                        <a href="#">contato@republicason.com.br</a><br>
                                    </address>
                                    
                                </div>
                                <div class="col-md-6">
                                    <h2>Social Profiles</h2>
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                    </div>   
                                </div>
                            </div>
                            <!--end row-->
                        </section>
                        <section>
                            <form class="labels-uppercase clearfix">
                                <h2>Dúvidas, críticas, sugestões</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-name">Nome:<em>*</em></label>
                                            <input type="text" class="form-control" id="form-contact-name" name="location" placeholder="Nome" required="">
                                        </div>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-email">E-mail:<em>*</em></label>
                                            <input type="email" class="form-control" id="form-contact-email" name="location" placeholder="E-mail" required="">
                                        </div>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="form-contact-message">Mensagem<em>*</em></label>
                                    <textarea class="form-control" id="form-contact-message" rows="8" name="form-contact-message" required="" placeholder="Mensagem"></textarea>
                                </div>
                                <!--end form-group-->
                                <div id="form-status" class="pull-left"></div>
                                <div class="form-group pull-right">
                                    <button type="submit" class="btn btn-primary btn-rounded">Enviar
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </section>
                    </div>
                    <!--end main-content-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>

<script>
    var _latitude = 48.47292127;
    var _longitude = 4.28672791;
    var element = "contact-map";
    simpleMap(_latitude,_longitude, element);
</script>
