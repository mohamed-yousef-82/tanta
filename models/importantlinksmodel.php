<?php
namespace project\models;
class ImportantlinksModel extends AbstractModel
{
 protected static $tableName = 'importantlinks';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name_ar',
           'name_en',
           'link',
           'file'
 );

}
