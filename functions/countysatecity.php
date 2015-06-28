<?php



class CSCfun {

    function insertcountry() {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();

            $name = $db->quote($_REQUEST["cname"]);

            $sql = "INSERT INTO country (CountryName,IsActive) values($name, 1)";

            $db->query($sql);

            @header('Location: ../addcountry.php');
        }
    }

    function fetchcountry() {
        $db = new Db();
        $db->connect();
        $sql = mysql_query("Select * from country");
        $result = mysql_fetch_array($sql);
        return $result;
    }

    function updatecountry($sid) {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();
            $name = $db->quote($_REQUEST["cname"]);
            $active - $db->quote($_REQUEST["status"]);
            $sql = "Update country set CountryName='$name',IsActive='$active' where CountryId='$sid'";

            $db->query($sql);

            @header('Location: ../addcountry.php');
        }
    }

    function deletecountry($sid) {
        $db = new Db();
        $db->connect();
        $sql = "Delete from country where CountryId='$sid'";
        $db->query($sql);
        @header('Location: ../addcountry.php');
    }

    function insertstates() {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();

            $countId = $db->quote($_REQUEST["cname"]);
            $sname = $db->quote($_REQUEST["sname"]);

            $sql = "INSERT INTO states(CountryId, StateName,IsActive) values('$countId','$sname', 1)";

            $db->query($sql);

            //@header('Location: ../addcountry.php');
        }
    }

    function fatchstate() {
        $db = new Db();
        $db->connect();
        $sid = $_SESSION['id'];
        $sql = mysql_query("Select * from states");
        $result = mysql_fetch_array($sql);
        return $result;
    }

    function updatestate($sid) {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();
            $countId = $db->quote($_REQUEST["countryid"]);
            $name = $db->quote($_REQUEST["cname"]);
            $active - $db->quote($_REQUEST["status"]);
            $sql = "Update states set CountryId='$countId',StateName='$name',IsActive='$active' where StateId='$sid'";
            $db->query($sql);
            //@header('Location: ../addcountry.php');
        }
    }

    function deletestate($sid) {
        $db = new Db();
        $db->connect();
        $sql = "Delete from states where StateId='$sid'";
        $db->query($sql);
        @header('Location: ../addcountry.php');
    }

    function insertcity() {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();
            $stateId = $db->quote($_REQUEST["cname"]);
            $cname = $db->quote($_REQUEST["sname"]);
            $sql = "INSERT INTO city(StateId, CityName,IsActive) values('$stateId','$cname', 1)";
            $db->query($sql);
        }
    }

    function fatchcity() {
        $db = new Db();
        $db->connect();
        $sql = mysql_query("Select * from city");
        $result = mysql_fetch_array($sql);
        return $result;
    }

    function updatecity($cid) {
        if (isset($_POST['submit'])) {
            $db = new Db();
            $db->connect();
            $sid = $_SESSION['id'];
            $stateId = $db->quote($_REQUEST["stateid"]);
            $name = $db->quote($_REQUEST["cname"]);
            $active - $db->quote($_REQUEST["status"]);
            $sql = "Update city set StateId='$stateId',CityName='$name'IsActive='$active' where CityId='$cid'";
            $db->query($sql);
            //@header('Location: ../addcountry.php');
        }
    }

    function deletecity($sid) {
        $db = new Db();
        $db->connect();
        $sql = "Delete from city where StateId='$sid'";
        $db->query($sql);
        //@header('Location: ../addcountry.php');
    }

}

?>
