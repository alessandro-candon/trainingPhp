<?php

namespace src;

require_once __DIR__ . '/../bootstrap.php';

interface Loader
{
    public function load(string $path);
    public function parse();
}