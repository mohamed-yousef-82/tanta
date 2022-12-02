<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\GvuniModel;
class GvuniController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\GvuniModel";
  public function defaultAction(){
      $this->data['gvuni'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->name_ar = $this->filterString($_POST["name_ar"]);
     $current_data->name_en = $this->filterString($_POST["name_en"]);
     $current_data->link = $this->filterString($_POST["link"]);
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/gvuni');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['gvuni'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/gvuni');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->name_ar = $this->filterString($_POST["name_ar"]);
   $current_data->name_en = $this->filterString($_POST["name_en"]);
   $current_data->link = $this->filterString($_POST["link"]);
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/tanta/tu/gvuni');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/tanta/tu/gvuni');
   }
}
}

?>
