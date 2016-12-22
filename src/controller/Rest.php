<?php
/**
 * Test controller for testing REST actions
 * User: yuri.blanc
 * Date: 13/04/2016
 * Time: 11:08
 */

namespace controller;

/**
 * This is just an example to test RESTful routes mappings and params
 * Class Rest
 * @package controller
 */

class Rest
{

    public function get($params) {
        print_r($params);
    }
    public function post($params) {
        print_r($params);
    }
    public function put($params) {
        print_r($params);
    }
    public function patch($params) {
        print_r($params);
    }
    public function delete($params) {
        print_r($params);
    }
    public function head($params) {
        print_r($params);
    }
    public function options($params) {
        print_r($params);
    }



}