<?php

namespace Lrm\Yac;

use Illuminate\Contracts\Cache\Store;

use Illuminate\Cacche\RetrievesMultipleKeys;

class YacStore implements Store
{
    use RetrievesMultipleKeys;

    public function get($key)
    {

    }

    public function put($key, $value, $minutes)
    {

    }

    public function increment($key, $value = 1)
    {

    }

    public function decrement($key, $value = -1)
    {

    }

    public function forever($key, $value)
    {

    }

    public function forget($key)
    {

    }

    public function flush()
    {

    }

    public function getPrefix()
    {

    }
}