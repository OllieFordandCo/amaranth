<?php

namespace OllieFordandCo\Amaranth\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \OllieFordandCo\Amaranth\Contracts\Provider
     */
    public function driver($driver = null);
}