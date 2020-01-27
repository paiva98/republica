
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
                <li><a href="<?php echo BASE_URL; ?>administrator">Perfil</a></li>
                <li class="active">Minhas Repúblicas</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1 class="inactive"><a href="my-accommodations.html">Administrador</a></h1>
                    <h2><a href="profile.html">Perfil</a></h2>
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
                                            <img src="<?php echo BASE_URL; ?><?php echo $administrator_info['img_profile']; ?>" alt="" class="image">
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
                                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $administrator_info['name']; ?>"  required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">E-mail</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $administrator_info['login']; ?>" disabled>
                                                    <div id='resposta'></div>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                           
                                        </div>
                                    </section>
                                    <section>
                                        <h3>Endereço</h3>
                                        <div class="form-group">
                                            <label for="state">Estado</label>
                                            <input type="text" class="form-control" id="state" name="state" value="<?php echo $administrator_info['administrator_address']['state']; ?>" required="">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="city">Cidade</label>
                                            <input type="text" class="form-control" id="city" name="city" value="<?php echo $administrator_info['administrator_address']['city']; ?>" required="">
                                        </div>
                                        <!--end form-group-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="street">Rua</label>
                                                    <input type="text" class="form-control" id="street" name="street" value="<?php echo $administrator_info['administrator_address']['street']; ?>" required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                            <div class="col-md-2 col-sm-2">
                                                <div class="form-group">
                                                    <label for="number">Número</label>
                                                    <input type="text" class="form-control" id="number" name="number" value="<?php echo $administrator_info['administrator_address']['number_house']; ?>" required="">
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <label for="zip">CEP</label>
                                                    <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $administrator_info['administrator_address']['zip']; ?>" >
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                               <div class="form-group">
                                                    <label for="neighborhood">Bairro</label>
                                                    <input type="text" class="form-control" id="neighborhood" name="neighborhood" value="<?php echo $administrator_info['administrator_address']['neighborhood']; ?>" >
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                            <div class="col-md-6 col-sm-6">
                                               <div class="form-group">
                                                    <label for="complement">Complemento</label>
                                                    <input type="text" class="form-control" id="complement" name="complement" value="<?php echo $administrator_info['administrator_address']['complement']; ?>" >
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                           
                                        </div>

                                        
                                        <!--end form-group-->
                                    </section>
                                    <section>
                                        <h3>Informações socais</h3>
                                        <div class="row">
                                            <?php if ($administrator_info['administrator_social_information']['facebook'] != "not"): ?>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $administrator_info['administrator_social_information']['facebook']; ?>">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                
                                            <?php else: ?>

                                                 <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="text" class="form-control" id="facebook" name="facebook" value="">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>


                                            <?php endif; ?>
                                           
                                            <?php if ($administrator_info['administrator_social_information']['instagram'] != "not"): ?>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $administrator_info['administrator_social_information']['instagram']; ?>">">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                
                                            <?php else: ?>

                                                 <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" class="form-control" id="instagram" name="instagram" value="">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>


                                            <?php endif; ?>
                                           
                                            <?php if ($administrator_info['administrator_social_information']['whatsapp'] != "not"): ?>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="whatsapp">Whatsapp</label>
                                                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?php echo $administrator_info['administrator_social_information']['whatsapp']; ?>">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>

                                                <?php else: ?>

                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="whatsapp">Whatsapp</label>
                                                            <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>


                                                <?php endif; ?>

                                            <?php if ($administrator_info['administrator_social_information']['another_phone'] != "not"): ?>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="another_phone">Outro Telefone</label>
                                                        <input type="text" class="form-control" id="another_phone" name="another_phone" value="<?php echo $administrator_info['administrator_social_information']['another_phone']; ?>" >
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                            
                                            <?php else: ?>

                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="another_phone">Outro Telefone</label>
                                                            <input type="text" class="form-control" id="another_phone" name="another_phone" value="">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>


                                            <?php endif; ?>
                                            
                                        </div>
                                    </section>
                                   
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-large btn-primary btn-rounded" id="submit">Alterar Dados</button>
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
