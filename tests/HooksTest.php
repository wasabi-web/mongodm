<?php

namespace WasabiWeb\Mongodm\Test;

use WasabiWeb\Mongodm\Test\TestCase\PhactoryTestCase;
use WasabiWeb\Mongodm\Test\Model\Pupil;

class HooksTest extends PhactoryTestCase
{
    public function testInit()
    {

        $user = new Pupil();
        $user->name = "michael";
        $user->save();

        $this->assertEquals("init", $user->init_data);

    }

    public function testPresave()
    {

        $user = new Pupil();
        $user->name = "michael";
        $user->save();
        $this->assertEquals("ohohoh", $user->pre_save_data);

    }

}
