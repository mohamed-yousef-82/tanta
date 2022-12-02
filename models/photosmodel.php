<?php
namespace project\models;
class PhotosModel extends AbstractModel
{
 protected static $tableName = 'photos';
 protected static $tableJoinName = 'photosfilter';
 protected static $primaryKey = 'id';
 protected static $join_id = 'filter_id';
 protected static $tableSchema = array(
           'title_ar',
           'title_en',
           'details_ar',
           'details_en',
           'file',
           'filter_id'
 );

}
