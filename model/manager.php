<?php
class Manager extends Model{

    public function getArticle(){
        $this->getBdd();
        return $this->getAll('articles','Article');
    }
}


?>