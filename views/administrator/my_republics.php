
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
                <li><a href="<?php echo BASE_URL; ?>administrator">Perfil</a></li>
                <li class="active">Minhas Repúblicas</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="box filter">
                            <h2>Perfil</h2>
                            <ul class="links">
                                <li class="active"><a href="<?php echo BASE_URL; ?>administrator">Minhas Repúblicas</a></li>
                                <li><a href="<?php echo BASE_URL; ?>administrator/profile">Meu perfil</a></li>
                                <li><a href="<?php echo BASE_URL; ?>administrator/terms_commitments">Termos e Compromissos</a></li>
                            </ul>
                        </div>
                        <!--end filter-->
                    </div>
                    <!--end sidebar-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-9">
                    <div class="main-content">
                        <div class="title text-center">
                            <a href="<?php echo BASE_URL; ?>republic/register" class="btn btn-info ">Cadastrar Nova República</a>
                        </div>
                        
                        <section>
                            <h1>Minhas Repúblicas</h1>
                            <?php if ($republics_list != 0): ?>
                                <div class="row">
                                    <?php foreach ($republics_list as $key => $value): ?>
                                        <div class="col-md-6">
                                            <div class="member">
                                                <div class="image">
                                                    <a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['id_republic']; ?>">
                                                        <img src="<?php echo BASE_URL; ?><?php echo $value['images'][0]['way']; ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="description">
                                                    <h3><?php echo $value['name']; ?></h3>
                                                    <div class="info">
                                                        <dl>
                                                            <dt>Moradores:</dt>
                                                            <dd><?php echo $value['residents']; ?></dd>
                                                            <dt>Vagas</dt>
                                                            <dd><?php echo $value['vacancies']; ?></dd>
                                                            <dt>Classificação:</dt>
                                                            <dd >
                                                                <?php for ($i=0; $i < $value['stars']; $i++) : ?>
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                <?php endfor; ?>
                                                            </dd>
                                                            <dt >Link:</dt>
                                                            <dd><a href="<?php echo BASE_URL; ?>republic/see/<?php echo $value['id_republic']; ?>"><?php echo $value['name']; ?></a></dd>
                                                            <dt>
                                                                <?php if (count($value['rooms']) > 0 ): ?>
                                                                    <span>
                                                                        <a href="<?php echo BASE_URL; ?>republic/edit_rooms/<?php echo $value['id_republic']; ?>" class="btn btn-info">Cadastrar Vaga
                                                                        </a>
                                                                    </span>
                                                                <?php else: ?>
                                                                    <span>
                                                                        <a href="<?php echo BASE_URL; ?>republic/register_rooms/<?php echo $value['id_republic']; ?>" class="btn btn-primary">Cadastrar Quartos
                                                                        </a>
                                                                    </span>
                                                                <?php endif; ?>
                                                            </dt>

                                                        </dl>
                                                    </div>
                                                    <!--end info-->
                                                </div>
                                                <!--end description-->
                                            </div>
                                            <!--member-->
                                        </div>    
                                    <?php endforeach ?>
                                    
                                </div>
                                
                            <?php else: ?>
                                <div class="row">
                                    Nenhuma republica cadastrada, <a href="<?php echo BASE_URL; ?>republic/register" class="btn btn-info ">Cadastrar Agora</a>
                                </div>

                               
                            <?php endif ?>


                               
                           
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


