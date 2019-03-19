

<?php 
class GetValue_class {
   private $name;
   private  $gender;
   private  $province;
   private  $email;

    public static function setName($name) {
        $this->name = $name;
       
    }

    public static function gender($gender) {
        $this->gender = $gender;
       
    }
    public static function province($province) {
        $this->province= $province;
       
    }
    public static function email($email) {
        $this->email = $email;
       
    }

    public static function getValue() {
       $name = $this->name;
       $gender = $this->gender;
       $province = $this->province;
       $email = $this->email;
       return [ $name, $gender, $province, $email];
    }


}