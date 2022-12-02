<?php
namespace project\models;
class SpuniModel extends AbstractModel
{
 protected static $tableName = 'sp_uni';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name_ar',
           'name_en',
           'link'
 );

}
