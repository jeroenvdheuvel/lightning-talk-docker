<?php

namespace Werkspot\LightningTalk;

class HelloWorld
{
    /**
     * @param string $name
     * @return string
     */
    public function sayHelloTo($name)
    {
        if (empty($name))
            $name = 'world';

        return 'Hello ' . ucwords(strtolower($name));
    }
}
