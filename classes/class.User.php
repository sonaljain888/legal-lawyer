<?php

class User {

    public $data = array();

    public function set($key, $val) {
        $this->data[$key] = $val;
    }

    function login() {
        if (isset($this->data['request']) && isset($this->data["request"]['submit'])) {
            if($this->checkUserEmail($this->data['request']['email'])){
                $mailid = $db->quote($this->data['request']["email"]);
                $pass = $db->quote($this->data['request']["password"]);
                
                $db = new Db();
                $query = "select * from ".$this->tableName()." where EmailId=$mailid and Password=$pass";
                $db->select($query);
                
            }
        }
        return false;
    }

    private function tableName() {
        return "user";
    }

    public  function checkUserEmail($email) {
        if (strlen($email)) {
            if (!Validation::Email($email)) {
                    Error::set(INVALID_EMAIL);
            } else {
                $db = new Db();
                $email = $db->quote($email);
                $query = "SELECT UserId FROM user WHERE EmailId = $email";
                $row = $db->select($query);
                if(!count($row)){
                    Error::set(ACCOUNT_IS_NOT_EXIST);
                    return false;
                }else{
                    return true;
                }
            }
        } else {
            Error::set(INVALID_EMAIL_FORMAT);
            return FALSE;
        }
    }

    function registration() {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();

            $name = $db->quote($_REQUEST["name"]);
            $email = $db->quote($_REQUEST["email"]);
            $password = $db->quote($_REQUEST["password"]);
            $website = $db->quote($_REQUEST["website"]);
            $mobile = $db->quote($_REQUEST["mobile"]);
            $add = $db->quote($_REQUEST["add"]);
            $city = $db->quote($_REQUEST["city"]);
            $location = $db->quote($_REQUEST["location"]);
            $education = $db->quote($_REQUEST["education"]);
            $experience = $db->quote($_REQUEST["experience"]);
            $specialization = $db->quote($_REQUEST["specialization"]);
            $pra_court = $db->quote($_REQUEST["pra_court"]);
            $image = $db->quote($_FILES["image"]["name"]);
            $imgtemp = $db->quote($_FILES["image"]["tmp_name"]);
            move_uploaded_file($imgtemp, "../images/" . $image);
            $sql = "INSERT INTO user (Name,EmailId,Password,Website,Mobile,Address,City,Location,Education,
                Experiance,Specialization,PracticingCourt,Image) 
                values  ($name,$email,$password,$website,$mobile,$add,$city,$location,$education,$experience,
                $specialization,$pra_court,$image)";

            $db->query($sql);

            @header('Location: ../lawyer/userRegistration.php');
        }
    }

    function userupdate() {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();
            $sid = $_SESSION['id'];
            $name = $db->quote($_REQUEST["name"]);
            $email = $db->quote($_REQUEST["email"]);
            $password = $db->quote($_REQUEST["password"]);
            $website = $db->quote($_REQUEST["website"]);
            $mobile = $db->quote($_REQUEST["mobile"]);
            $add = $db->quote($_REQUEST["add"]);
            $city = $db->quote($_REQUEST["city"]);
            $location = $db->quote($_REQUEST["location"]);
            $education = $db->quote($_REQUEST["education"]);
            $experience = $db->quote($_REQUEST["experience"]);
            $specialization = $db->quote($_REQUEST["specialization"]);
            $pra_court = $db->quote($_REQUEST["pra_court"]);
            $image = $db->quote($_FILES["image"]["name"]);
            $imgtemp = $db->quote($_FILES["image"]["tmp_name"]);
            move_uploaded_file($imgtemp, "../images/" . $image);
            $sql = "update user  set Name=$name,EmailId=$email,Password=$password,Website=$website,Mobile=$mobile,Address=$add,
                City=$city,Location=$location,Education=$education,Experiance=$experience,Specialization=$specialization,
                    PracticingCourt=$pra_court,Image=$image where UserId=$sid";
            $db->query($sql);
            //@header('Location: ../lawyer/userRegistration.php');
        }
    }

    function deleteuser() {
        $db = new Db();
        $db->connect();
        $sid = $_SESSION['id'];
        $sql = "delete from user where UserId=$sid";
        $db->query($sql);
    }

}
?>






