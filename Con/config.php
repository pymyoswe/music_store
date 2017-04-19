<?php session_start();

class Users{

    public function __construct(){
        try{
            $this->db=new PDO('mysql:host=localhost;dbname=MusicStore','root','root');
        }catch (PDOException $e){
            die("Connection fail");
        }

    }




    public function reg($userName,$email,$password,$userPhoto,$tmp){

       $canReg=$this->db->query("SELECT userName,Email FROM User WHERE userName='$userName'" );
        $pw=$canReg->fetch(PDO::FETCH_ASSOC);

       if(!$pw['userName']){
            $epw=md5($password);
            //echo $userName,$email,$password,$userPhoto,$tmp;

            move_uploaded_file($tmp,"UserPhoto/$userPhoto");
            $query="INSERT INTO User(userName,Email,Password,userPhoto,userRole,created_date) VALUES ('$userName','$email','$epw','$userPhoto',0,now())";
            $this->db->query($query);
            header("location:../index.php");

        }else{
            $_SESSION['error']="Failed register!";
            header("location:../register.php");
        }


    }

    public function login($userName,$ePassword)
    {

        $apt = $this->db->query("SELECT userName FROM User WHERE userName='$userName'");
        $canLogin = $apt->fetch(PDO::FETCH_ASSOC);

        if ($canLogin['userName']) {

            $p = $this->db->query("SELECT Password,userRole FROM User WHERE userName='$userName'");
            $pw = $p->fetch(PDO::FETCH_ASSOC);

            $userRole=$pw['userRole'];

            if ($pw['Password'] == $ePassword) {

                if($userRole=='1'){
                    $_SESSION['role']="admin";
                    $_SESSION['control'] = $userName;
                    header("location:userProfile.php");
                }else{
                    $_SESSION['role']="normal";
                    $_SESSION['control'] = $userName;
                    header("location:userProfile.php");
                }

            } else {
                $_SESSION['errorLogin'] = "Failed!";
                header("location:../login.php");
            }

        } else {
            $_SESSION['errorLogin'] = "Failed!";
            header("location:../login.php");
        }


    }

    public  function userByName($ses){

        $uName = $this->db->query("SELECT * FROM User WHERE userName='$ses'");
        $uNamedb = $uName->fetch(PDO::FETCH_ASSOC);
        return $uNamedb;

    }

    public function show(){
        return $this->db->query("SELECT * FROM User");


    }

    public function deleteUser($id){
        $q="DELETE FROM User WHERE id IN ($id)";
        $this->db->query($q);
    }


    public function newVideo($vName,$vFileName){

        $query="INSERT INTO Videos(videoName,videoFilename,created_date) VALUES ('$vName','$vFileName',now())";
        $this->db->query($query);

        header("location:dashboard.php");

    }

    public function showVideolist(){
        return $this->db->query("SELECT * FROM Videos");
    }


}
?>