
<section class="page">
  <div class="container">

<h3 class="single-title"> <?= $current_category_data['name_'.$this->lang.''];?></h3>
<?php
         foreach ($category_articles as $article) {
         ?>

         <div class="list">
       <div class="row">
         <div class="col-md-2">
           <img class="img-fluid list-img" src="<?=BASE_URL.$article['file'] ?>" />
           </div>
         <div class="col-md-10">
           <?php $link = urldecode(strtolower(str_replace(' ','-',$article['title_'.$this->lang.''])));?>
           <a class="sub-title" href="<?=$article['id'] ?>/<?=$link ?>"><?=$article['title_'.$this->lang.''] ?></a>

           <p>
         <?php

         $header_data->custom_echo($article['details_'.$this->lang.''],600);
         $path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

       ?>
                  </p>
         <a class="btn btn-danger" href="<?=PATH ?>/<?=$article['id'] ?>/<?=$link ?>">اقرأ المزيد</a>

         </div>
         </div>
         </div>
                  </div>
         <?php
         }
         ?>
</div>
</section>
