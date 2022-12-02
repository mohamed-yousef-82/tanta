<?php
namespace project\models;
class ContactsModel extends AbstractModel
{
 protected static $tableName = 'contacts';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'phone',
           'email',
           'address_ar',
           'address_en',
           'fax',
           'post',
           'googlemap',
           'file'
 );
}
