  <section class="gallery-container">
        <div class="gallery-content">
          <div class="title-section">
            <h4 class="title"><span><?=$homepage['photos_title']?></span></h4>
            <div class="line"><i class="icon icon-24 icon-trophy"></i></div>
            <p class="lead"><?=$homepage['photos_desc']?></p>
        </div>
    <div class="container">
  <ul id="filters" class="clearfix">
    <?php
    $all_classes ="";
    foreach($photosfilter as $photosfilter_data){
    $all_classes .= ".".$photosfilter_data['name_en'].",";
    }
    $all_classes = trim($all_classes,",");
    ?>
    <li><span class="filter active" data-filter="<?=$all_classes ?>">All</span></li>
        <?php
        foreach($photosfilter as $photosfilter_data){
        ?>
        <li>
        <span class="filter" data-filter=".<?= $photosfilter_data['name_en'] ?>"><?= $photosfilter_data['name_'.$this->lang.''] ?></span>
        </li>
        <?php
        }
        ?>
</ul>
<div id="portfoliolist">
  <?php
  foreach($photos as $photos_data){
  ?>

  <div class="portfolio <?= $photos_data['category'] ?>" data-cat="<?= $photos_data['category'] ?>">
  <div class="portfolio-wrapper">
    <img src="<?= $photos_data['file'] ?>" alt="" />
    <div class="label">
      <div class="label-text">
        <a class="text-title"><?= $photos_data['title_'.$this->lang.''] ?></a>
        <span class="text-category"><?= $photos_data['details_'.$this->lang.''] ?></span>
      </div>
      <div class="label-bg"> </div>
    </div>
  </div>
  </div>

  <?php
  }
  ?>
</div>
</div>
    </div><!--/.container-->
</section><!--/#recent-works-->
