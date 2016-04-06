<?php

/**
 * This is table "welcome"
 * The model name should be equal to the table name, case insensitive
 */
class Welcome extends yuxblank\phackp\core\database
{
    /**
     * This is column "message"
     * Attribute must be public and have the same name of the column case insensitive
     * @var
     */
    public $message;


    public function getHelloWorld() {

        /*
         * Real world:
         * return $this->find("message=?", "Hello pHackp");
         * Will query (select * from welcome where message = 'Hello pHackp') and fetch $this instance
         * */

        // example
        return "Hello pHackp!";

    }

}