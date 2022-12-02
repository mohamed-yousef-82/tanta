<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\HomepageModel;
class HomepageController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->data['homepage'] = HomepageModel::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $Homepage = new HomepageModel();
     $Homepage->counter_title_ar      = $this->filterString($_POST["counter_title_ar"]);
     $Homepage->counter_title_en      = $this->filterString($_POST["counter_title_en"]);
     // $Homepage->counter_desc_ar       = $this->filterString($_POST["counter_desc_ar"]);
     // $Homepage->counter_desc_en       = $this->filterString($_POST["counter_desc_en"]);
     $Homepage->photos_title_ar       = $this->filterString($_POST["photos_title_ar"]);
     $Homepage->photos_title_en       = $this->filterString($_POST["photos_title_en"]);
     // $Homepage->photos_desc_ar        = $this->filterString($_POST["photos_desc_ar"]);
     // $Homepage->photos_desc_en        = $this->filterString($_POST["photos_desc_en"]);
     $Homepage->statistics_title_ar       = $this->filterString($_POST["statistics_title_ar"]);
     $Homepage->statistics_title_en       = $this->filterString($_POST["statistics_title_en"]);

     // $Homepage->statistics_desc_ar        = $this->filterString($_POST["statistics_desc_ar"]);
     // $Homepage->statistics_desc_en        = $this->filterString($_POST["statistics_desc_en"]);

     $Homepage->e_services_title_ar         = $this->filterString($_POST["e_services_title_ar"]);
     $Homepage->e_services_title_en          = $this->filterString($_POST["e_services_title_en"]);
     $Homepage->colleges_title_ar      = $this->filterString($_POST["colleges_title_ar"]);
     $Homepage->colleges_title_en      = $this->filterString($_POST["colleges_title_en"]);
     // $Homepage->colleges_desc_ar       = $this->filterString($_POST["colleges_desc_ar"]);
     // $Homepage->colleges_desc_en       = $this->filterString($_POST["colleges_desc_en"]);
     $Homepage->partners_title_ar      = $this->filterString($_POST["partners_title_ar"]);
     // $Homepage->partners_desc_ar       = $this->filterString($_POST["partners_desc_ar"]);
     // $Homepage->partners_desc_en       = $this->filterString($_POST["partners_desc_en"]);
     $Homepage->copyright_ar          = $this->filterString($_POST["copyright_ar"]);
     $Homepage->copyright_en          = $this->filterString($_POST["copyright_en"]);
     $Homepage->designer_ar          = $this->filterString($_POST["designer_ar"]);
     $Homepage->designer_en          = $this->filterString($_POST["designer_en"]);

     if ($Homepage->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/tanta/tu/homepage');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['homepage'] = HomepageModel::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/tanta/tu/homepage');
  }
  if (isset($_POST['submit'])){
   $Homepage = new HomepageModel();
   $Homepage->counter_title      = $this->filterString($_POST["counter_title"]);
   $Homepage->counter_desc       = $this->filterString($_POST["counter_desc"]);
   $Homepage->photos_title       = $this->filterString($_POST["photos_title"]);
   $Homepage->photos_desc        = $this->filterString($_POST["photos_desc"]);
   $Homepage->skills_title       = $this->filterString($_POST["skills_title"]);
   $Homepage->skills_desc        = $this->filterString($_POST["skills_desc"]);
   $Homepage->team_title         = $this->filterString($_POST["team_title"]);
   $Homepage->team_desc          = $this->filterString($_POST["team_desc"]);
   $Homepage->clients_title      = $this->filterString($_POST["clients_title"]);
   $Homepage->clients_desc       = $this->filterString($_POST["clients_desc"]);
   $Homepage->copyright          = $this->filterString($_POST["copyright"]);
   if ($Homepage->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/tanta/tu/homepage');
   }

  }
  $this->view();
}
}

?>
