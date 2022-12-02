
<section class="main-section box box-5">
<div class="view-data" id="dash-data">
<div class="page-container">
<h3 class="table-title"><span>Events</span><i class="fa fa-building" aria-hidden="true"></i></h3>
<div id="data">
<?php
if(false !== $events){
  ?>
<table class="table">
<thead>
<tr>
  <th>Number</th>
  <th>Title</th>
  <th>Title In English</th>
  <th>Details</th>
  <th>Details In English</th>
  <th>Event Date</th>
  <th>Image</th>
  <th>Control</th>
</tr>
</thead>
<tbody>
<?php
$number = 1;
foreach($events  as $events_data){
?>
<tr>
<td><?= $number ?></td>
<td><?= $events_data['title_ar'] ?></td>
<td><?= $events_data['title_en'] ?></td>
<td><div class="fixedheight"><?= $events_data['details_ar'] ?></div></td>
<td><div class="fixedheight"><?= $events_data['details_en'] ?></div></td>
<td><?= $events_data['date'] ?></td>
<td><img src="<?=BASE_URL.$events_data["file"] ?>"></td>
<td>
<a class="start-btn green" href="<?php echo PATH ?>/edit/<?=$events_data['id'] ?>"><i class="fa fa-edit"></i></a>
<a class="start-btn orangered" href="<?php echo PATH ?>/delete/<?=$events_data['id'] ?>"><i class="fa fa-trash"></i></a>
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
 <a class="start-btn blue" href="<?php echo PATH ?>/add">Add Event</a>
</div>
</div>
</div>
