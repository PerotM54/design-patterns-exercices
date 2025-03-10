<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config {

    protected static $instance = null;

    private $settings = [];

    private function __construct() {
        $this->settings = require '../config/config.php';
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function set($key, $val) {
        $this->settings[$key] = $val;
    }

    public function get($key) {
        return $this->settings[$key];
    }
}