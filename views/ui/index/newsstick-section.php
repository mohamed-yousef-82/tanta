<section id="newssticker">
    <div class="rssticker-container">
        <div class="container">
            <div class='rssticker'>
                <!-- <span class="encabezado"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span> -->
                <marquee direction="right" >
                <?php
                foreach($news as $news_data){
                ?>
                <?php $link = urlencode(strtolower(str_replace(' ','-',$news_data['title_'.$this->lang.''])));?>
                    <a href="<?php DOMAINNAME ?>/tanta/<?= $this->lang ?>/news/article/<?= $news_data['id'] ?>/<?= $link ?>"><?= $news_data['title_'.$this->lang.''] ?></a>
                              <?php
                               }
                               ?>
                 </marquee>
            </div>
        </div>
    </div>
</section>
