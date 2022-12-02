<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Events</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Name :</label>
 <input type="text" name="title_ar"  value="<?=$events['title_ar']; ?>" />
 <label>Name In English :</label>
 <input type="text" name="title_en"  value="<?=$events['title_en']; ?>" />
 <label>Details :</label>
 <textarea class="textarea" name="details_ar"><?=$events['details_ar']; ?></textarea>
 <label>Details In English :</label>
 <textarea class="textarea" name="details_en"><?=$events['details_en']; ?></textarea>
 <label>Event Data :</label>
 <input type="date" name="date"  />
 <label>Image :</label>
 <img src="<?=BASE_URL.$events["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$events['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
