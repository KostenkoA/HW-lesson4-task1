<?php

namespace App\DesignPatterns;


class KeyValueStorageJson implements KeyValueStorageInterface
{
    private $jsonStorage = [];

    public function set($key, $value)
    {
        $this->jsonStorage[$key] = $value;
        \file_put_contents('./Storage/KeyValueStorage.json',\json_encode($this->jsonStorage));
    }

    public function get($key)
    {
        $dataObject = \json_decode(\file_get_contents('./Storage/KeyValueStorage.json'));

        if (isset($dataObject->{$key})){
            return $dataObject->{$key};
        }

        return false;
    }

    public function has($key)
    {
        $dataObject = \json_decode(\file_get_contents('./Storage/KeyValueStorage.json'));

        if (isset($dataObject->{$key})){
            return true;
        }

        return false;
    }

    public function remove($key)
    {
        $dataObject = \json_decode(\file_get_contents('./Storage/KeyValueStorage.json'));

        if (isset($dataObject->{$key})){
            unset($dataObject->{$key});
            \file_put_contents('./Storage/KeyValueStorage.json',\json_encode($dataObject));
        }

        return false;
    }

    public function clear()
    {
        \file_put_contents('./Storage/KeyValueStorage.json',\json_encode($this->jsonStorage = []));
    }
}