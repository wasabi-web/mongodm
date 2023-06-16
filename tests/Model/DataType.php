<?php

namespace WasabiWeb\Mongodm\Test\Model;

class DataType extends Base
{

  public static $collection = "dataType";

  protected static $attrs = array(
    \WasabiWeb\Mongodm\Model::DATA_TYPE_ARRAY      => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_ARRAY,      'default'=>array(1,2,3)),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_BOOLEAN    => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_BOOLEAN,    'default'=>true),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_DATE       => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_DATE,       'default'=>"now"),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_DOUBLE     => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_DOUBLE,     'default'=>1.2345),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_EMBED      => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_EMBED,      'model'=>'WasabiWeb\Mongodm\Test\Model\Embed'),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_EMBEDS     => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_EMBEDS,     'model'=>'WasabiWeb\Mongodm\Test\Model\Embed'),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_INT        => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_INT,        'default'=>123),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_INTEGER    => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_INTEGER,    'default'=>456),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_MIXED      => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_MIXED,      'default'=>array(1,'a',array('b'=>'B'))),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_REFERENCE  => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_REFERENCE,  'model'=>'WasabiWeb\Mongodm\Test\Model\Refernece'),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_REFERENCES => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_REFERENCES, 'model'=>'WasabiWeb\Mongodm\Test\Model\Reference'),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_STRING     => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_STRING,     'default'=>'string'),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_TIMESTAMP  => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_TIMESTAMP,  'default'=>0),
    \WasabiWeb\Mongodm\Model::DATA_TYPE_OBJECT     => array('type'=>\WasabiWeb\Mongodm\Model::DATA_TYPE_OBJECT,     'default'=>array('a' => 'A')),
    'invalid'                                    => array('type'=>'invalid')
  );

}
