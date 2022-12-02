<?php
namespace project\models;
class PageModel extends AbstractModel
{
 protected static $tableName = 'page';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'title_ar',
           'title_en',
           'details_ar',
           'details_en',
           'file'
 );

}
