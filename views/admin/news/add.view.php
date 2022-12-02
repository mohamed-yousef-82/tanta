<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Add News</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post" enctype="multipart/form-data">
 <label>Title :</label>
 <input type="text" name="title_ar"  />
 <label>Title In English :</label>
 <input type="text" name="title_en"  />
 <label>Details :</label>
 <textarea class="textarea" name="details_ar"></textarea>
 <label>Details In English :</label>
 <textarea class="textarea" name="details_en"></textarea>
 <input type="hidden" name="date" value="<?= date("Y-m-d") ?>"  />
 <label>Image :</label>
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
