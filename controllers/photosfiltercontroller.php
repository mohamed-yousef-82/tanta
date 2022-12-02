<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\PhotosfilterModel;
class PhotosfilterController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\PhotosfilterModel";
  public function defaultAction(){
      $this->data['photosfilter'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->name_ar = $this->filterString($_POST["name_ar"]);
     $current_data->name_en = $this->filterString($_POST["name_en"]);
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/photosfilter');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['photosfilter'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/photosfilter');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->name_ar = $this->filterString($_POST["name_ar"]);
   $current_data->name_en = $this->filterString($_POST["name_en"]);
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/tanta/tu/photosfilter');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/tanta/tu/photosfilter');
   }

}
}

?>
