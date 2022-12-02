</main><!--End Start-->
</body>
<script src="<?php echo ADMINJS ?>/jquery.min.js"></script>
<script src="<?php echo ADMINJS ?>/popper.min.js"></script>
<!-- <script src='<?php //echo ADMINJS ?>/tinymce.min.js'></script> -->
<script src='http://tinymce.cachefly.net/4.2/tinymce.min.js'></script>

<script src='<?php echo ADMINJS ?>/tinymce-handle.js'></script>
<script src='//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<input name="image" type="file" id="upload" class="hidden" onchange="">
</html>
<?php
ob_end_flush();
?>
