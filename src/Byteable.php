<?php

namespace Ajax\Zoo;

interface Byteable
{
    /**
     * Bytes some $object
     *
     * @param string $object
     *
     * @return void
     */
    public function byte(string $object);
}
