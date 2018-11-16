<?php

namespace OllieFordandCo\Amaranth;

use InvalidArgumentException;
use Illuminate\Support\Manager;

class Amaranth implements Contracts\Factory
{


}


$amaranth = new Amaranth;
$amaranth->with('facebook')->getDriver();