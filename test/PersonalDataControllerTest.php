<?php

namespace test;

use PHPUnit\Framework\TestCase;
use src\LoadCsvData;
use src\LoadJsonData;
use src\NameController;

/**
 * Class PersonalDataControllerTest
 * @package test
 */
class PersonalDataControllerTest extends TestCase
{
    public function test_getFirstNameStartLetter()
    {
       $file =  new LoadDataMock();
       $res = (new NameController($file))->getFirstNameStartLetter();

       var_dump($res);
    }

    public function test_getFirstNameStartLetterJson()
    {
        $file = new LoadJsonData();
        $res = (new NameController($file))->getFirstNameStartLetter();

        var_dump($res);
    }

    public function test_getFirstNameStartLetterCsv()
    {
        $file = new LoadCsvData();
        $res = (new NameController($file))->getFirstNameStartLetter();

        var_dump($res);
    }
}