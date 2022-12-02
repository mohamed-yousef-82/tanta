<section id="news-boxs">
    <div class="container">
        <!-- Start Title -->
        <div class="row">
            <div class="col-md-4 wow bounceInRight" data-wow-duration="1s">
                    <h5 class="block-title">
                       <?= lang("FUTURE_EVENTS") ?><a href="<?=BASE_URL.$this->lang ?>/events"><?= lang("MORE") ?></a>
</h5>
                                            <?php
                                            foreach($events as $events_data){
                                            ?>
                                             <div class="accordion">
                            <div class="accordion-title">
                <?php $header_data->custom_echo($events_data['title_'.$this->lang.''],35);?>
                            </div>
                            <div class="accordion-content">
                                     <ul class="list-unstyled">
                                  <li class="media">
                                    <img class="mr-3" src="<?= $events_data['file'] ?>" style="width: 100px; height: 100px;"/>
                                    <div class="media-body">
                                     <p><?= $events_data['details_'.$this->lang.'']; ?></p>
                                     <div class="date"><?= $events_data['date'] ?></div>
                                     <?php $link = strtolower(str_replace(' ','-',urldecode($events_data['title_'.$this->lang.''])));?>
                                     <a class="btn btn-warning" href="<?php DOMAINNAME ?>/tanta/<?= $this->lang ?>/events/article/<?= $events_data['id'] ?>/<?=$link ?>">إقرأ المزيد</a>

                                    </div>
                                  </li>
                                </ul>
                            </div>
                        </div>
                        <?php
                         }
                         ?>

                </div>
            <div class="col-md-4 o-news">

            <h5 class="block-title"><?= lang("NEWS") ?> <a href="<?=BASE_URL.$this->lang ?>/news"><?= lang("ARCHIVE") ?></a></h5>

                  <?php
                  foreach($news as $news_data){
                  ?>
                              <div class="news-block">
                              <a class="news-img-link" href="<?php DOMAINNAME ?>/tanta/<?= $this->lang ?>/news/article/<?= $news_data['id'] ?>/<?= $link ?>">  <img src="<?= $news_data['file'] ?>" /></a>
                                <div>
                                <p class="h-news">   <a href="<?php DOMAINNAME ?>/tanta/<?= $this->lang ?>/news/article/<?= $news_data['id'] ?>/<?= $link ?>"><?php $header_data->custom_echo($news_data['title_'.$this->lang.''],50);?></a></p>
                      <p><?= $news_data['date'] ?></p>
                      <?php $link = urlencode(strtolower(str_replace(' ','-',$news_data['title_'.$this->lang.''])));?>

                                </div>
</div>
                                <?php
                                 }
                                 ?>
                </div>

                    <div class="col-md-4 wow bounceInLeft" data-wow-duration="1s">
                            <h5 class="block-title"><?= lang("VIDEO") ?><a href="https://www.youtube.com/channel/UCAgtJnyWLzSlT0TFcXL4aaA/videos" target="_blank"><?= lang("ARCHIVE") ?></a></h5>
                <?=$about['video'] ?>
                </div>
            </div>
        </div>
</section>
