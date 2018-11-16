<?php

require_once "dataobject.php";

class Charities extends DataObject {

  protected $data = array(
    "charity_id" => "",
    "charity_phone_no" => "",
    "charity_name" => "",
    "charity_discription" => "",
    "charity_addressg" => "",
    "charity_facebook" => "","charity_photo" => ""
      );
public static function getcharity() {
    $conn = parent::connect();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . charity;

    try {
     
      $st = $conn->prepare( $sql );      $st->execute();
      $charitytb = array();
      foreach ( $st->fetchAll() as $row ) {
        $charitytb[] = new Charities( $row );
      }
      parent::disconnect( $conn );
      return array( $charitytb);
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }

  public static function getcharityid($charity_id) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . charity . " WHERE charity_id = $charity_id";
    try {
      
      $st = $conn->query( $sql );
      $row = $st->fetch();
      parent::disconnect( $conn );
      if ( $row ) return new Charities( $row );
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }

  }

?>