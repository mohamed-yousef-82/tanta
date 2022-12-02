<section class="counter-container">
    <div class="counter-content">
<div class="counter wow fadeInDown" data-wow-duration="2s">
  <div class="title title-section">
    <h4><a><?=$homepage['skills_title']?></a></h4>
    <div class="line"><i class="icon icon-24 icon-trophy"></i></div>
    <p class="lead"><?=$homepage['skills_desc']?></p>

</div>
    <div class="container">
      <ul class="row">
        <?php
        foreach($counter as $counter_data){
        ?>
                       <li class="col-md-2">
                       <div>
                       <i class="<?= $counter_data['icon'] ?>" aria-hidden="true"></i>
                       <p><?= $counter_data['title_'.$this->lang.''] ?></p>
                      <span class="number" data-from="0" data-to="<?= $counter_data['count'] ?>" data-speed="5000"><?= $counter_data['count'] ?></span>
                      </div>
                      </li>
                      <?php
                       }
                       ?>
                                     </ul>
    </div>
    </div>
</div>
</section>
