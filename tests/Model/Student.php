<?php

namespace WasabiWeb\Mongodm\Test\Model;

class Student extends User
{

     protected static $attrs = array(

         'grade' => array('type'=>'string'),

    );

}
