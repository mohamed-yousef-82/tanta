<?php
use project\models\LogoModel;
use project\models\MenuModel;
use project\models\contactsModel;
use project\models\socialModel;
use project\models\sliderModel;
use project\models\aboutModel;
use project\models\categoryModel;
use project\models\IconsModel;
use project\models\CounterModel;
use project\models\ClientsModel;
use project\models\SkillsModel;
use project\models\PhotosfilterModel;
use project\models\PhotosModel;
use project\models\CollegesModel;
use project\models\PageModel;
use project\models\HomepageModel;
use project\models\NewsModel;
use project\models\EventsModel;
use project\models\ImportantlinksModel;
use project\models\GvuniModel;
use project\models\SpuniModel;
use project\models\CentersModel;
use project\lib\Helper;
use project\controllers\abstractController;
class header extends abstractController
{
  use Helper;
  protected $data = [];
  public function __construct(){
    $this->data['contacts'] = ContactsModel::select_items("","fetch");
    $this->data['logo'] = LogoModel::select_items("","fetch");
    $this->data['menu'] = MenuModel::select_items("","fetch");
    $this->data['social'] = SocialModel::select_items("","fetchAll");
    $this->data['slider'] = SliderModel::select_items("","fetchAll");
    $this->data['about'] = AboutModel::select_items("","fetch");
    $this->data['category'] = CategoryModel::select_items("","fetchAll");
    $this->data['icons'] = IconsModel::select_items("","fetchAll");
    $this->data['counter'] = CounterModel::select_items("","fetchAll");
    $this->data['clients'] = ClientsModel::select_items("","fetchAll");
    $this->data['skills'] = SkillsModel::select_items("","fetch");
    $this->data['photosfilter'] = PhotosfilterModel::select_items("","fetchAll");
    $this->data['photos'] = PhotosModel::select_join_items("","fetchAll");
    $this->data['colleges'] = CollegesModel::select_items("","fetchAll");
    $this->data['page'] = PageModel::select_items("","fetchAll");
    $this->data['homepage'] = HomepageModel::select_items("","fetch");
    $this->data['news'] = NewsModel::select_items("","fetchAll");
    $this->data['events'] = EventsModel::select_items("","fetchAll");
    $this->data['importantlinks'] = ImportantlinksModel::select_items("","fetchAll");
    $this->data['gvuni'] = GvuniModel::select_items("","fetchAll");
    $this->data['spuni'] = SpuniModel::select_items("","fetchAll");
    $this->data['centers'] = CentersModel::select_items("","fetchAll");


  }

}

?>
