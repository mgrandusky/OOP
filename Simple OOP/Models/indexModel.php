<?php
/** Autoloading The required Classes **/


class IndexModel
{
    function __construct(){
      
    }

    public function getUsers(){
        $users = [
            ["name" => "Mason Grandusky", "Phone Number" => "555-555-5555"],
            ["name" => "Kerry Grandusky", "Phone Number"=> "444-444-4444"]
            ];
        return json_encode($users);
    }
}
 ?>
