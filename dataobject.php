<?php

abstract class DataObject {
    protected $data = array();

    public function __construct( $data ) {
    foreach ( $data as $key => $value ) {
      if ( array_key_exists( $key, $this->data ) ) $this->data[$key] = $value;
        }
    }

    public function getValue( $field ) {
        if ( array_key_exists( $field, $this->data ) ) {
        return $this->data[$field];
        } else {
        die( "Field not found" );
        }
    }

    public function getValueEncoded( $field ) {
        return htmlspecialchars( $this->getValue( $field ) );
    }

    protected static function connect() {
        try {
        $conn = new PDO( 'mysql:dbname=donation', 'root', '' );
        $conn->setAttribute( PDO::ATTR_PERSISTENT, true );
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        } catch ( PDOException $e ) {
        die( "Connection failed: " . $e->getMessage() );
        }
        return $conn;
    }

    protected static function disconnect( $conn ) {
        $conn = "";
    }
    public static function displayPageError(){
        ?> 
                <div style="margin-top: 20%;">
                    <p style="color: red;font-size: 22px;text-align: center;">Not Found</p>
                </div>
          
    <?php } 

}

?>
