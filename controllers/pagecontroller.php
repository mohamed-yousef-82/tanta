<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\PageModel;
use project\models\ContactsModel;
use project\models\AboutModel;
class PageController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\PageModel";
  public function defaultAction(){
      $this->data['page'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->title_ar = $this->filterString($_POST["title_ar"]);
     $current_data->title_en = $this->filterString($_POST["title_en"]);
     $current_data->details_ar = $this->filterString($_POST["details_ar"]);
     $current_data->details_en = $this->filterString($_POST["details_en"]);
     $upload = new Upload();
     $current_data->file = $upload->filesrc;
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/page');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['page'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/page');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->title_ar = $this->filterString($_POST["title_ar"]);
   $current_data->title_en = $this->filterString($_POST["title_en"]);
   $current_data->details_ar = $this->filterString($_POST["details_ar"]);
   $current_data->details_en = $this->filterString($_POST["details_en"]);
   $upload = new Upload();
   $current_data->file = $upload->filesrc;
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/tanta/tu/page');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/tanta/tu/page');
   }

}

public function contactAction(){
  $this->data['contacts'] = contactsModel::select_items("","fetch");
  $this->view();
}
public function aboutAction(){
  $this->data['about'] = aboutModel::select_items("","fetch");
  $this->view();
}
}

?>
