<?php

namespace Mdl\Amaranth\Contracts;

interface Factory
{
    /**
     * Get an OAuth provider implementation.
     *
     * @param  string  $driver
     * @return \Mdl\Amaranth\Contracts\Provider
     */
    public function driver($driver = null);
}