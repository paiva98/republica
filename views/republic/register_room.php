
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo BASE_URL; ?>">Inicio</a></li>
                <li><a href="#">República</a></li>
                <li class="active">Quartos</li>
            </ol>
            <!--end breadcrumb-->
            <div class="main-content">
                <div class="title">
                    <h1> <?php echo $republics_info['name']; ?> - Quartos  </h1>
                </div>
                
                <!--end quick-navigation-->
                <form class="form-submit labels-uppercase" id="form-submit" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>republic/register_rooms/<?php echo $republics_info['id_republic']; ?>" method="POST">
                    <section id="main-information">
                       
                        <?php for ($i=1; $i <= $republics_info['qtd_rooms'] ; $i++) : ?>
                            <div class="row">
                                <div class="col-md-5">
                                    <h3>Quarto <?php echo $i; ?>  <i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="As informações dos quartos, só serão exibidas quando ele tiver vagas."></i></h3>
                                    <div class="form-group-inline">
                                        <div class="form-group width-60">
                                            <label>Tipo de Quarto</label>
                                            <select class="framed width-100" name="room_type[]" >
                                                <option value="Individual">Individual</option>
                                                <option value="Compartilhado">Compartilhado</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="number-of-rooms_<?php echo $i; ?>">Valor</label>
                                            <input type="number" class="form-control" id="number-of-rooms_<?php echo $i; ?>" name="room_price[]" value="0">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="beds_<?php echo $i; ?>">Vagas</label>
                                            <input type="number" class="form-control" id="beds_<?php echo $i; ?>" name="room_vacancies[]" value="0">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end form-group-inline-->
                                    
                                   
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="form-submit-description">Descrição <em>*</em></label>
                                        <textarea class="form-control" id="form-submit-description" rows="3" name="description_room[]" placeholder="Descreva o quarto">O quarto que você procurava !!!</textarea>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                
                                <!--end col-md-5-->
                            </div>
                        <?php endfor; ?>


                       
                        <!--end row-->
                    </section>
                    
                    <hr>
                    <section>
                        <div class="form-group center">
                            <button type="submit" class="btn btn-primary btn-rounded btn-xlarge">Cadastrar Quartos</button>
                        </div>
                    </section>
                </form>
                <!--end form-->
            </div>
            <!--end main-content-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

   