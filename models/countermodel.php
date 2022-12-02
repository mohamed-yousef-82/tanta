<?php
namespace project\models;
class CounterModel extends AbstractModel
{
 protected static $tableName = 'counter';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'title_ar',
           'title_en',
           'count',
           'icon'
 );
}
