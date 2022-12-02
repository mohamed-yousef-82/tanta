<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Add New Photo</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<form class="form add-form" method="post" enctype="multipart/form-data">
 <label>Title :</label>
 <input type="text" name="title_ar" required />
 <label>Title In English :</label>
 <input type="text" name="title_en" required />
 <label>Details :</label>
 <textarea  class="textarea" name="details_ar"></textarea>
 <label>Details In English :</label>
 <textarea  class="textarea" name="details_en"></textarea>
 <label>Filter :</label>
 <select name="filter_id">
   <?php
   foreach($photosfilter as $photosfilter_data){
   ?>
<option value="<?= $photosfilter_data['id'] ?>">
<?= $photosfilter_data['name_en'] ?>
</option>
   <?php
   }
   ?>
 </select>
 <label>Image :</label>
 <input type="file" name="file"  />
 <input class="start-btn blue" type="submit" name="submit" />
</form>
</div>
</div>
</div>
</section>
