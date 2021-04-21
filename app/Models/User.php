<?php

namespace App\Models;

class User {
    private $id;
    private $name;
    private $pass;
    public function __construct($name, $pass) {
        $this->name = $name;
        $this->pass = $pass;
        $this->id = $this->generateRandomString(8);
    }
    function set_name($name) {
        $this->name = $name;
    }
    function set_pass($pass) {
        $this->pass = $pass;
    }
    function get_name() {
        return $this->name;
    }
    function get_pass() {
        return $this->pass;
    }
    function get_id() {
        return $this->id;
    }
    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
