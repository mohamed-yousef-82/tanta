<?php
namespace project\models;
class HomepageModel extends AbstractModel
{
 protected static $tableName = 'homepage';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'counter_title_ar',
           'counter_title_en',
           'counter_desc_ar',
           'counter_desc_en',
           'photos_title_ar',
           'photos_title_en',
           'photos_desc_ar',
           'photos_desc_en',
           'skills_title_ar',
           'skills_title_en',
           'skills_desc_ar',
           'skills_desc_en',
           'team_title_ar',
           'team_title_en',
           'team_desc_ar',
           'team_desc_en',
           'clients_title_ar',
           'clients_title_en',
           'clients_desc_ar',
           'clients_desc_en',
           'copyright_ar',
           'copyright_en',
           'designer_ar',
           'designer_en'
 );
}
