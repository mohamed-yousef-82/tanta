<?php
namespace project\models;
class SliderModel extends AbstractModel
{
 protected static $tableName = 'slider';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'title_ar',
           'description_ar',
           'title_en',
           'description_en',
           'file'
 );

}
