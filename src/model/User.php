<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuri.blanc
 * Date: 11/05/2016
 * Time: 16:45
 */

namespace model;


use yuxblank\phackp\database\Model;

class User extends Model
{

    /**
     * @var 
     */
    public $id;
    public $username;
    public $password;

}