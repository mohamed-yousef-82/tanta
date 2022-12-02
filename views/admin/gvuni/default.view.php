
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Government Universities</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $gvuni){
?>
<table class="table">
<thead>
<tr>
  <th>Number</th>
  <th>Name</th>
  <th>Name In English</th>
  <th>Link</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
$number = 1;
foreach($gvuni  as $gvuni_data){
    ?>
    <tr>
 <td><?= $number ?></td>
<td><?= $gvuni_data['name_ar'] ?></td>
<td><?= $gvuni_data['name_en'] ?></td>
<td><?= $gvuni_data['link'] ?></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$gvuni_data['id'] ?>"><i class="fa fa-edit"></i></a>
<a class="start-btn orangered" href="<?php echo PATH ?>/delete/<?=$gvuni_data['id'] ?>"><i class="fa fa-trash"></i></a>
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
 <a class="start-btn blue" href="<?php echo PATH ?>/add">Add New</a>
</div>
</div>
</div>
