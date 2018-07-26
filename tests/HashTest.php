<?php

namespace L5MD5Hash\Md5Hash\Test;

use Hashnator\Md5Hash\Md5Hash;
use PHPUnit\Framework\TestCase;

class HashTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->hash = new Md5Hash();
    }

    /**
     * @test
     */
    public function make_function_returns_correct_md5_hashed_value()
    {
        $this->assertSame(md5('marcus.campos'), $this->hash->make('marcus.campos'));
    }

    /**
     * @test
     */
    public function check_function_returns_correct_value()
    {
        $this->assertTrue($this->hash->check('marcus.campos', md5('marcus.campos')));
        $this->assertFalse($this->hash->check('campos', md5('marcus')));
    }

    /**
     * @test
     */
    public function needsRehash_function_returns_false()
    {
        $this->assertFalse($this->hash->needsRehash(md5('marcus')));
    }
}
