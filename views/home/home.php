    <div id="page-content">
             <div class="hero-section" data-height="600">
            <form id="form-hero" action="<?php echo BASE_URL; ?>republic/list">
                <div class="hero-inner">
                    <div class="hero-wrapper" >
                        <div class="caption">
                            <div class="inner">
                                <div class="container">
                                    <h1 class="center">Encontre sua melhor república !</h1>
                                    <div class="row no-gutters">
                                        <div class="col-md-8 col-sm-8">
                                            <div class="form-group">
                                                <label class="label-on-input" for="address-autocomplete">Palavra Chave</label>
                                                <input type="text" class="form-control" id="address-autocomplete" name="search" placeholder="Ex: UFV, Univiçosa, FDV, Churrasco, Piscina, Estudo....">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Procurar</button>
                                            </div>
                                        </div>
                                    </div>
            </form>
                                    <div class="favorite-search">
                                        <span>Pesquisas Favoritas</span>
                                        <a href="<?php echo BASE_URL; ?>republic/list?search=UFV">UFV</a>
                                        <a href="<?php echo BASE_URL; ?>republic/list?search=Univiçosa">Univiçosa</a>
                                        <a href="<?php echo BASE_URL; ?>republic/list?search=UFV">FDV</a>
                                    </div>
                                    <!--end favorite-searches-->
                                </div>
                                <!--end container-->
                                <div class="bg-transfer"><img src="assets/img/vicosa_fundo.jpg" alt=""></div>
                                <!--end bg-transfer-->
                            </div>
                            <!--end inner-->
                        </div>
                        <!--end caption-->
                        <div class="options">
                            <div class="container">
                                <div class="wrapper">
                                    <form action="<?php echo BASE_URL; ?>republic/list">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-7">
                                                <!--colocar algumas de nossas republicas-->
                                        </div>
                                        <!--end col-md-8-->
                                       
                                        
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end container-->
                        </div>
                        <!--end options-->
                    </div>
                    <!--end hero-wrapper-->
                    <div id="options-hidden" class="collapse">

                                <div class="row" style="text-align: center !important">                                    
                                    <!--end col-md-8-->
                                    <?php if ($republics_registered != 0): ?>
                                        <div class="block">
                                            <div class="container">
                                                <div class="title">
                                                    <h2>Conheça nossas repúblicas</h2>
                                                </div>
                                                <!--end title-->
                                                <div class="row" style="margin-left: 18%">
                                                    <div class="col-md-9 col-sm-8">
                                                        <div class="row">
                                                            <?php foreach ($republics_registered as $key => $value): ?>
                                                                <div class="col-md-3 col-sm-6">
                                                                    <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['id_republic']; ?>" class="item small">
                                                                        <div class="image">
                                                                            <div class="info">
                                                                                <figure class="label label-info"><?php echo $value['property_type']; ?></figure>
                                                                                <aside>
                                                                                    <h3><?php echo $value['name']; ?></h3>
                                                                                </aside>
                                                                            </div>
                                                                            <div class="wrapper">
                                                                                <div class="gallery">
                                                                                    <img src="<?php echo BASE_URL; ?><?php echo $value['images'][0]['way']; ?>" alt="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--end image-->
                                                                        <div class="description">
                                                                            <div class="meta">
                                                                                <span><i class="fa fa-handshake-o"></i>8.9</span>
                                                                                <span><i class="fa fa-users"></i>250</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--end description-->
                                                                    </a>
                                                                    <!--end item-->
                                                                </div>    
                                                                <?php endforeach ?>
                                    
                                    
                                </div>
                                <!--end row-->
                                <a href="listing.html" class="pull-right">Ver todas</a>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <a href="#" class="advertising-banner">
                                    <img src="<?php echo BASE_URL; ?>assets/img/ads_republicasON.png" alt="">
                                </a>
                    </div>
                    <!--end container-->
                </div>    
            <?php endif ?>
                                    
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end wrapper-->
                        </div>
                        <!--end container-->
                    </div>
                </div>
                <!--end hero-inner-->
                <div class="plate">
                    <a data-toggle="collapse" href="#options-hidden" aria-expanded="false" aria-controls="options-hidden">Algumas de nossas republicaslações</a>
                </div>
                <!--end plate-->
            
            <!--end form-->
            <div class="map-wrapper">
                <div class="plate white">
                    <a href="#" data-switch="#form-hero">Mostra Mapa</a>
                </div>
                <!--end plate-->
                <div id="map-item" class="map height-100"></div>
                <!--<img src="assets/img/map.jpg" alt="">-->
            </div>
        </div>
            <!--end hero-section-->
            <?php if ($republics_vacancies != 0) : ?>
                <div class="block">
                    <div class="container">
                        <div class="title">
                            <h2>Vagas Disponíveis <span><a href="<?php echo BASE_URL; ?>republic/list?vacancies=true" class="btn btn-primary">Ver mais...</a></span></h2>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                        <a href="#" class="advertising-banner equal-height">
                                            <!-- <span class="banner-badge">Advertising</span> -->
                                            <img src="<?php echo BASE_URL; ?>assets/img/ad_fidelidade.png" alt="">
                                        </a>
                            </div>
                            <?php foreach ($republics_vacancies as $key => $value): ?>
                               
                            <div class="col-md-3 col-sm-6">
                                        <div class="item big equal-height" data-map-latitude="48.87" data-map-longitude="2.29" data-id="2">
                                            <div class="item-wrapper">
                                                <div class="image">
                                                    <div class="mark-circle description" data-toggle="tooltip" data-placement="right" title="<?php echo $value['republics_info']['culture']; ?>"></i></div>
                                                    <!-- mapa aqui
                                                    <div class="mark-circle map" data-toggle="tooltip" data-placement="right" title="Mostrar o mapa"><i class="fa fa-map-marker"></i></div>
                                                    -->
                                                    <?php if ($value['republics_info']['verified'] != 0): ?>
                                                        <div class="mark-circle top" data-toggle="tooltip" data-placement="right" title="República Verificada">
                                                            <i class="fa fa-thumbs-up"></i>
                                                        </div>
                                                        
                                                    <?php endif; ?>
                                                    
                                                    <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['republics_info']['id_republic']; ?>" class="wrapper">
                                                        <div class="gallery">
                                                            <?php foreach ($value['republics_info']['images'] as $key2 => $value2): ?>
                                                                <?php if ($key2 == 0): ?>                                                               
                                                                    <img src="<?php echo BASE_URL; ?><?php echo $value2['way']; ?>" alt="">    
                                                                <?php else: ?>
                                                                    <img src="#" class="owl-lazy" alt="" data-src="<?php echo BASE_URL; ?><?php echo $value2['way']; ?>">

                                                                <?php endif; ?>
                                                                   
                                                            <?php endforeach; ?>
                                                            
                                                        </div>
                                                    </a>
                                                    <div class="owl-navigation"></div>
                                                    <!--end owl-navigation-->
                                                </div>
                                                <!--end image-->
                                                <div class="description">
                                                    <div class="meta">
                                                        <span><i class="fa fa-bed" title="vagas"></i><?php echo $value['vacancies']; ?></span>
                                                        <span><i class="fa fa-users" title="Moradores"></i><?php echo $value['republics_info']['residents']; ?></span>
                                                    </div>
                                                    <div class="info">
                                                        <small><?php echo $value['room_type']; ?></small>
                                                        <figure class="label label-info"><?php echo $value['republics_info']['property_type']; ?></figure>
                                                        <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['republics_info']['id_republic']; ?>"><h3><?php echo $value['republics_info']['name']; ?></h3></a>
                                                    </div>
                                                </div>
                                                <!--end description-->
                                                <div class="map-item">
                                                    <button class="btn btn-close"><i class="fa fa-close"></i></button>
                                                    <div class="map-wrapper"></div>
                                                </div>
                                                <!--end map-item-->
                                            </div>
                                        </div>
                            </div>
                            
                            <?php endforeach ?>
                            <?php if (count($republics_vacancies) < 3): ?>
                                <?php for($i = 0; $i < (3 - count($republics_vacancies));$i++ ) : ?>
                                            <div class="col-md-3 col-sm-12">
                                                <a href="#" class="advertising-banner equal-height">
                                                    <!-- <span class="banner-badge">Advertising</span> -->
                                                    <img src="<?php echo BASE_URL; ?>assets/img/register_repulic_default.jpg" alt="">
                                                </a>
                                            </div>
                                <?php endfor; ?>
                            <?php endif; ?>
                           
                            
                        

                        </div>
                        
                                 
                      
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>

            <?php endif; ?>
            <!--end block-->


            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="feature">
                                <aside class="circle">
                                    <i class="icon_house_alt"></i>
                                </aside>
                                <figure>
                                    <h3>+<?php echo count($republics_registered); ?> Repúblicas</h3>
                                    <p>Conheça as repúblicas de Viçosa, cadastre a sua!
                                    </p>
                                </figure>
                            </div>
                            <!--end feature-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="feature">
                                <aside class="circle">
                                    <i class="icon_box-checked"></i>
                                </aside>
                                <figure>
                                    <h3>Fácil utilização</h3>
                                    <p>Crie, pesquise ou conheça de forma fácil e intuitiva.
                                    </p>
                                </figure>
                            </div>
                            <!--end feature-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="feature">
                                <aside class="circle">
                                    <i class="icon_gift"></i>
                                </aside>
                                <figure>
                                    <h3>Benefícios</h3>
                                    <p>Divulgue seus eventos, encontre vagas, conheça novas
                                        repúblicas.
                                    </p>
                                </figure>
                            </div>
                            <!--end feature-->
                        </div>
                        <!--end col-md-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
                <div class="space"></div>
            </div>
            <!--end block-->
            <!-- conheça -->
            <div class="block">
                <div class="container">
                    <div class="title">
                        <h2 class="center">Conheça:</h2>
                    </div>
                    <!--end title-->
                    <div class="gallery-carousel">
                        <div class="gallery-item">
                            <a href="blog-detail.html"><div class="image"><img src="<?php echo BASE_URL; ?>assets/img/visit/museu_zoologia.jpg" alt=""></div></a>
                            <div class="description">
                                <a href="blog-detail.html"><h3>Museu de Zoologia João Moojen</h3></a>
                                <figure>Foto: Museu de zoologia</figure>
                                <p> Este é um lugar com muita história embutida, e que pode lhe proporcionar experiências incríveis. </p>
                            </div>
                        </div>
                        <!--end gallery-item-->
                        <div class="gallery-item">
                            <a href="blog-detail.html"><div class="image"><img src="<?php echo BASE_URL; ?>assets/img/visit/ufv.jpg" alt=""></div></a>
                            <div class="description">
                                <a href="blog-detail.html"><h3>Universidade Federal de Viçosa</h3></a>
                                <figure>Foto: Tripadvisor</figure>
                                <p>UFV além de ser reconhecida como uma das melhores universidade do Brasil, possui um vasto campo com lindas paisagens e lugares. </p>
                                
                            </div>
                        </div>
                        <!--end gallery-item-->
                        <div class="gallery-item">
                            <a href="blog-detail.html"><div class="image"><img src="<?php echo BASE_URL; ?>assets/img/visit/antiga_estacao_ferroviaria.jpg" alt=""></div></a>
                            <div class="description">
                                <a href="blog-detail.html"><h3>Antiga estação Ferroviária</h3></a>
                                <figure>Foto: Gustavo Torres</figure>
                                <p>Local histórico, atualmente usado para diversos eventos culturais da cidade. </p>
                            </div>
                        </div>
                        <!--end gallery-item-->
                        <div class="gallery-item">
                            <a href="blog-detail.html"><div class="image"><img src="<?php echo BASE_URL; ?>assets/img/visit/cristo_redentor.jpg" alt=""></div></a>
                            <div class="description">
                                <a href="blog-detail.html"><h3>Parque municipal do Cristo Redentor</h3></a>
                                <figure>Foto: Primeiro a saber</figure>
                                <p>Um lindo ponto turístico, com uma vista surpreedente de nossa cidade. </p>
                            </div>
                        </div>
                       
                        <!--end gallery-item-->
                    </div>
                    <!--end gallery-carousel-->
                </div>
                <!--end container-->
                <div class="bg opacity-30">
                    <img src="<?php echo BASE_URL; ?>assets/img/bg-map.jpg" alt="">
                </div>
            </div>
            <!--end conheça -->
        </div>