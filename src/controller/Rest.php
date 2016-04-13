<?php
/**
 * Test controller for testing REST actions
 * User: yuri.blanc
 * Date: 13/04/2016
 * Time: 11:08
 */

namespace controller;


class Rest
{

    public function get($params) {
        print_r($params['GET']);
    }
    public function post($params) {
        print_r($params['POST']);
    }
    public function put($params) {
        print_r($params['PUT']);
    }
    public function patch($params) {
        print_r($params['PATCH']);
    }
    public function delete($params) {
        print_r($params['DELETE']);
    }
    public function head($params) {
        print_r($params['HEAD']);
    }
    public function options($params) {
        print_r($params['OPTIONS']);
    }



}