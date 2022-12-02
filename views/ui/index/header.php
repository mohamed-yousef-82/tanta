          <?php
            require_once "header-config.php";
            $header_data = new header();
            extract($header_data->data);
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $this->controller; ?></title>

	  <!-- core CSS -->
    <?php
    if ($this->lang == "ar"){
      ?>
      <link href="<?php echo UICSS ?>/bootstrap-rtl.min.css" rel="stylesheet">
      <?php
    }else {
      ?>
      <link href="<?php echo UICSS ?>/bootstrap.min.css" rel="stylesheet">
      <?php
    }
     ?>
    <link href="<?php echo UICSS ?>/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo UICSS ?>/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo UICSS ?>/icons.css">
    <?php
    if ($this->lang == "ar"){
      ?>
      <link rel="stylesheet" href="<?php echo UICSS ?>/rtl.css">
      <?php
    }
     ?>
    <link rel="stylesheet" href="<?php echo UICSS ?>/responsive.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head><!--/head-->

<body>

    <div class="main-container">
        <header>
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="social-icons">
                             <div class="social lang" style="width: 116px;padding-top: 7px;"> <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=00000002-0000-0ff1-ce00-000000000000&redirect_uri=https%3a%2f%2foutlook.office.com%2fowa%2f&resource=00000002-0000-0ff1-ce00-000000000000&response_mode=form_post&response_type=code+id_token&scope=openid&msafed=0&client-request-id=e04db3f0-769e-46f5-ae0b-0157df0b90e4&protectedtoken=true&nonce=636732040390921433.5c974b7e-ead5-4901-8c10-42c0d8d566e7&state=DcvBDYAgDEBR0CGcAim0UDkYd3ADhCZ6MjEY15fD-7evlVJjN3QaehRHjIweCDBB8o4Q51AS08FiJNdgKIEzS3FgyBeoSw0xCuv-Tvb-st3y285d6vVIaWt7XvkB" style="margin-left:10px;"><img style="height:25px;" src="<?php echo UIIMG ?>/Office_365_logo.png" / alt="Tanta Univesity"></a></div>
                                <div class="social lang"><a href="<?=BASE_URL ?>fr" title="Spanish">FR</a></div>
                                <div class="social lang"><a href="<?=BASE_URL ?>en" title="French">EN</a></div>
                                <div class="social lang"><a href="<?=BASE_URL ?>ar" title="english">AR</a></div>

                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="search-box-container">
                            <a class="toggle-search pull-right"><i class="fa fa-search" aria-hidden="true"></i></a>
                               <div class="search-box">
                               <div class="form-group">
                               <select name="DropDownList_search" id="DropDownList_search" class="form-control">
                              	<option value="2">              الاخبار    </option>
                              	<option value="3">      اعضاء هيئة التدريس    </option>
                                </select>
                              </div>
                                <div class="form-group">
                            <input name="TextBox_search_for" type="text" id="TextBox_search_for" class="form-control" placeholder="ادخل كلمة البحث . . " />
                                </div>
                                <span id="RequiredFieldValidator1" style="color:Red;visibility:hidden;">نص البحث مطلوب </span>
                                <input type="submit" name="Button_search" value="بحث" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;Button_search&quot;, &quot;&quot;, true, &quot;ser&quot;, &quot;&quot;, false, false))" id="Button_search" class="btn btn-primary" />
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="middle-header">
                            <div class="container">
                                    <img class="header-left-shadow" src="<?php echo UIIMG ?>/header-left-shadow.png" alt="Tanta Univesity">
                                    <img class="header-right-shadow" src="<?php echo UIIMG ?>/header-right-shadow.png" alt="Tanta Univesity">
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="header-contact">
                                                    <span> <?= $contacts["email"] ?> <i class="fa fa-envelope envelope" aria-hidden="true"></i></span>
                                                    <span><?= $contacts["phone"] ?> <i class="fa fa-phone phone" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                            <a class="navbar-brand" href="<?=BASE_URL ?>"><img src="<?=BASE_URL.$logo['file'] ?>" alt="Tanta Univesity"></a>

 <p><?= $logo["name_".$this->lang] ?></p>
</div>
 <div class="col-md-4">
     <div class="header-bref">
     <p class="header-bref-title"><i class="fa fa-book fa-spin"></i><?=lang('EGYPTION_UNIVERCITY');?></p>
     <p>
       <?= $logo["slogan_".$this->lang] ?>
     </p>
    </div>
            </div>
 </div>
                       </div>
                    </div>
                            <nav class="navbar navbar-toggleable-md navbar-inverse">
                              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
           <i class="fa fa-align-justify" aria-hidden="true"></i>
            </button>
<div class="container">
                                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="<?=BASE_URL ?>"><i class="fa fa-home"></i></a>
                                        </li>
                                        <li class="nav-item view-menu">
                                        <span class="right-Triangle"></span>
                                                <a class="nav-link speed-links-btn"><?= lang("QUICK_LINKS") ?>
                                                </a>
                                                <span class="left-Triangle"></span>
                                            </li>
                                          <?php
                                          foreach($category as $category_data){
                                          ?>
                                          <?php $link = urldecode(strtolower(str_replace(' ','-',$category_data['name_'.$this->lang.''])));?>
                                          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="<?php DOMAINNAME ?>/tanta/<?= $this->lang ?>/category/<?= $category_data['id'] ?>/<?= $link ?>"><?= $category_data['name_'.$this->lang.''] ?></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                              <?php
                                              global $connection;
                                              $sql = 'SELECT * FROM articles  WHERE cat_id = "' .  $category_data['id'] . '"';
                                              $stmt = $connection->prepare($sql);
                                              $stmt -> execute();
                                              $category_dropmenu = $stmt->fetchAll();

                                              // $category_dropmenu = categoryModel::getArticle($category_data['id']);
                                                       foreach ($category_dropmenu as $dropmenu) {
                                                       ?>
                                                         <?php $article_link = urldecode(strtolower(str_replace(' ','-',$dropmenu['title_'.$this->lang.''])));?>
                                                         <a class="dropdown-item" href="<?php DOMAINNAME ?>/tanta/<?= $this->lang ?>/category/<?= $category_data['id'] ?>/<?=$link ?>/<?=$dropmenu['id'] ?>/<?=$article_link ?>"><?=$dropmenu['title_'.$this->lang.''] ?></a>
                                                       <?php
                                                       }
                                                       ?>
                                                <!-- <div class="inner-menu">
                                                     <a class="dropdown-item" href="President1.aspx">  رئيس الجامعة</a>
                                                  </div>
                                                <div class="inner-menu">
                                                      <a class="dropdown-item" href="http://www.tanta.edu.eg/stu/"> قطاع شئون التعليم الطلاب</a>
                                            </div> -->
                                          </div>
                                          </li>
                                          <?php
                                          }
                                          ?>

                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="A2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> خدمات طلابية </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                              <ul>
                                                    <li>
                                                        <a class="dropdown-item" href="http://www.tanta.edu.eg/stu/stu-servies.aspx">المرحلة الجامعية</a>
                                                    </li>

                                                    </ul>
                                            </div>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="staff-services.aspx">أعضاء هيئة التدريس </a>
                                        </li> -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="A3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?=lang('COLLEGES') ?> </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                              <?php
                                              foreach($colleges as $colleges_data){
                                              ?>
                                               <a href="<?= $colleges_data['link'] ?>"target="_blank">
                                                 <?= $colleges_data['name_'.$this->lang.''] ?>
                                              </a>
                                               <?php
                                                }
                                                ?>
                                                <!-- <div class="inner-menu">
                                                    <a class="dropdown-item" href="http://med.tanta.edu.eg/">كلية الطب</a>
                                                </div> -->
                                                <!-- <div class="inner-menu">
                                                    <a class="dropdown-item" href="http://edu.tanta.edu.eg/">كلية التربية</a>
                                                    <a class="dropdown-item" href="http://com.tanta.edu.eg/">كلية التجارة </a>
                                                </div> -->
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="A5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?= lang("CENTERS&UNITES") ?> </a>
                                              <div class="dropdown-menu center-link" aria-labelledby="dropdown01">
                                                <div class="inner-menu">
                                                  <?php
                                                  foreach($centers as $centers_data){
                                                  ?>

                                                <a class="dropdown-item" href="<?= $centers_data['link'] ?>" target="_blank"><?= $centers_data['name_'.$this->lang.''] ?></a>
                                                   <?php
                                                    }
                                                    ?>
                                                  </div>
                                                  </div>
                                                   </li>
                                                 <li class="nav-item dropdown submenu-drop">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?=lang('EGYUVI');?></a>
                            <ul class="dropdown-menu">
                               <li class="dropdown submenu-link"><a class="test" href="" data-toggle="dropdown"><?=lang('GOVERUVI');?> </a>
                                 <ul class="dropdown-submenu">
                                 <div class="inline-menu-container">
                                 <div class="inline-menu">
                                   <?php
                                   foreach($gvuni as $gvuni_data){
                                   ?>
                                   <li class="dropdown"> <a class="dropdown-item" href="<?= $gvuni_data['link'] ?>" target="_blank"><?= $gvuni_data['name_'.$this->lang.''] ?></a></li>
                                    <?php
                                     }
                                     ?>
                                </div>
                                </div>
                            </ul>
                            </li>
                                <li class="submenu-link"><a href=""><?=lang('SPECHUVI');?> </a>
                                <ul class="dropdown-submenu">
                                  <?php
                                  foreach($spuni as $spuni_data){
                                  ?>
                                  <li class="dropdown"> <a class="dropdown-item" href="<?= $spuni_data['link'] ?>" target="_blank"><?= $spuni_data['name_'.$this->lang.''] ?></a></li>
                                   <?php
                                    }
                                    ?>
                            </ul>
                                </li>
                            </ul>
                        </li>

</li>
                                    </ul>

               </div>
                                </div>
                            </nav>
        </header>
        <div id="fixed-social">

              <?php
              foreach($social  as $social){
              ?>
              <div>
                  <a href="<?= $social['link'] ?>" class="fixed-facebook" target="_blank"><i class="<?= $social['icon'] ?>"></i> <span>Facebook</span></a>
              </div>
              <?php
          }
          ?>

            <div>
                <a href="survey.aspx" class="fixed-q" target="_blank"><i class="fa fa-question-circle fa-2x" style="padding-top: 4px;"></i> <span>رأيك يهمنــا</span></a>
            </div>
        </div>
