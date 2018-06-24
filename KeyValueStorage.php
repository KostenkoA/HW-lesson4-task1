<?php

namespace App\DesignPatterns;


class KeyValueStorage implements KeyValueStorageInterface
{
    private $storage = [];

    public function set($key, $value)
    {
       $this->storage[$key] = $value;
    }

    public function get($key)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }
    }

    public function has($key)
    {
        if (isset($this->storage[$key])){
            return true;
        }

        return false;
    }

    public function remove($key)
    {
        if (isset($this->storage[$key])){
            unset($this->storage[$key]);
        }
    }

    public function clear()
    {
        $this->storage = [];
    }
}