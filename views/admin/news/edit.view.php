<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit News</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Name :</label>
 <input type="text" name="title_ar"  value="<?=$news['title_ar']; ?>" />
 <label>Name In English :</label>
 <input type="text" name="title_en"  value="<?=$news['title_en']; ?>" />
 <label>Details :</label>
 <textarea class="textarea" name="details_ar"><?=$news['details_ar']; ?></textarea>
 <label>Details In English :</label>
 <textarea class="textarea" name="details_en"><?=$news['details_en']; ?></textarea>
 <input type="hidden" name="date" value="<?= date("Y-m-d") ?>"  />
 <label>Image :</label>
 <img src="<?=BASE_URL.$news["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$news['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
