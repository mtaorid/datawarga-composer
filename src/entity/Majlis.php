<?php
class Majlis {
  public $id;
  public $code;
  public $name;
  public $address;

  function set_id($id){
    $this->id = $id;
  }
  function get_id(){
    return $this->id;
  }

  function set_code($code){
    $this->code = $code;
  }
  function get_code(){
    return $this->code;
  }

  function set_name($name){
    $this->name = $name;
  }
  function get_name(){
    return $this->name;
  }

  function set_address($address){
    $this->address = $address;
  }
  function get_address(){
    return $this->address;
  }
}
?>