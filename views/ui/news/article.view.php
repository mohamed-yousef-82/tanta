<section class="page">
   <div class="container">
     <h3 class="single-title"><?=$article_news['title_'.$this->lang.''] ?><span> ... <?=$article_news['date'] ?></span></h3>

     <img class="single-img img-fluid" src="<?=BASE_URL.$article_news['file'] ?>" />
<p>
  <?=$article_news['details_'.$this->lang.''] ?>
</p>

</div>
</section>
