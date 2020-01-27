
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
                <li><a href="#">República</a></li>
                <li class="active"><?php echo $republics_info['name']; ?></li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>Pesquisar</h2>
                            <form id="form-filter" class="labels-uppercase">
                                <div class="form-group">
                                    <label for="form-filter-destination">Pesquisa</label>
                                    <input type="text" class="form-control" id="form-filter-destination" name="destination" placeholder="Digite ...">
                                </div>
                                
                                <div class="center">
                                    <a href="#filter-advanced-search" class="link icon" data-toggle="collapse" aria-expanded="false" aria-controls="filter-advanced-search">Outras Opções<i class="fa fa-plus"></i></a>
                                </div>
                                <div class="collapse" id="filter-advanced-search">
                                    <div class="wrapper">
                                        <section>
                                            <h3>Mensalidade</h3>
                                            <ul class="checkboxes list-unstyled">
                                                <li><label><input type="checkbox" name="hotel">$0 - $250<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="apartment">$251 - $450<span>48</span></label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">$150+<span>56</span></label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </section>
                                        <!--end section-->
                                        <section>
                                            <h3>Tipo de Propriedade </h3>
                                            <ul class="checkboxes">
                                                <li><label><input type="checkbox" name="hotel">Apartamento<span>67</span></label></li>
                                                <li><label><input type="checkbox" name="apartment">Hotel<span>31</span></label></li>
                                                <li><label><input type="checkbox" name="breakfast-only">Sítio / Chácara<span>68</span></label></li>
                                                <li><label><input type="checkbox" name="spa-wellness">Casa<span>52</span></label></li>
                                            </ul>
                                            <div class="collapse" id="all-property-types">
                                                <ul class="checkboxes">
                                                    <li><label><input type="checkbox" name="ski-center">Flat<span>67</span></label></li>
                                                </ul>
                                            </div>
                                            <!--end checkboxes-->
                                            <a href="#all-property-types" class="link" data-toggle="collapse" aria-expanded="false" aria-controls="all-property-types">Mostra tudo</a>
                                        </section>
                                        <!--end section-->
                                        <section>
                                            <h3>Instalações</h3>
                                            <ul class="checkboxes no-bottom-margin">
                                                <li><label><input type="checkbox" name="wi-fi">Wi-fi<span>12</span></label></li>
                                                <li><label><input type="checkbox" name="free-parking">Piscina<span>48</span></label></li>
                                                <li><label><input type="checkbox" name="airport">Animal de Estimação<span>36</span></label></li>
                                                <li><label><input type="checkbox" name="family-rooms">Quarto Individual<span>56</span></label></li>
                                            </ul>
                                            <!--end checkboxes-->
                                        </section>
                                        <!--end section-->
                                    </div>
                                    <!--end filter-advanced-search-->
                                </div>
                                <!--end collapse-->
                                <div class="form-group center">
                                    <button type="submit" class="btn btn-primary btn-rounded form-control">Procurar</button>
                                </div>
                            </form>
                            <!--end form-filter-->
                        </div>
                        
                        <!--end box-->
                        <a href="#" class="advertising-banner">
                            <span class="banner-badge">Apoiadores</span>
                            <img src="<?php echo BASE_URL; ?>assets/img/ad-banner-02.jpg" alt="">
                        </a>
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9 col-sm-8">
                    <div class="quick-navigation" data-fixed-after-touch="">
                        <div class="wrapper">
                            <ul>
                                <li><a href="#description" class="scroll">Descrição</a></li>                               
                                <li><a href="#facilities" class="scroll">Instalações</a></li>
                                <?php if ($republics_info['vacancies'] > 0) : ?>
                                    <li><a href="#vacancies" class="scroll">Vagas</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="title">
                            <div class="left">
                                <h1><?php echo $republics_info['name']; ?>
                                    <span class="rating">
                                        <?php for ($i=0; $i < $republics_info['stars'] ; $i++) : ?>
                                            <i class="fa fa-star"></i>
                                        <?php endfor; ?>

                                    </span>
                                </h1>
                                <h3><a href="#"><?php echo $republics_info['administrator']['name']; ?></a> (administrador)</h3>
                            </div>
                            <div class="right">
                                <!-- <a href="#map" class="icon scroll"><i class="fa fa-map-marker"></i>See on the map</a> -->
                                <?php if ($republics_info['vacancies'] > 0) : ?>
                                    <a href="#availability" class="btn btn-primary btn-rounded scroll">Vagas</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end title-->
                        <section id="gallery">
                            <div class="gallery-detail">
                                <!-- <div class="ribbon"><div class="offer-number">20%</div><figure>Off Today!</figure></div> -->
                                <div class="one-item-carousel">
                                    <?php foreach ($republics_info['images'] as $key => $value): ?>
                                        <div class="image">
                                        <a href="#reviews" class="review scroll">
                                            <div class="rating">
                                                <p>
                                                    <?php echo $value['subtitle']; ?>
                                                </p>
                                            </div>
                                        </a>
                                        <img src="<?php echo BASE_URL; ?><?php echo $value['way'] ?>" alt="">
                                    </div>
                                        
                                    <?php endforeach ?>
                                    
                                </div>
                            </div>
                        </section>
                        <h2>Descrição</h2>
                        <div class="row">
                            <div class="col-md-8">
                                <section id="description">
                                    <?php echo $republics_info['culture']; ?>
                                </section>
                                <section id="facilities">
                                    <h2>Instalações</h2>
                                    <ul class="bullets half">
                                        <?php foreach ($republics_info['facilities'] as $key => $value): ?>
                                            <li><?php echo $value['name']; ?></li>     
                                        <?php endforeach; ?>
                                    </ul>
                                </section>
                            </div>
                            <!--end col-md-8-->
                            <div class="col-md-4">
                                <div class="sidebar">
                                    <aside class="box">
                                        <dl>
                                            <dt>Quartos Individuais:</dt>
                                            <dd><?php echo $republics_info['single_rooms']; ?></dd>
                                            <dt>Quartos Compartilhados</dt>
                                            <dd><?php echo $republics_info['collective_rooms']; ?></dd>
                                            <dt>Propriedade:</dt>
                                            <dd><?php echo $republics_info['property_type']; ?></dd>
                                            <dt>Categoria:</dt>
                                            <dd><?php echo $republics_info['category']; ?></dd>
                                            <dt>Total de moradores:</dt>
                                            <dd><?php echo $republics_info['residents']; ?></dd>
                                            
                                        </dl>
                                    </aside>
                                    <aside>
                                        <h2>Contato República</h2>
                                        <address>
                                            <strong>
                                                <a href="<?php echo BASE_URL; ?>administrator">
                                                    <?php echo $republics_info['administrator']['name']; ?> (administrador)
                                                </a>
                                            </strong><br>
                                            <?php echo $republics_info['address']['street']; ?>, <?php echo $republics_info['address']['number_republic']; ?> <br>
                                            <?php echo $republics_info['address']['neighborhood']; ?>, <?php echo $republics_info['address']['city']; ?> / <?php echo $republics_info['address']['state']; ?>  <br>
                                            

                                            <?php if ($republics_info['contact']['facebook'] != "not"): ?>
                                                <a href="<?php echo $republics_info['contact']['facebook']; ?>" target="_blank">Facebook</a><br> 
                                            <?php endif ?>
                                            <?php if ($republics_info['contact']['instagram'] != "not"): ?>
                                                <a href="<?php echo $republics_info['contact']['instagram']; ?>" target="_blank">Instagram</a><br> 
                                            <?php endif ?>
                                            <?php if ($republics_info['contact']['youtube'] != "not"): ?>
                                                <a href="<?php echo $republics_info['contact']['youtube']; ?>" target="_blank">Youtube</a><br> 
                                            <?php endif ?>
                                            
                                            
                                        </address>
                                    </aside>
                                </div>
                                <!--end sidebar-->
                            </div>
                            <!--end col-md-4-->
                        </div>
                        <!--end row-->
                        <section >
                            <h2>Por que escolher escolher RepúblicaON</h2>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="feature">
                                        <aside class="circle">
                                            <i class="icon_box-checked"></i>
                                        </aside>
                                        <figure>
                                            <h3>+200 visitas por dia</h3>
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
                                            <h3>50 repúblicas</h3>
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
                                            <h3>Eventos e Oportunidades</h3>
                                        </figure>
                                    </div>
                                    <!--end feature-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                        </section>
                        <?php if ($republics_vacancies != 0) : ?>
                            <section id="vacancies">
                                <h2>Vagas</h2>
                                <div class="form-reservations">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Tipo de Quarto</th>
                                                <th>Valor</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <?php foreach ($republics_vacancies as $key => $value): ?>
                                        <form id="room_<?php echo $key; ?>" >
                                            <table class="table">
                                                <tbody>
                                                    <tr class="room">
                                                        <td class="room-type">
                                                            <a href="#"><h3><?php echo $value['room_type']; ?></h3></a>
                                                            <p>Descrição
                                                                <?php echo $value['description'];  ?>
                                                            </p>
                                                        </td>
                                                        <td class="price">
                                                            
                                                            <?php echo 'R$ ' . number_format($value['monthly_expense'], 2, ',', '.'); ?></td>
                                                        <td>
                                                            <div class="form-group">
                                                                <a href="https://api.whatsapp.com/send?phone=5531998131909&text=Ol%C3%A1%20<?php echo $republics_info['administrator']['name']; ?>%2C%20gostaria%20de%20saber%20sobre%20a%20vaga%20da%20<?php echo $republics_info['name']; ?>..." type="submit" class="btn btn-primary btn-rounded" target="_blank" >Agendar Visita</a>
                                                            </div>
                                                            <!--end form-group-->
                                                        </td>
                                                    </tr>
                                                    <!--end tr.room-->
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </form>   
                                    <?php endforeach; ?>
                                    

                                    
                                </div>
                                <!--end form-reservations-->
                            </section>
                        <?php endif; ?>                       
                       
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

   


<div class="message-popup bottom-left" data-show-after-time="2000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <p>15 people are watching this accommodation.</p>
</div>

<div class="message-popup bottom-left featured" data-show-after-time="4000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <div class="title">Just Booked!</div>
    <p>Hurry up! This accommodation was just booked. Don’t miss the chance!</p>
</div>

<div class="message-popup bottom-left" data-show-after-time="5000" data-close-after-time="5000">
    <div class="close"><i class="fa fa-times"></i></div>
    <p>Last booking was from <strong>France</strong></p>
</div>
