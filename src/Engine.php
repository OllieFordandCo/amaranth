<?php

namespace Mdl\Amaranth;

use InvalidArgumentException;
use Illuminate\Support\Manager;

class Amaranth extends Manager implements Contracts\Factory
{
    /**
     * Get a driver instance.
     *

     * @return mixed
     */
    public function with($driver)
    {
        return $this->driver($driver);
    }
    /**
     * Get the default driver name.
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        throw new InvalidArgumentException('No Amaranth driver was specified.');
    }

}
