<?php
/**
 * Created by IntelliJ IDEA.
 * User: TheCo
 * Date: 11/04/2016
 * Time: 19:38
 */

namespace model;


use yuxblank\phackp\core\Model;

class Post extends Model
{
    public $id;
    public $title;
    public $content;
    public $category_id;





    public function setExampleNoDbPost(){
        $this->id = 1;
        $this->title = 'No db title post';
        $this->content = 'No db content';
        $this->category_id = 1;
        return $this;
    }


    public function tags() {
        return $this->manyToMany($this,'model\\Tag');
    }


    public function tag() {
        return $this->oneToOne($this,'model\\Tag');
    }


}