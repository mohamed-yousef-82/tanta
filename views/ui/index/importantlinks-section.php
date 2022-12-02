<div class="progress-container import_links">
   <img class="drop-shadow" src="<?php echo UIIMG ?>/drop-shadow.png" / alt="Tanta Univesity">
    <div class="container animatedParent">
        <!-- Start Title -->
        <div class="row">
            <div class="col-md-12 title-section">
                <h4 class="title"><span>روابط هامة</span></h4>
                <div class="line"><i class="icon icon-24 icon-trophy"></i></div>
            </div>
        </div>
        <!-- End Title -->
        <div class="row animated fadeInDownShort go">
          <?php
          foreach($importantlinks as $importantlinks_data){
          ?>
          <div class="col-md-4">
              <div class="link">
                <img class="mr-3" src="<?= $importantlinks_data['file'] ?>" alt="<?= $importantlinks_data['name_'.$this->lang.''] ?>" style="width: 65px" />

                  <a href="<?= $importantlinks_data['link'] ?>" class="mt-0" target="_blank"><?= $importantlinks_data['name_'.$this->lang.''] ?></a>
              </div>
          </div>
                        <?php
                         }
                         ?>
        </div>
    </div>
</div>
