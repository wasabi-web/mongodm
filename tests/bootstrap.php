<?php

if ( ! file_exists($file = __DIR__.'/../vendor/autoload.php')) {
    echo "You must install the dev dependencies using:\n";
    echo "    composer install --dev\n";
    exit(1);
}

date_default_timezone_set('UTC');

$loader = require_once $file;

$map = array(
        'WasabiWeb\Mongodm\Test\Model\Base'=> __DIR__."/Model/Base.php",
        'WasabiWeb\Mongodm\Test\Model\User'=> __DIR__."/Model/User.php",
        'WasabiWeb\Mongodm\Test\Model\Book'=> __DIR__."/Model/Book.php",
        'WasabiWeb\Mongodm\Test\Model\Student'=> __DIR__."/Model/Student.php",
        'WasabiWeb\Mongodm\Test\Model\Pupil'=> __DIR__."/Model/Pupil.php",
        'WasabiWeb\Mongodm\Test\Model\Pet'=> __DIR__."/Model/Pet.php",
        'WasabiWeb\Mongodm\Test\Model\DataType'=> __DIR__."/Model/DataType.php"
    );
$loader->addClassMap($map);

$loader->add('WasabiWeb\Mongodm\Test', __DIR__);
