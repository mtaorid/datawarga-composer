<?php
class Warga {
  public $id;
  public $ktp;
  public $name;
  public $address;
  public $phone;
  public $occupation;
  public $is_mustamik;
  public $majlis_id;
  public $birth_place;
  public $birth_date;

  function set_id($id){
    $this->id = $id;
  }
  function get_id(){
    return $this->id;
  }

  function set_ktp($ktp){
    $this->ktp = $ktp;
  }
  function get_ktp(){
    return $this->ktp;
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

  function set_phone($phone){
    $this->phone = $phone;
  }
  function get_phone(){
    return $this->phone;
  }

  function set_occupation($occupation){
    $this->occupation = $occupation;
  }
  function get_occupation(){
    return $this->occupation;
  }

  function set_is_mustamik($is_mustamik){
    $this->is_mustamik = $is_mustamik;
  }
  function get_is_mustamik(){
    return $this->is_mustamik;
  }

  function set_majlis_id($majlis_id){
    $this->majlis_id = $majlis_id;
  }
  function get_majlis_id(){
    return $this->majlis_id;
  }

  function set_birth_place($birth_place){
    $this->birth_place = $birth_place;
  }
  function get_birth_place(){
    return $this->birth_place;
  }

  function set_birth_date($birth_date){
    $this->birth_date = $birth_date;
  }
  function get_birth_date(){
    return $this->birth_date;
  }
}
?>