<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\PhotosModel;
use project\models\PhotosfilterModel;
class PhotosController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\PhotosModel";
  public function defaultAction(){
      $this->data['photos'] = $this->current_model::select_join_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    $this->data['photosfilter'] = PhotosfilterModel::select_items("","fetchAll");
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->title_ar = $this->filterString($_POST["title_ar"]);
     $current_data->title_en = $this->filterString($_POST["title_en"]);
     $current_data->details_ar = $_POST["details_ar"];
     $current_data->details_en = $_POST["details_en"];
     $current_data->filter_id = $this->filterString($_POST["filter_id"]);
     $upload = new Upload();
     $current_data->file = $upload->filesrc;
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/photos');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['photos'] = $this->current_model::select_items($id,"fetch");
  $this->data['photosfilter'] = PhotosfilterModel::select_items("","fetchAll");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/photos');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->title_ar = $this->filterString($_POST["title_ar"]);
   $current_data->title_en = $this->filterString($_POST["title_en"]);
   $current_data->details_ar = $_POST["details_ar"];
   $current_data->details_en = $_POST["details_en"];
   $current_data->filter_id = $this->filterString($_POST["filter_id"]);
   $upload = new Upload();
   $current_data->file = $upload->filesrc;
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/tanta/tu/photos');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/tanta/tu/photos');
   }
}
}

?>
