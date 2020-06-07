<?php

namespace src;

/**
 * Class NameController
 * @package src
 */
class NameController
{
    /** @var  */
    public $file;

    public function __construct(LoadDataInterface $file)
    {
        $this->file = $file;
    }

    /**
     *
     */
    public function getFirstNameStartLetter()
    {
        return $this->getNameFromArray($this->file->getPersonalData());
    }

    /**
     * @param array $array
     * @return mixed
     */
    public function getNameFromArray(array $array)
    {
        $values = [];

        foreach ($array as $key => $arr)
        {
            foreach ($arr as $key => $val)
            {
                if($key == 'first_name'){
                    $values[] = $val;
                }
            }
        }

        return $values;

    }
}