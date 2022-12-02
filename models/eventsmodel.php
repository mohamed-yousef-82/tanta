<?php
namespace project\models;
class EventsModel extends AbstractModel
{
 protected static $tableName = 'events';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'title_ar',
           'title_en',
           'details_ar',
           'details_en',
           'date',
           'file'
 );
}
