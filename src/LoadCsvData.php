<?php

namespace src;

/**
 * Class LoadCsvData
 * @package src
 */
class LoadCsvData implements LoadDataInterface
{
    /**
     * @return array|null
     */
    public function getPersonalData():? array
    {
        return fopen(file_get_contents('../resources/personal.csv'), 'r');
    }
}