<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
   <?php
   $num = 0;
   foreach($slider as $slider_data){
   ?>
       <li data-target="#carouselExampleIndicators" style="background-image: url(<?= $slider_data['file'] ?>)" data-slide-to=<?= $num ?>></li>
       <?php
       $num++;
       }
       ?>
  </ol>
  <div class="carousel-inner">
    <?php

    foreach($slider as $slider_data){
    ?>
  <div class="carousel-item" style="background-image: url(<?= $slider_data['file'] ?>)">
     <div class="carousel-caption d-none d-md-block">
       <h1 class="animation animated-item-1"><?= $slider_data['title_'.$this->lang.''] ?></h1>
       <h2 class="animation animated-item-2"><?= $slider_data['description_'.$this->lang.''] ?></h2>
       <?php $link = urldecode((str_replace(' ','-',$slider_data['title_'.$this->lang.''])));?>
       <a class="btn btn-danger btn-slide" href="<?=BASE_URL.$this->lang ?>/slider/article/<?=$slider_data['id'] ?>/<?=$link ?>"><?= lang("READMORE") ?></a>

       <!-- <a class="prev hidden-xs animation animated-item-3" href="#main-slider" data-slide="prev">
     <i class="fa fa-chevron-left"></i>
     </a>
     <a class="next hidden-xs animation animated-item-3" href="#main-slider" data-slide="next">
     <i class="fa fa-chevron-right"></i>
     </a> -->

      </div>
      </div>

  <!-- <a class="prev hidden-xs animation animated-item-3" href="#main-slider" data-slide="prev">
<i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs animation animated-item-3" href="#main-slider" data-slide="next">
<i class="fa fa-chevron-right"></i>
</a> -->

      <?php
                  }
                  ?>
                  <div class="slider-links">
                  <a class="carousel-control-prev prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                  </a>
                    </div>
  </div>
<?php require_once "links-section.php" ?>
</div>
