<?php

namespace App\DesignPatterns;


class InMemoryStorage implements KeyValueStorageInterface
{
    private $storage = [];

    public function set($key, $value)
    {
       $this->storage[$key] = $value;
    }

    public function get($key)
    {
        return $this->storage[$key];
    }

    public function has($key)
    {
        if (isset($this->storage[$key])){
            return $key.' is exist in storage';
        }

        return $key.' does not exist in storage';
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