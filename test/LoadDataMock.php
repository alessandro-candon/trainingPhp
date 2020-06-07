<?php

namespace test;

use src\LoadDataInterface;

/**
 * Class LoadDataMock
 * @package test
 */
class LoadDataMock implements LoadDataInterface
{
    /**
     * @inheritDoc
     */
    public function getPersonalData(): ?array
    {
        return [
            0 => [
                    'id' => 1,
                    'first_name' => 'Pierson',
                    'last_name' => 'Seelbach',
                    'email' => 'pseelbach0@tinypic.com',
                    'gender' => 'Male',
                    'ip_address' => NULL,
                    'car' => NULL,
                ]
        ];
    }
}