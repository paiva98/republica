
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
                <li><a href="#">República</a></li>
                <li class="active">Registrar</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1>Informações da República</h1>
                </div>
                <!--end title-->
                <div class="quick-navigation" data-fixed-after-touch="">
                    <div class="wrapper">
                        <ul>
                            <li><a href="#main-information" class="scroll">Informações Principais</a></li>
                            <li><a href="#location" class="scroll">Localização</a></li>
                            <li><a href="#gallery" class="scroll">Galeria</a></li>
                            <li><a href="#facilities" class="scroll">Instalações</a></li>
                        </ul>
                    </div>
                </div>
                <!--end quick-navigation-->
                <form method="POST" class="form-submit labels-uppercase" id="form-submit" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>republic/register" >
                    <section id="main-information">
                        <div class="title">
                            <h2>Informações da Repúblicas</h2>
                            <aside class="step">1</aside>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="form-submit-title">Nome<em>*</em></label>
                                    <input type="text" class="form-control" id="form-submit-title" name="name" placeholder="República InfoCept" required="">
                                    <div id="resposta"></div>
                                </div>
                                <!--end form-group-->
                            </div>
                          
                            
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="object-type">Categoria</label>
                                    <select class="framed width-100" name="category" id="object-type">
                                        <option value="Mista">Mista</option>
                                        <option value="Feminina">Feminina</option>
                                        <option value="LGBT">LGBT</option>
                                        <option value="Masculina">Masculina</option>
                                        
                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-5-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="form-submit-description">Tags (Auxilia em busca pelo site, separe com ;{ponto é vírgula} cada tag )<em></em></label>
                                    <input type="text" class="form-control" id="form-submit-title" name="tags" placeholder="Ex: UFV; Univiçosa; Festas" >
                                    
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="form-submit-description">Descreva a filosofia da República<em></em></label>
                                    <textarea class="form-control" id="form-submit-description" rows="4" name="culture" required="" placeholder=""></textarea>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="object-type">Tipo de Propriedade</label>
                                    <select class="framed width-100" name="propriety_type" id="object-type">             
                                        <option value="Casa">Casa</option>
                                        <option value="Apartamento">Apartamento</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="Flet">Flet</option>
                                        <option value="Sítio / Chácara">Sítio / Chácara  </option>
                                        <option value="Apart Hotel">Apart Hotel</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>

                            <div class="col-md-5">
                                
                                <div class="form-group-inline">
                                    
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="number-of-rooms_1">Quantidade de Quartos</label>
                                        <input type="number" class="form-control" id="number-of-rooms_1" name="rooms" placeholder="Informe a quantidade" value="0">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="beds_1">Total de Moradores</label>
                                        <input type="number" class="form-control" id="beds_1" name="total_residents" placeholder="Informe a quantidade" value="0">
                                    </div>
                                    <!--end form-group-->
                                </div>

                                
                            </div>
                            <!--end col-md-5-->


                        </div>
                        <!--end row-->
                       
                    </section>
                    <section id="location">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h2>Localização</h2>
                                    <aside class="step">2</aside>
                                </div>
                                
                               
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-facebook">Rua</label>
                                        <input type="text" class="form-control" id="form-submit-facebook" name="street" placeholder="Rua ...">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-twitter">Número</label>
                                        <input type="text" class="form-control" id="form-submit-twitter" name="number" placeholder="10">
                                    </div>
                                </div>

                                <div class="form-group-inline">
                                     <div class="form-group">
                                        <label for="form-submit-twitter">Bairro</label>
                                        <input type="text" class="form-control" id="form-submit-twitter" name="neighborhood" placeholder="Centro">
                                    </div>

                                    <div class="form-group">
                                        <label for="form-submit-twitter">Complemento</label>
                                        <input type="text" class="form-control" id="form-submit-twitter" name="complement" placeholder="10">
                                    </div>

                                    <!--end form-group-->
                                </div>

                                <!--end form-group-inline-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-youtube">Cidade</label>
                                        <input type="text" class="form-control" id="form-submit-youtube" name="city" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="form-submit-youtube">Estado</label>
                                        <input type="text" class="form-control" id="form-submit-youtube" name="state" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="form-submit-youtube">CEP</label>
                                        <input type="text" class="form-control" id="form-submit-youtube" name="zip" placeholder="">
                                    </div>
                                   
                                </div>
                                <!--end checkboxes-->
                            </div>
                            <!--end col-md-7-->
                            <div class="col-md-6">
                                <h2>Informações de contato</h2>
                               
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-facebook">Link Página Facebook</label>
                                        <input type="text" class="form-control" id="form-submit-facebook" name="facebook" placeholder="www.facebook.com/yourhotel">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="form-submit-instagram">Link do Instagram</label>
                                        <input type="text" class="form-control" id="form-submit-instagram" name="instagram" placeholder="www.instagram.com/user">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end form-group-inline-->
                                <div class="form-group-inline">
                                    <div class="form-group">
                                        <label for="form-submit-youtube">Link do canal/vídeo do Youtube</label>
                                        <input type="text" class="form-control" id="form-submit-youtube" name="youtube" placeholder="www.youtube.com/yourhotel">
                                    </div>
                                   
                                </div>
                                <!--end form-group-inline-->
                            </div>
                            <!--end col-md-7-->
                        </div>
                        <!--end row-->
                    </section>
                    <section id="gallery">
                        <div class="title">
                            <h2>Galeria (No máximo 3 imagens)</h2>
                            <h6>847x501pixels</h6>
                            <aside class="step">3</aside>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                
                                <div class="file-upload" style="background-repeat: no-repeat;background-position: center;background-size: 100% 100%;">
                                    <input type="file" name="files[]" data-id="0" class="file-upload-input with-preview" title="Clique para adicionar a imagem" accept="gif|jpg|png">
                                    <span>Clique para adicionar a imagem</span>
                                </div>

                                <div class="form-group">
                                        <label for="subtitle1">Legenda 1</label>
                                        <textarea class="form-control subtitle" id="subtitle1" rows="4" name="subtitle[]" placeholder="Temos quartos com lindos..." disabled required></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="file-upload" style="background-repeat: no-repeat;background-position: center;background-size: 100% 100%;">
                                    <input type="file" name="files[]" data-id="1" class="file-upload-input with-preview" title="Clique para adicionar a imagem" accept="gif|jpg|png">
                                    <span>Clique para adicionar a imagem</span>
                                </div>

                                 <div class="form-group">
                                        <label for="subtitle2">Legenda 2</label>
                                        <textarea class="form-control subtitle" id="subtitle2" rows="4" name="subtitle[]"  placeholder="" disabled="" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="file-upload" style="background-repeat: no-repeat;background-position: center;background-size: 100% 100%;">
                                    <input type="file" name="files[]" data-id="2" class="file-upload-input with-preview" title="Clique para adicionar a imagem" accept="gif|jpg|png">
                                    <span>Clique para adicionar a imagem</span>
                                </div>

                                 <div class="form-group">
                                        <label for="subtitle3">Legenda 3</label>
                                         <textarea class="form-control subtitle"  id="subtitle3" rows="4" name="subtitle[]"  placeholder="" disabled="" required></textarea>
                                </div>
                            </div>

                        </div>
                      
                    </section>
                    <section id="facilities">
                        <div class="title">
                            <h2>Instalações</h2>
                            <aside class="step">4</aside>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                                <h3>Selecione</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="facilities[]" value="1">Wi-Fi</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="2">Piscina</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="3">Quartos Individuais</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="4">Diarista</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="5">Mobiliado</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="6">Garagem Moto</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="7">Garagem Bicileta</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="8">Garagem Carro</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>

                            <div class="col-md-6">
                                <h3>Selecione</h3>
                                <ul class="checkboxes inline half list-unstyled">
                                    <li><label><input type="checkbox" name="facilities[]" value="9">Quarto compartilhado</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="10" id="other_expenses_facilities">Despesas Inclusas</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="11">Animais de Estimação</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="12">Visita Externa</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="13">Área de Estudo</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="14">Área de Lazer</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="15">Cobertura</label></li>
                                    <li><label><input type="checkbox" name="facilities[]" value="16">Quintal</label></li>
                                </ul>
                                <!--end checkboxes-->
                            </div>
                          
                            
                            <!--end col-md-4-->
                        </div>
                       
                    </section>
                  
                    <hr>
                    <section>
                        <div class="form-group center">
                            <button type="submit" class="btn btn-primary btn-rounded btn-xlarge">Cadastrar</button>
                        </div>
                    </section>
                    <section>
                        <div class="center"><a href="#" class="btn btn-framed btn-default btn-rounded">Rever Dados</a></div>
                    </section>
                </form>
                <!--end form-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

   