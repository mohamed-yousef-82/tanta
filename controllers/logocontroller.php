<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\LogoModel;
class logoController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->data['logo'] = LogoModel::select_items("","fetch");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $logo = new LogoModel();
     $logo->name_ar = $this->filterString($_POST["name_ar"]);
     $logo->name_en = $this->filterString($_POST["name_en"]);
     $logo->slogan_ar = $this->filterString($_POST["slogan_ar"]);
     $logo->slogan_en = $this->filterString($_POST["slogan_en"]);
     $upload = new Upload();
     $logo->file = $upload->filesrc;
     if ($logo->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/logo');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['logo'] = LogoModel::select_items("","fetch");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/logo');
  }
  if (isset($_POST['submit'])){
   $logo = new LogoModel();
   $logo->name_ar = $this->filterString($_POST["name_ar"]);
   $logo->name_en = $this->filterString($_POST["name_en"]);
   $logo->slogan_ar = $this->filterString($_POST["slogan_ar"]);
   $logo->slogan_en = $this->filterString($_POST["slogan_en"]);
   $upload = new Upload();
   $logo->file = $upload->filesrc;
   if ($logo->insert($id)){
      $_SESSION['message'] = 'Data Updated successfuly';
      $this->redirect('/tanta/tu/logo');
   }

  }
  $this->view();
}

}

?>
