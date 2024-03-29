<?php
class ArrayList {
    public array $container;
    public int $limit;

    public function __construct($limit){
        $this->container = [];
        $this->limit = $limit;
    }

    public function add($item){
        if(!$this->isFull()){
            array_push($this->container, $item);
        }else {
            echo "Danh sách đã đầy";
        }
      
    }
    public function remove($index){
        if(array_key_exists($index,$this->container)){
            unset($this->container[$index]);
        }else{
            echo "Không tồn tại phần tử tại vị trí " . $index;
        }
    }
    public function update($index,$item){
        if(array_key_exists($index,$this->container)){
            $this->container[$index] = $item;
        }else{
            echo "Không tồn tại phần tử tại vị trí " . $index;
        }
    }
    public function size(){
        return count($this->container);
    }
    public function isFull(){
        return $this->size() == $this->limit;
    }
    public function getByIndex($index){
        if(array_key_exists($index,$this->container)){
            return $this->container[$index];
        }else{
            echo "Không tồn tại phần tử tại vị trí " . $index;
        }
    }
}