
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Articles</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $article){
  ?>
<table class="table">
<thead>
<tr>
  <th>Number</th>
  <th>Title</th>
  <th>Title In English</th>
  <th>Description</th>
  <th>Description In En English</th>
  <th>Category</th>
  <th>Image</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
$number = 1;
foreach($article as $article_data){
?>
<tr>
<td><?= $number ?></td>
<td><?= $article_data['title_ar'] ?></td>
<td><?= $article_data['title_en'] ?></td>
<td><div class="fixedheight"><?= $article_data['details_ar'] ?></div></td>
<td><div class="fixedheight"><?= $article_data['details_en'] ?></div></td>
<td><?= $article_data['category'] ?></td>
<td><img src="<?=BASE_URL.$article_data["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$article_data['id'] ?>"><i class="fa fa-edit"></i></a>
<a class="start-btn orangered" href="<?php echo PATH ?>/delete/<?=$article_data['id'] ?>"><i class="fa fa-trash"></i></a>
</td>
</tr>
<?php
$number++;
}
}else{
    echo "<p>no data</p>";
}
?>
</tbody>
</table>
<?php if(isset($_SESSION['message'])){ ?>
 <p class="message <?= isset($error)? 'error':''?>"><?= $_SESSION['message']?></p>
 <?php
 unset($_SESSION['message']);
 }
 ?>
 <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Article</a>
</div>
</div>
</div>
