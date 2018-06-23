<?php

        class Car{
        public $name = '';
        public $color = '';
        
        public function result($nm){
            $this->name = $nm;
        }
        
        public function __construct() {
            echo 'This object is running now';
        }
    }