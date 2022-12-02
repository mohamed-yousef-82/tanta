<?php
namespace project\models;
class CollegesModel extends AbstractModel
{
 protected static $tableName = 'colleges';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name_ar',
           'name_en',
           'link',
           'file'
 );

}
