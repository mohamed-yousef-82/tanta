<?php
namespace project\models;
class ArticleModel extends AbstractModel
{
 protected static $tableName = 'articles';
 protected static $tableJoinName = 'categories';
 protected static $primaryKey = 'id';
 protected static $join_id = 'cat_id';
 protected static $tableSchema = array(
           'title_ar',
           'title_en',
           'details_ar',
           'details_en',
           'file',
           'cat_id'
 );

}
