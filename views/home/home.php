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
                                <div class="bg-transfer"><img src="assets/img/vicosa.jpeg" alt=""></div>
                                <!--end bg-transfer-->
                            </div>
                            <!--end inner-->
                        </div>
                        <!--end caption-->
                        <!-- Os filtros excluidos -->
                        <!--end options-->
                    </div>
                    <!--end hero-wrapper-->
                    <div id="options-hidden" class="collapse">
                        <div class="container">
                            <div class="wrapper">
                                <h2>Instalações</h2>
                                <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <ul class="checkboxes inline">
                                            <li><label><input type="checkbox" name="search_options">Wi-fi</label></li>
                                            <li><label><input type="checkbox" name="free-parking">Quintal</label></li>
                                            <li><label><input type="checkbox" name="airport">Animal de Estimação</label></li>
                                            <li><label><input type="checkbox" name="family-rooms">Área de lazer</label></li>
                                            <li><label><input type="checkbox" name="pets">Área de estudo</label></li>
                                            <li><label><input type="checkbox" name="restaurant">Quarto Individual</label></li>
                                            <li><label><input type="checkbox" name="indoor-pool">Quarto Compartilhado</label></li>
                                            <li><label><input type="checkbox" name="brakfast-only">Diarista</label></li>
                                        </ul>
                                        <!--end checkboxes-->
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4"></div>
                                    </form>
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
                    <a data-toggle="collapse" href="#options-hidden" aria-expanded="false" aria-controls="options-hidden">Opções de Instalações</a>
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
            <!--end block-->
            <!--
            <div class="container">
                <div class="block">
                    <form class="marketing-form">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group-inline vertical-align-middle no-margin">
                                    <div class="form-group">
                                        <h3 class="font-color-white no-margin"> Save up to 50% off your next trip</h3>
                                        <p class="font-color-white no-margin">Secret Deals – for our subscribers only</p>
                                    </div>
                                    <div class="form-group width-50">
                                        <input type="email" class="form-control input-dark" name="location" placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="bg color default"></div>
                </div>
            </div>
            -->
            <!--end block-->

            <!--
            <div class="block">
                <div class="container">
                    <div class="title">
                        <h2>Our Picks</h2>
                    </div>
                   
                    <div class="grid masonry">
                        <div class="grid-item">
                            <a href="#">
                                <h3>Switzerland</h3>
                                <img src="<?php echo BASE_URL; ?>assets/img/items/pick-01.jpg" alt="">
                            </a>
                        </div>
                        <div class="grid-item">
                            <a href="#">
                                <h3>Prague</h3>
                                <img src="<?php echo BASE_URL; ?>assets/img/items/pick-02.jpg" alt="">
                            </a>
                        </div>
                        <div class="grid-item grid-item--width2">
                            <a href="#">
                                <h3>Norway</h3>
                                <img src="<?php echo BASE_URL; ?>assets/img/items/pick-03.jpg" alt="">
                            </a>
                        </div>
                        <div class="grid-item grid-item--width2">
                            <a href="#">
                                <h3>Machu Picchu</h3>
                                <img src="<?php echo BASE_URL; ?>assets/img/items/pick-04.jpg" alt="">
                            </a>
                        </div>
                        <div class="grid-item">
                            <a href="#">
                                <h3>Tuscany</h3>
                                <img src="<?php echo BASE_URL; ?>assets/img/items/pick-05.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <!--end block-->
            <!--
            <div class="block">
                <div class="container">
                    <div class="title">
                        <h2>Favorite Destinations</h2>
                    </div>
                   
                   <ul class="list-links">
                       <li><a href="#">Tenerife<span>23</span></a></li>
                       <li><a href="#">Al Madinah<span>12</span></a></li>
                       <li><a href="#">Koh Samui<span>76</span></a></li>
                       <li><a href="#">Cotswolds<span>52</span></a></li>
                       <li><a href="#">Lake District<span>63</span></a></li>
                       <li><a href="#">Cornwall<span>15</span></a></li>
                       <li><a href="#">Algarve<span>19</span></a></li>
                       <li><a href="#">Ibiza<span>90</span></a></li>
                       <li><a href="#">New Forest<span>57</span></a></li>
                       <li><a href="#">Phuket Province<span>82</span></a></li>
                       <li><a href="#">Loch Lomond<span>24</span></a></li>
                       <li><a href="#">Gran Canaria<span>23</span></a></li>
                       <li><a href="#">Majorca<span>33</span></a></li>
                       <li><a href="#">Isle of Wight<span>74</span></a></li>
                       <li><a href="#">Jersey<span>51</span></a></li>
                       <li><a href="#">Isle of Man<span>23</span></a></li>
                       <li><a href="#">Santoríni<span>36</span></a></li>
                       <li><a href="#">Mykonos<span>55</span></a></li>
                       <li><a href="#">Lanzarote<span>78</span></a></li>
                       <li><a href="#">Bali<span>17</span></a></li>
                   </ul>
                    <!--end list-links-->
                </div>
                <!--end container-->
            </div>
            <!--end block-->

          
            <!--end block-->
    </div>

        