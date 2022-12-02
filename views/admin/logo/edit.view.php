<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Edit Logo</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post"  enctype="multipart/form-data">
 <label>Edit Website Name :</label>
 <input type="text" name="name_ar"  value="<?=$logo['name_ar']; ?>" />
 <label>Edit Website Name In English :</label>
 <input type="text" name="name_en"  value="<?=$logo['name_en']; ?>" />
 <label>Edit Website Slogan :</label>
 <input type="text" name="slogan_ar"  value="<?=$logo['slogan_ar']; ?>" />
 <label>Edit Website Slogan In English :</label>
 <input type="text" name="slogan_en"  value="<?=$logo['slogan_en']; ?>" />
 <label>Edit Logo :</label>
 <img src="<?=BASE_URL.$logo["file"] ?>" style="height:200px;display:block;">
 <input type="hidden" name="oldfile" value="<?=$logo['file']; ?>">
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
