<?php
namespace project\models;
class CategoryModel extends AbstractModel
{
 protected static $tableName = 'categories';
 protected static $articlestableName = 'articles';
 protected static $primaryKey = 'id';
 protected static $articlesKey = 'cat_id';
 protected static $tableSchema = array(
           'name_ar',
           'name_en'
 );

}
