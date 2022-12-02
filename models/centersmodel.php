<?php
namespace project\models;
class CentersModel extends AbstractModel
{
 protected static $tableName = 'centers';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name_ar',
           'name_en',
           'link'
 );

}
