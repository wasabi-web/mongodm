<?php

namespace WasabiWeb\Mongodm\Test;

use WasabiWeb\Mongodm\Test\TestCase\PhactoryTestCase;

class GridFsTest extends PhactoryTestCase
{
    public function getGridFSPrefixes()
    {
        return array(
            array(null),
            array('files-')
        );
    }

    /**
    * @dataProvider getGridFSPrefixes
    */
    public function testGetGridFs($prefix)
    {
        $mongo_db = self::$db;
        $grid_fs = $mongo_db->gridFs($prefix);
        $this->assertInstanceOf('MongoGridFS', $grid_fs);
    }
}
