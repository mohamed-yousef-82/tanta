<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit College</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Name :</label>
 <input type="text" name="name_ar"  value="<?=$colleges['name_ar']; ?>" />
 <label>Name In English :</label>
 <input type="text" name="name_en"  value="<?=$colleges['name_en']; ?>" />
 <label>Link :</label>
 <input type="url" name="link"  value="<?=$colleges['link']; ?>" />
 <label>Image :</label>
 <img src="<?=BASE_URL.$colleges["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$colleges['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
