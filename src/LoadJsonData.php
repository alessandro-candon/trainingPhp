<?php

namespace src;

/**
 * Class LoadJsonData
 * @package src
 */
class LoadJsonData implements LoadDataInterface
{
    /**
     * @return array|null
     */
    public function getPersonalData():? array
    {
        return json_decode(file_get_contents('../resources/personal.json'));
    }
}