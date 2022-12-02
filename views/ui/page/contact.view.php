<section class="page contacts">
  <div class="container">

<h3 class="single-title">اتصل بنا</h3>
<?php
if(false !== $contacts){
?>
<div class="row">
  <div class="col-md-4">
  <div><img class="img-responsive" src="<?=BASE_URL."/".$contacts['file'] ?>"></div>
  </div>
<div class="col-md-4">
<label>تليفون</label>
<p><?=$contacts['phone'] ?></p>
<label>البريد الالكترونى</label>
<p><?=$contacts['email'] ?></p>
<label>العنوان</label>
<p><?=$contacts['address_'.$this->lang.''] ?></p>
</div>
<div class="col-md-4">
  <?=$contacts['googlemap'] ?>
 </div>
</div>

<?php
}else{
    echo "<p>no data</p>";
}
?>
</div>
</div>
