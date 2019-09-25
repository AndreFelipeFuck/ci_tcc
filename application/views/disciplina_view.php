<?php
include "cabeca.php";
?>
 <div class="container">
    <br><br><br/><br/>
    <table id="" class="table table-striped table-bordered" >

         
    <section class="conteiner0">
        <h1>Artigos de <?php echo $disciplinas->nomeDisciplina?></h1>
        <?php foreach($artigos as $artigo){?>
            <article class="vidCont">
                <?php
                    if($artigo->imgArtigo == null){?>
                        <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                <?php
                    }else{?>
                        <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
              <?php }?>
                <div>
                    <h3><?php echo $artigo->titulo?></h3>
                    <p><?php echo $artigo->corpo?></p>
                        <label>Postado pelo aluno:<h4 id="nomeAutor"><?php echo $artigo->nomeAluno;?></h4></label>
                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                </div>
            </article>
        <br>
    <?php }?>
     <?php foreach($artigosProfessor as $artigo){?>
            <article class="vidCont">
                <?php
                    if($artigo->imgArtigo == null){?>
                        <img src="<?php echo base_url('assets/bootstrap/img/crisp.jpg')?>">
                <?php
                    }else{?>
                        <img src="<?php echo base_url("upload/artigos/$artigo->imgArtigo")?>">
              <?php }?>
                <div>
                    <h3><?php echo $artigo->titulo?></h3>
                    <p><?php echo $artigo->corpo?></p>
                        <label>Postado pelo professor:<h4 id="nomeAutor"><?php echo $artigo->nomeProfessor;?></h4></label>
                    <a href="<?php echo site_url('artigos/artigo_page/')?>?codArtigo=<?php echo $artigo->codArtigo;?>" class="btn btn-primary">Visulizar</a>
                </div>
            </article>
        <br>
    <?php }?>
   </section>
    
</div>