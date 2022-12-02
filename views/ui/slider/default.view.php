<section class="page">
  <div class="container">
<h3 class="single-title">السلايدر</h3>

  <?php
  if(false !== $slider){
         foreach($slider as $slider_data){
         ?>
         <div class="list">
       <div class="row">
         <div class="col-md-2">
           <img class="img-fluid list-img" src="<?=BASE_URL.$slider_data["file"] ?>" />
           </div>
            <div class="col-md-10">
         <?php $link = urldecode((str_replace(' ','-',$slider_data['title_'.$this->lang.''])));?>
         <a class="sub-title" href="<?=$this->controller?>/<?=$slider_data['id'] ?>/<?=$link ?>"><?=$slider_data['title_'.$this->lang.''] ?></a>
       <p><?php $header_data->custom_echo($slider_data['description_'.$this->lang.''],600);?></p>
         <a class="btn btn-danger" href="<?=$this->controller?>/article/<?=$slider_data['id'] ?>/<?=$link ?>">اقرأ المزيد</a>
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
