<?php

namespace Werkspot\LightningTalk\Tests;

use PHPUnit_Framework_TestCase;
use Werkspot\LightningTalk\HelloWorld;

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getSayHelloNameData
     *
     * @param string $name
     * @param string $expectedMessage
     */
    public function testSayHelloTo_withName($name, $expectedMessage)
    {
        $helloWorld = new HelloWorld();
        $givenMessage = $helloWorld->sayHelloTo($name);

        $this->assertSame($expectedMessage, $givenMessage);
    }

    /**
     * @return array
     */
    public function getSayHelloNameData()
    {
        return [
            [null, 'Hello World'],
            ['', 'Hello World'],
            ['tester', 'Hello Tester'],
            ['Werkspot', 'Hello Werkspot'],
            ['ANYBODY', 'Hello Anybody'],
            ['Anybody his friend', 'Hello Anybody His Friend'],
            ['no-BODY', 'Hello No-body'],
        ];
    }
}
