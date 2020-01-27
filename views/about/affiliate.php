
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
                            <h1>Torne-se um administrador ON</h1>
                        </div>
                        <!--end title-->
                        <section>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="feature-simple">
                                        <div class="circle">
                                            <span>1</span>
                                            <div class="bg color dark opacity-30"></div>
                                        </div>
                                        <h3>Registre</h3>
                                        <p>Registre fornecendo informações sobre você.
                                        </p>
                                        <a href="<?php echo BASE_URL; ?>home/register" class="btn btn-framed btn-small btn-default btn-rounded">Registar agora</a>
                                    </div>
                                    <!--feature-simple-->
                                </div>
                                <!--col-md-4-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="feature-simple">
                                        <div class="circle">
                                            <span>2</span>
                                            <div class="bg color dark opacity-50"></div>
                                        </div>
                                        <h3>Adicione sua república</h3>
                                        <p>Registre sua república fornecendo informações sobre ela.
                                        </p>
                                        <?php if (!isset($_SESSION['administrator_online']) || empty($_SESSION['administrator_online'])): ?>
                                            <a href="#" class="scroll btn btn-framed btn-small btn-default btn-rounded" onclick="alert('Registre ou faça login');">Login / Registrar</a>    
                                        <?php else: ?>
                                            <a href="<?php echo BASE_URL; ?>republic/register" class="scroll btn btn-framed btn-small btn-default btn-rounded">Registrar republica</a>
                                        <?php endif; ?>
                                    </div>
                                    <!--feature-simple-->
                                </div>
                                
                            </div>
                        </section>
                        <hr>
                       
                        <section>
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <h2>Por que ser um administrador ON?</h2>
                                    <ul class="bullets">
                                        <li>Baixo custo ou nenhum de divulgação</li>
                                        <li>Facilidade em encontrar diretamente a melhor república para você</li>
                                        <li>Receba dicas mais atraente para os estudantes</li>
                                        <li>Divulgue seu evento</li>
                                    </ul>
                                </div>
                                <!--end col-md-7-->
                                <div class="col-md-5 col-sm-5">
                                    <h2>Comentários de Administradores</h2>
                                    <div class="blockquote-carousel one-item-carousel">
                                        <blockquote>
                                            <p>Ótima plataforma, organização e divulgação de repúblicas
                                            </p>
                                            <footer>Fernando Alves</footer>
                                        </blockquote>
                                        <blockquote>
                                            <p>Perfeita, estou adorando !
                                            </p>
                                            <footer>Victor Santos</footer>
                                        </blockquote>
                                    </div>
                                    <!--end blockquote-carousel-->
                                </div>
                                <!--end col-md-5-->
                            </div>
                            <!--end row-->
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
    <!--end page-content-->
