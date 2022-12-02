<footer>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120544910-2"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-120544910-2');
</script>
     <div class="footer-corner">
         <div class="container animatedParent">
             <div class="row animated fadeInDownShort go">
                 <div class="col-md-4">
                     <!-- COLUMN 2 -->
                     <h3 class="footer-heading"><?= lang("CONTACT_us") ?></h3>
                     <div class="row margin-bottom-30px">
                         <div class="col-xs-6">
                             <ul class="list-unstyled footer-nav">
 <li data-toggle="tooltip"><i class="fa fa-map-marker" aria-hidden="true"></i><?= lang("ADDRESS") ?> : <?=$contacts['address_'.$this->lang.''] ?> </li>
 <li data-toggle="tooltip"><i class="fa fa-phone" aria-hidden="true"></i><?= lang("PHONE") ?> :
     <?=$contacts['phone'] ?> </li>
 <li data-toggle="tooltip"><i class="fa fa-fax" aria-hidden="true"></i><?= lang("FAX") ?> :  <?=$contacts['fax'] ?></li>
 <li data-toggle="tooltip"><i class="fa fa-send" aria-hidden="true"></i><?= lang("POST_CODE") ?> :  <?=$contacts['post'] ?></li>
 <li data-toggle="tooltip"><i class="fa fa-envelope" aria-hidden="true"></i> البــريد الالكتــروني:    <?=$contacts['email'] ?> </li>
 <li data-toggle="tooltip"><i class="fa fa-phone-square" aria-hidden="true"></i> <a href="contact2.aspx"><?= lang("UNIVERSITY_PHONES_INDEX") ?></a>  </li>

</ul>
                         </div>
                     </div>
                     <!-- END COLUMN 2 -->
                 </div>
                 <div class="col-md-6">
                     <!-- COLUMN 3 -->
                     <div class="contact-form">
                         <div class="container">
                             <div class="row">
                                 <div class="col-md-4">
                                     <div class="form-group">
        <input name="TextBox_Sender" type="text" id="TextBox_Sender" class="form-control" placeholder="<?= lang("NAME") ?>"  />
                                     </div>
                                 </div>
                                 <div class="col-md-8 email-field">
                                     <div class="form-group">
       <select name="DropDownList1" id="DropDownList1" class="form-control">
<option value="0"><?= lang("EMAIL") ?></option>
<option value="President@unv.tanta.edu.eg"> مكتب رئيس الجامعة</option>
<option value="Vp_student@unv.tanta.edu.eg">مكتب  نائب رئيس الجامعة لشئون التعليم والطلاب</option>
<option value="vp_research@unv.tanta.edu.eg">مكتب نائب رئيس الجامعة للدراسات العليا والبحوث </option>
<option value="Vp_community@unv.tanta.edu.eg">مكتب نائب رئيس الجامعة لشئون خدمة المجتمع وتنميه البيئة</option>
<option value="portal@unv.tanta.edu.eg">البوابة الإلكترونية</option>
<option value=""></option>

</select>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="form-group">
          <input name="TextBox_message_title" type="text" id="TextBox_message_title" class="form-control" placeholder="<?= lang("TITLE") ?>"  />
                                     </div>
                                 </div>
                             </div>
                         </div>
              <div class="col-md-12">
                                     <div class="form-group" style="margin-bottom:0;">
          <input name="TextBox_sender_email" type="text" id="TextBox_sender_email" class="form-control" placeholder="<?= lang("EMAIL") ?>"  />
                                      <span id="RegularExpressionValidator1" style="color:Red;visibility:hidden;">بريد  غير صحيح</span>
                                     </div>
                                 </div>
                         <div class="col-md-12">
                         <div class="form-group">
                        <textarea name="TextBox_message" rows="2" cols="20" id="TextBox_message" class="form-control" placeholder="<?= lang("MESSAGE") ?>"></textarea>
                             </div>
                         </div>
                         <input type="submit" name="Button_send" value="<?= lang("SEND_MESSAGE") ?>" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Button_send&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="Button_send" class="btn btn-primary" />
                 </div>
                 </div>
                 <div class="col-md-2" style="display:flex;">
                     <img class="footer-img" src="<?=UIIMG ?>/footer.png" / alt="Tanta Univesity">
                 </div>
             </div>

         </div>
     </div>
     <!-- COPYRIGHT -->
                    <div class="image-popup">
                 <i class="fa fa-close"></i>
                 <img src="" alt="Tanta Univesity">
             </div>
     <div class="footer-bottom">
         <div class="container">
         <img class="drop-shadow" style="height:50px;" src="<?php echo UIIMG ?>/drop-shadow.png" alt="Tanta Univesity">
             <div class="row">
                 <div class="text-right copyright col-md-4"><?= lang("COPYWRITE") ?> </div>
                 <div class="text-right copyright col-md-5">
                     <?= lang("DESIGN") ?>
                 </div>
                 <div class="text-left col-md-3">
                     <a href="https://login.microsoftonline.com/login.srf?wa=wsignin1.0&rpsnv=2&ct=1372064173&rver=6.1.6206.0&wp=MBI_KEY&wreply=https:%2F%2Fwww.outlook.com%2Fowa%2F&id=260563&whr=office365.com&CBCXT=out" title="البريد الإلكتروني" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                     <a href="https://docs.google.com/forms/d/e/1FAIpQLSft3rxiBdqfNy9PbxYOAHcEDKdsOXzHHKQTH3OxzlLUiaez7Q/viewform" title="استبيان" target="_blank"><i class="fa fa-book" aria-hidden="true"></i></a>
                     <a href="SiteMap.aspx" title="خريطة الموقع"><i class="fa fa-map-marker" aria-hidden="true" style="padding-left:3px;"></i></a>
                 </div>
             </div>
         </div>
     </div>
     </div>
</div>
     <!-- END COPYRIGHT -->
 </footer>

</body>
</html>

    <script src="<?php echo UIJS ?>/jquery.js"></script>
    <script src="<?php echo UIJS ?>/bootstrap.min.js"></script>
    <script src="<?php echo UIJS ?>/scripts.js"></script>
    <script src="<?php echo UIJS ?>/jquery.countTo.js"></script>
    <script src="<?php echo UIJS ?>/jquery.mixitup.min.js"></script>
    <script src="<?php echo UIJS ?>/slick.js"></script>
    <script src="<?php echo UIJS ?>/accordion.js"></script>
    <script src="<?php echo UIJS ?>/script.js"></script>
    <script>
      all_classes = "<?=$all_classes ?>";
      $(function () {
          var filterList = {
              init: function () {
                  $('#portfoliolist').mixItUp({
                      selectors: {
                          target: '.portfolio',
                          filter: '.filter'
                      },
                      load: {
                          filter: '<?=$all_classes ?>'
                      }
                  });
              }
          };
          // Run the show!
          filterList.init();
      });
    </script>
    </body>
</html>
<?php
ob_end_flush();
?>
