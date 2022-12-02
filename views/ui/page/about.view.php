<section class="page contacts">
<div class="container">
<h3 class="single-title"><?=$about['name_'.$this->lang.''] ?></h3>
<?php
if(false !== $about){
?>
<div><img class="single-img img-responsive" src="<?=BASE_URL.$about["file"] ?>" /></div>
<p>
<?= $about['details_'.$this->lang.''] ?>
</p>
<?php
}else{
    echo "<p>no data</p>";
}
?>
</div>
