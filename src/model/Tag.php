<?php
/**
 * Created by IntelliJ IDEA.
 * User: yuri.blanc
 * Date: 15/04/2016
 * Time: 11:12
 */

namespace model;


use yuxblank\phackp\core\Model;

class Tag extends Model
{
    public $id;
    public $tag;
    public $post_id;


    public function posts() {
        return $this->oneToMany($this, 'model\\Post');
    }

}