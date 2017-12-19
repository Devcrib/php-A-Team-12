<?php 

class Validate {

    public function ifExists($arr, $field, $val){
        foreach($arr as $arr=>$user){
            if($user->$field === $val) {
                return false;
            }
        }
        return true;
    }

}

