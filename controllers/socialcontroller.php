<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\SocialModel;
class socialController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\SocialModel";
  public function defaultAction(){
      $this->data['social'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->link = $this->filterString($_POST["link"]);
     $current_data->icon = $this->filterString($_POST["icon"]);
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/social');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['social'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/social');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->link = $this->filterString($_POST["link"]);
   $current_data->icon = $this->filterString($_POST["icon"]);
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/tanta/tu/social');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/tanta/tu/social');
   }
}
}

?>
