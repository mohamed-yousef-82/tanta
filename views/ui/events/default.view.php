<section class="page">
  <div class="container">
<h3 class="single-title">احداث مستقبلية</h3>

  <?php
  if(false !== $events){
         foreach($events as $events_data){
         ?>
         <div class="list">
       <div class="row">
         <div class="col-md-2">
           <img class="img-fluid list-img" src="<?=BASE_URL.$events_data["file"] ?>" />
           </div>
            <div class="col-md-10">
         <?php $link = strtolower(str_replace(urldecode(' ','-',$events_data['title_'.$this->lang.''])));?>
         <a class="sub-title" href="<?=$this->controller?>/<?=$events_data['id'] ?>/<?=$link ?>"><?=$events_data['title_'.$this->lang.''] ?></a>
       <p><?php $header_data->custom_echo($events_data['details_'.$this->lang.''],600);?></p>
         <p><?= $events_data['date'] ?></p>
         <a class="btn btn-danger" href="<?=$this->controller?>/article/<?=$events_data['id'] ?>/<?=$link ?>">اقرأ المزيد</a>
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
