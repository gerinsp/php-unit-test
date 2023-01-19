<?php

use PHPUnit\Framework\TestCase;

require_once 'WordCount.php';

Class SimpleTest extends TestCase
{
    public function testCountWord()
    {
        $wc = new WordCount();

        $testSentence = "my name is gerin";
        $wordCount = $wc->countWord($testSentence);

        $a = 2;
        $b = 1;

        $array = [];
        $arr_b = ['saya', 'gerin'];

        $example = null;

        // mengecek apakah hasilnya sama dengan nilai yang sudah di tentukan 
        // kebalikannya assertNotEquals()
        $this->assertEquals(4, $wordCount);

        // mengecek apakah suatu ekspresi bernilai true 
        // kebalikannya assertFalse()
        $this->assertTrue($a > $b);

        // mengecek apakah suatu variabel bernilai kosong
        // kebalikannya assertNotEmpty()
        $this->assertEmpty($array);

        // mengecek apakah suatu variabel nilainya lebih besar daripada nilai yang sudah ditentukan
        // kebalikannya assertLessThan()
        $this->assertGreaterThan(1, $a);

        // mengecek apakah suatu variabel memiliki nilai yang sama dengan nilai yang sudah ditentukan
        // kebalikannya assertNotContains()
        $this->assertContains('gerin', $arr_b);

        // mengecek apakah suatu objek merupakan instance dari kelas yang ditentukan
        $this->assertInstanceOf(WordCount::class, $wc);

        // mengecek apakah suatu variabel bernilai null
        // kebalikannya assertNotNull()
        $this->assertNull($example);
    }
}

