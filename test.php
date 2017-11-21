<?php
require_once "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

class Math
{
    public function multiplicate($x, $y)
    {
        return $x * $y;
    }
}


final class MathTest extends TestCase
{
    public function testMultiplicate()
    {
        $result = 10;
        $x = 5;
        $y = 2;
        $math = new Math();
        $res = $math->multiplicate($x, $y);
        $this->assertTrue($result == $res);

        $result = 10;
        $x = 10;
        $y = 2;
        $math = new Math();
        $res = $math->multiplicate($x, $y);
        $this->assertFalse($result == $res);
    }
}


class Post
{
    public function getPost()
    {
        return 'post';
    }

    public function thePost()
    {
        echo $this->getPost();
    }
}

