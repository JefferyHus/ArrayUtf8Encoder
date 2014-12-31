class arrayConverter{
      
      public function __Construct(){}
      
      /*encode array to utf8*/
      function utf8_converter($array){
          array_walk_recursive($array, function(&$item, $key){
              if(!mb_detect_encoding($item, 'utf-8', true)){
                      $item = utf8_encode($item);
              }
          });
        return $array;
      }
        
      /** encode arrays into arrays to Json**/
      function arrayToSimple($array, $table_fields){
        $i=0;$c=0;
        foreach($array as $row => $innerArray){
          $c+=1;
          foreach($innerArray as $innerRow => $value){
            $SimpleArray[$c][$table_fields[$i]]=$value;
            $i+=1;
          }
          $i=0;
        }
          return $SimpleArray;
      }
        
      /** Convert stdClass to array **/
      function objectToArray($array) {
        if (is_object($array)) {
          // Gets the properties of the given object
          // with get_object_vars function
          $array = get_object_vars($array);
        }
        return $array;
      }
}
