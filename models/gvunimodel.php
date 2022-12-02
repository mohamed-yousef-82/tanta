<?php
namespace project\models;
class GvuniModel extends AbstractModel
{
 protected static $tableName = 'gv_uni';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name_ar',
           'name_en',
           'link'
 );

}
