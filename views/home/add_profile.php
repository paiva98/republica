
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">INICIO</a></li>
                <li><a href="#">REGISTRAR</a></li>
                <li class="active">ADMINISTRADOR</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1 class="inactive"><a href="my-accommodations.html">Minha República</a></h1>
                    <h2><a href="profile.html">Administrador</a></h2>
                    <?php if (isset($_SESSION['error_register']) && !empty($_SESSION['error_register'])): ?>
                        <br>
                        <center><h2 class="alert alert-danger"><?php echo $_SESSION['error_register']; ?></h2></center>    
                    <?php endif ?>
                    
                </div>
                <!--end title-->
                <div class="row">
                    <div class="col-md-12">
                        <form id="form-profile" class="labels-uppercase" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <!--Profile Picture-->
                                <div class="col-md-3 col-sm-3">
                                    <section>
                                        <h3>Foto de Perfil</h3>
                                        <div id="profile-picture" class="profile-picture single-file-preview">
                                            <img src="<?php echo BASE_URL; ?>assets/img/icon_perfil_register.jpg" alt="" class="image">
                                            <div class="input">
                                                <input name="avatar" type="file" class="">
                                                <span>Clique para carregar a imagem</span>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--end col-md-3-->

                                <!--Contact Info-->
                                <div class="col-md-9 col-sm-9">
                                    <section>
                                        <h3>Informações de Login</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="name">Nome</label>
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe"  required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">E-mail</label>
                                                    <input type="email_register" class="form-control" id="email_register" name="email" placeholder="janedoe@example.com" required="">
                                                    <div id='resposta'></div>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            
                                        </div>

                                        <div  class="row">
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="password">Senha</label>
                                                    <input type="password" class="form-control" id="password" name="password" required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="confirm_password">Confirmar Senha</label>
                                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" >
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                        </div>
                                    </section>
                                    <section>
                                        <h3>Endereço</h3>
                                        
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="state">Estado</label>
                                                    <input type="text" class="form-control" id="state" name="state" placeholder="2050 Sampson Street" required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                            <div class="col-md-2 col-sm-2">
                                                <div class="form-group">
                                                    <label for="city">Cidade</label>
                                                    <input type="text" class="form-control" id="city" name="city" placeholder="2050" required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="neighborhood">Bairro</label>
                                                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" >
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="street">Rua</label>
                                                    <input type="text" class="form-control" id="street" name="street" placeholder="2050 Sampson Street" required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                            <div class="col-md-2 col-sm-2">
                                                <div class="form-group">
                                                    <label for="number">Número</label>
                                                    <input type="text" class="form-control" id="number" name="number" placeholder="2050" required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="zip">CEP</label>
                                                    <input type="text" class="form-control" id="zip" name="zip" >
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="form-group">
                                            <label for="additional-address">Complemento</label>
                                            <input type="text" class="form-control" id="additional-address" name="additional-address" >
                                        </div>
                                        <!--end form-group-->
                                    </section>
                                    <section>
                                        <h3>Informações socais</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="facebook">Facebook</label>
                                                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="https://www.facebook.com/profile.php?id=100011726263239">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="instagram">Instagram</label>
                                                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="janedoe@example.com">
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="whatsapp">Whatsapp</label>
                                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="another_phone">Outro Telefone</label>
                                                    <input type="text" class="form-control" id="another_phone" name="another_phone" >
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            
                                        </div>
                                    </section>
                                   
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-large btn-primary btn-rounded" id="submit">Cadastrar Administrador</button>
                                    </div>
                                    <!-- end form-group -->
                                </div>
                                <!--end col-md-6-->
                            </div>
                        </form>
                    </div>
                    <!--Password-->
                    
                    <!-- end col-md-3-->
                </div>
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
