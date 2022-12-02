<div class="centers-unites">
<img class="drop-shadow" src="<?php echo UIIMG ?>/drop-shadow.png" / alt="Tanta Univesity">
<div class="title-section">
 <h4 class="title"><span><?= lang("COLLEGES") ?> </span></h4>
 <div class="line"><i class="icon icon-24 icon-trophy"></i></div>
</div>
         <div class="container">
<div class="slick-slider autoplay">
<?php
foreach($colleges as $colleges_data){
?>
         <div>
<div>
 <a href="<?= $colleges_data['link'] ?>"target="_blank">
   <img src="<?= $colleges_data['file'] ?>" alt="<?= $colleges_data['name_'.$this->lang.''] ?>" />
</a>
 <h5><?= $colleges_data['name_'.$this->lang.''] ?></h5>
</div>
         </div>
         <?php
          }
          ?>
</div>
</div>
</div>
