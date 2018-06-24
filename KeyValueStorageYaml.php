<?php

namespace App\DesignPatterns;

use Symfony\Component\Yaml\Yaml;

class KeyValueStorageYaml implements KeyValueStorageInterface
{
    private $yamlStorage = [];

    public function set($key, $value)
    {
        $this->yamlStorage[$key]=$value;
        file_put_contents('./Storage/KeyValueStorage.yaml',Yaml::dump($this->yamlStorage));
    }

    public function get($key)
    {
        $parse = Yaml::parseFile('./Storage/KeyValueStorage.yaml');

        if (isset($parse[$key])){
            return $parse[$key];
        }

        return false;

    }

    public function clear()
    {
        file_put_contents('./Storage/KeyValueStorage.yaml',Yaml::dump($this->yamlStorage=[]));
    }

    public function remove($key)
    {
        $parse = Yaml::parseFile('./Storage/KeyValueStorage.yaml');

        if (isset($parse[$key])){
            unset ($parse[$key]);
            $yaml = Yaml::dump($parse);
            file_put_contents('./Storage/KeyValueStorage.yaml',$yaml);
        }
    }

    public function has($key)
    {
        $parse = Yaml::parseFile('./Storage/KeyValueStorage.yaml');

        if (isset($parse[$key])) {
            return true;
        }

        return false;
    }
}