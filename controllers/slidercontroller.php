<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\SliderModel;
class SliderController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\SliderModel";
  public function defaultAction(){
      $this->data['slider'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->title_ar = $this->filterString($_POST["title_ar"]);
     $current_data->title_en = $this->filterString($_POST["title_en"]);
     $current_data->description_ar = $this->filterString($_POST["description_ar"]);
     $current_data->description_en = $this->filterString($_POST["description_en"]);
     $upload = new Upload();
     $current_data->file = $upload->filesrc;
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/slider');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['slider'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/slider');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->title_ar = $this->filterString($_POST["title_ar"]);
   $current_data->title_en = $this->filterString($_POST["title_en"]);
   $current_data->description_ar = $this->filterString($_POST["description_ar"]);
   $current_data->description_en = $this->filterString($_POST["description_en"]);
   $upload = new Upload();
   $current_data->file = $upload->filesrc;
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/tanta/tu/slider');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/tanta/tu/slider');
   }

}

public function articleAction(){
$this->data['article_slider'] = $this->current_model::select_items($this->current_article_id,"fetch");
$this->view();
}
}

?>
