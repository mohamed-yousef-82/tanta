<section class="page">
  <div class="container">
<h3 class="single-title">الاخبار</h3>

  <?php
  if(false !== $news){
         foreach($news  as $news_data){
         ?>
         <div class="list">
       <div class="row">
         <div class="col-md-2">
           <img class="img-fluid list-img" src="<?=BASE_URL.$news_data["file"] ?>" />
           </div>
            <div class="col-md-10">
         <?php $link = strtolower(str_replace(' ','-',$news_data['title_'.$this->lang.'']));?>
         <a class="sub-title" href="<?=$this->controller?>/<?=$news_data['id'] ?>/<?=$link ?>"><?=$news_data['title_'.$this->lang.''] ?></a>
       <p><?php $header_data->custom_echo($news_data['details_'.$this->lang.''],600);?></p>
         <p><?= $news_data['date'] ?></p>
         <a class="btn btn-danger" href="<?=$this->controller?>/article/<?=$news_data['id'] ?>/<?=$link ?>">اقرأ المزيد</a>
         </div>
          </div>
         </div>
         <?php
         }
         ?>
<?php
}else{
    echo "<p>no data</p>";
}
?>
</div>
