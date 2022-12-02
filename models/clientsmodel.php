<?php
namespace project\models;
class ClientsModel extends AbstractModel
{
 protected static $tableName = 'clients';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name_ar',
           'name_en',
           'file'
 );

}
