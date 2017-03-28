<?php

namespace Lrm\Yac;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Cache\RetrievesMultipleKeys;

class YacStore implements Store
{
    use RetrievesMultipleKeys;

    protected $yac;

    protected $prefix;

    public function __construct($prefix = '')
    {
        $this->yac = new \Yac($prefix);
        $this->prefix = $prefix;
    }

    public function get($key)
    {
        $value = $this->yac->get($this->itemKey($key));

        if ($value !== false) {
            return $value;
        }
    }

    public function put($key, $value, $minutes)
    {
        $this->yac->set($this->itemKey($key), $value, $minutes);
    }

    public function increment($key, $value = 1)
    {
        //
    }

    public function decrement($key, $value = -1)
    {
        //
    }

    public function forever($key, $value)
    {
        //
    }

    public function forget($key)
    {
        $this->yac->delete($this->itemKey($key));
    }

    public function flush()
    {
        $this->yac->flush();
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    protected function itemKey($key)
    {
        return md5($key);
    }
}