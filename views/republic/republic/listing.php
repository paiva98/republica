
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASE_URL; ?>">INICIO</a></li>
                <li><a href="#">Repúblicas</a></li>
                <?php if (isset($category) && !empty($category)): ?>
                    <li class="active"><?php echo $category;  ?></li>
                <?php else: ?>
                    <li class="active">Listas</li>
                <?php endif ?>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>Pesquisar</h2>
                            <form id="form-filter" class="labels-uppercase">
                                <div class="form-group">
                                    <label for="form-filter-destination">Palavra Chave</label>
                                    <input type="text" class="form-control" id="form-filter-destination" name="Digite..." placeholder="Destination">
                                </div>
                                
                                <div class="center">
                                    <a href="#filter-advanced-search" class="link icon" data-toggle="collapse" aria-expanded="false" aria-controls="filter-advanced-search">Filtros Avançados<i class="fa fa-plus"></i></a>
                                </div>
                                <div class="collapse in" id="filter-advanced-search">
                                    <div class="wrapper">
                                        <h2>Filtros<span data-show-after-time="1000" data-container="body" data-toggle="popover" data-placement="right" title="Experimento os Filtros !" data-content="Obtenha melhores resultados usando filtros. Verifique o que você gosta e o que não gosta."></span></h2>
                                        <section>
                                            <h3>Mensal (em média)</h3>
                                            <ul class="checkboxes list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">$0 - $150</label></li>
                                                <li><label><input type="checkbox" name="apartment">$151 - $350</label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">$351 - $450</label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">$450+</label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </section>
                                        <!--end section-->
                                        <section>
                                            <h3>Tipo de Propriedade </h3>
                                            <ul class="checkboxes">
                                                <li><label><input type="checkbox" name="hotel">Apartamentos</label></li>
                                                <li><label><input type="checkbox" name="apartment">Hotel</label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">Casa</label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Sítio / Chacara</label></li>
                                            </ul>
                                            <div class="collapse" id="all-property-types">
                                                <ul class="checkboxes">
                                                    <li><label><input type="checkbox" name="ski-center">Ski Center<span>67</span></label></li>
                                                    <li><label><input type="checkbox" name="cottage">Cottage<span>31</span></label></li>
                                                    <li><label><input type="checkbox" name="hostel">Hostel<span>68</span></label></li>
                                                    <li><label><input type="checkbox" name="boat">Boat<span>52</span></label></li>
                                                </ul>
                                            </div>
                                            <!--end checkboxes-->
                                            <a href="#all-property-types" class="link" data-toggle="collapse" aria-expanded="false" aria-controls="all-property-types">Mostrar todas</a>
                                        </section>
                                        <!--end section-->
                                         <section>
                                            <h3>Instalações </h3>
                                            <ul class="checkboxes">
                                                <li><label><input type="checkbox" name="hotel">Wi-fi</label></li>
                                                <li><label><input type="checkbox" name="apartment">Animal</label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">Churrasqueira</label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Psicina</label></li>
                                            </ul>
                                            <div class="collapse" id="all-facilities">
                                                <ul class="checkboxes">
                                                    <li><label><input type="checkbox" name="ski-center">Ski Center<span>67</span></label></li>
                                                    <li><label><input type="checkbox" name="cottage">Cottage<span>31</span></label></li>
                                                    <li><label><input type="checkbox" name="hostel">Hostel<span>68</span></label></li>
                                                    <li><label><input type="checkbox" name="boat">Boat<span>52</span></label></li>
                                                </ul>
                                            </div>
                                            <!--end checkboxes-->
                                            <a href="#all-facilities" class="link" data-toggle="collapse" aria-expanded="false" aria-controls="all-facilities">Mostrar todas</a>
                                        </section>
                                        <!--end section-->
                                    </div>
                                    <!--end filter-advanced-search-->
                                </div>
                                <!--end collapse-->
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-primary btn-rounded form-control">Pesquisar</button>
                                </div>
                            </form>
                            <!--end form-filter-->
                        </div>
                        <!--end filter-->
                        <a href="#" class="advertising-banner">
                            <span class="banner-badge">Apoio</span>
                            <img src="<?php echo BASE_URL; ?>assets/img/ad-banner-02.jpg" alt="">
                        </a>
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <?php if ($republics_list != 0): ?>
                    <div class="col-md-9">
                        <div class="main-content">
                            <div class="title">
                                <h1>Repúblicas</h1>
                                
                            </div>
                            <?php if (isset($_GET['vacancies']) && !empty($_GET['vacancies'])): ?>
                            <?php foreach ($republics_list as $key => $value): ?>
                                <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                                    <div class="image-wrapper">
                                        <div class="image">
                                            <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['republics_info']['id_republic']; ?>" class="wrapper">
                                                <?php if (count($value['republics_info']['images']) > 1): ?>
                                                    <div class="gallery">
                                                <?php else: ?>
                                                    <div class="">
                                                <?php endif ?>
                                                        <?php foreach ($value['republics_info']['images'] as $key2 => $value2): ?>
                                                            
                                                                
                                                            
                                                            <?php if ($key2 == 0): ?>
                                                               <img src="<?php echo BASE_URL; ?><?php echo $value2['way']; ?>" alt=""> 
                                                            <?php else: ?>
                                                               <img src="#" class="owl-lazy" alt="" data-src="<?php echo BASE_URL; ?><?php echo $value2['way']; ?>">
                                                            <?php endif; ?>

                                                        <?php endforeach; ?>
                                                      
                                                    </div>
                                               

                                            </a>
                                            <div class="map-item">
                                                <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                                <div class="map-wrapper"></div>
                                            </div>
                                            <!--end map-item-->
                                            <div class="owl-navigation"></div>
                                            <!--end owl-navigation-->
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-bed"></i><?php echo $value['republics_info']['qtd_rooms']; ?></span>
                                        </div>
                                        <!--end meta-->
                                        <div class="info">
                                            <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['republics_info']['id_republic']; ?>"><h3><?php echo $value['republics_info']['name']; ?></h3></a>
                                            <figure class="location"><?php echo $value['republics_info']['category']; ?></figure>
                                            <figure class="label label-info"><?php echo $value['property_type']; ?></figure>
                                            <?php if ($value['vacancies'] > 0) : ?>
                                                <figure class="label label-primary">Há vagas</figure>
                                            <?php endif; ?>
                                            <p>
                                                <?php echo $value['republics_info']['culture']; ?>
                                            </p>
                                            <br>
                                            <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['republics_info']['id_republic']; ?>" class="btn btn-rounded btn-default btn-framed btn-small">Ver Detalhes</a>
                                        </div>
                                        <!--end info-->
                                    </div>
                                    <!--end description-->
                                </div>    
                            <?php endforeach ?>   
                            <?php else: ?>

                            
                            <?php foreach ($republics_list as $key => $value): ?>
                                <div class="item list" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                                    <div class="image-wrapper">
                                        <div class="image">
                                            <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['id_republic']; ?>" class="wrapper">
                                                <?php if (count($value['images']) > 1): ?>
                                                    <div class="gallery">
                                                <?php else: ?>
                                                    <div class="">
                                                <?php endif ?>
                                                        <?php foreach ($value['images'] as $key2 => $value2): ?>
                                                            
                                                                
                                                            
                                                            <?php if ($key2 == 0): ?>
                                                               <img src="<?php echo BASE_URL; ?><?php echo $value2['way']; ?>" alt=""> 
                                                            <?php else: ?>
                                                               <img src="#" class="owl-lazy" alt="" data-src="<?php echo BASE_URL; ?><?php echo $value2['way']; ?>">
                                                            <?php endif; ?>

                                                        <?php endforeach; ?>
                                                      
                                                    </div>
                                               

                                            </a>
                                            <div class="map-item">
                                                <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                                <div class="map-wrapper"></div>
                                            </div>
                                            <!--end map-item-->
                                            <div class="owl-navigation"></div>
                                            <!--end owl-navigation-->
                                        </div>
                                    </div>
                                    <!--end image-->
                                    <div class="description">
                                        <div class="meta">
                                            <span><i class="fa fa-bed"></i><?php echo $value['qtd_rooms']; ?></span>
                                        </div>
                                        <!--end meta-->
                                        <div class="info">
                                            <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['id_republic']; ?>"><h3><?php echo $value['name']; ?></h3></a>
                                            <figure class="location"><?php echo $value['category']; ?></figure>
                                            <figure class="label label-info"><?php echo $value['property_type']; ?></figure>
                                            <?php if ($value['vacancies'] > 0) : ?>
                                                <figure class="label label-primary">Há vagas</figure>
                                            <?php endif; ?>
                                            <p>
                                                <?php echo $value['culture']; ?>
                                            </p>
                                            <br>
                                            <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['id_republic']; ?>" class="btn btn-rounded btn-default btn-framed btn-small">Ver Detalhes</a>
                                        </div>
                                        <!--end info-->
                                    </div>
                                    <!--end description-->
                                </div>    
                            <?php endforeach ?>
                            <?php endif; ?>
                            
                            
                            <div class="center">
                                <ul class="pagination">
                                
                                    <?php for ($q = 1; $q <= $numberOfPages; $q++) : ?>
                                        <?php if ($currentPage == $q) : ?>
                                            <li class="active"><a href="#"><?php echo $q; ?></a></li>
                                        <?php else : ?>
                                            <?php if (!empty($category)): ?>
                                            <li><a href="<?php echo BASE_URL; ?>republic/list?p=<?php echo $q; ?>&search=<?php echo $category; ?>"><?php echo $q; ?></a></li>   
                                            <?php else: ?>
                                            <li><a href="<?php echo BASE_URL; ?>republic/list?p=<?php echo $q; ?>"><?php echo $q; ?></a></li>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </ul>
                                <!-- end pagination-->
                            </div>
                            <!-- end center-->
                        </div>
                        <!--end main-content-->
                    </div>
                <?php else: ?>
                    <div class="col-md-9">
                        <div class="main-content">
                            <div class="title">
                                <h1>Nenhuma república cadastrada</h1>
                                
                            </div>
                         
                     
                        </div>
                        <!--end main-content-->
                    </div>
                <?php endif; ?>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->


<div class="message-popup featured top-right" data-show-after-time="3000">
    <div class="close"><i class="fa fa-times"></i></div>
    <div class="title">Não tempo para pesquisar ?</div>
    <p>Digite seu nome e e-mail e nós lhe enviaremos algumas repúblicas com vagas.</p>
    <form class="labels-uppercase" id="form-popup">
        <div class="form-group">
            <label for="form-popup-name">Seu nome<em>*</em></label>
            <input type="text" class="form-control" id="form-popup-name" name="name" placeholder="Nome..." required="">
        </div>
        <div class="form-group">
            <label for="form-popup-email">Seu E-mail<em>*</em></label>
            <input type="email" class="form-control" id="form-popup-email" name="email" placeholder="E-mail..." required="">
        </div>
        <div class="form-group pull-right">
            <button type="submit" class="btn btn-white btn-framed btn-rounded">Me envie</button>
        </div>
    </form>
</div>
