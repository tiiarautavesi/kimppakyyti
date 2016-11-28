<?php
require_once("config/config.php");
require_once("register.php");
SSLon(); //tulee configistä



function registry(){
    if ($_POST['email'] && $_POST['password']){
        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $email = mysql_real_escape_string($_POST['email']);
        $phone = mysql_real_escape_string($_POST['phone']);
        $bday = mysql_real_escape_string($_POST['bday']);
        $sex = mysql_real_escape_string($_POST['sex']);
        $password = mysql_real_escape_string(hash("sha512", $_POST['password']));
        $check = mysql_fetch_array(mysql_query("SELECT * FROM kk_person WHERE email='$email''"));
        if ($check != '0'){
            echo "Tämä sähköpostiosoite on jo käytössä";
        }
    $suola = hash("sha512", rand(). rand(). rand());
    mysql_query("INSERT INTO kk_person (email, pword, fname, lname, phonenumber, bdate, sex) VALUES ('$email', '$password', '$fname', '$lname', '$phone', '$bday', '$sex')");
        setcookie("c_email", hash("sha512", $email), time() +24*60*60, "/");
        setcookie("c_suola", $suola, time() + 24*60*60, "/");
        echo"Käyttäjäsi on luotu ja olet kirjautunut sisään";
    }
}

/*
include_once("includes/iheader.php"); //mikä tän tarkotus on maailmassa???

 //onko painettu
 //tallennetaan assosiatiiviseen taulukkoon
    $data['fname'] = $_POST['fname'];
    $data['lname'] = $_POST['lname'];
    $data['email'] = $_POST['email'];
    $data['password'] = hash('sha256', $_POST['password']."jee"); //jee=suola
    $data['phone'] = $_POST['phone'];
    $data['bday'] = $_POST['bday'];
    $data['sex'] = $_POST['sex'];
    $data['license'] = "";
    //tallennetaan tietokantaan 

$userdata = unserialize($_SESSION['givenData']); //tekstistä taulukoksi
$data['email'] = $userdata['email'];

try{
    $STH = $DBH->prepare("SELECT * FROM kk_person WHERE email=:email");
    $STH->execute($data);
    $row = $STH->fetch(); 
    if($STH->rowCount() == 0){
        
     try{
        $stm = $DBH->prepare("INSERT INTO kk_person (fname, lname, sex, phonenumber, email, pword, license) VALUES(:fname,:lname,:sex,:phone,:email,:password,:kortti);");
        if($stm->execute([$data])){
            //rekisteröityminen onnistui
            echo("Rekisteröityminen onnistui");
            $sql = "SELECT * FROM kk_person WHERE email = ".$DBH->lastInsertEmail().";";
            $STH3 = $DBH->query($sql);
            $STH3->setFetchMode(PDO::FETCH_OBJ);
            $user = $STH3->fetch();
            $_SESSION['loggedin'] ='yes';
            $_SESSION['fname'] = $user->fname;
            $_SESSION['lname'] = $user->lname;
            $_SESSION['email'] = $user->email;
            $_SESSION['phone'] = $user->phone;
            $_SESSION['bday'] = $user->bday;
            $_SESSION['sex'] = $user->sex;
            redirect(logIn.php); 
        } else {
            echo("Virhe1");
        }
    }catch(PDOException $e) {
            echo 'Virhe2';
            file_put_contents('log/DBErrors.txt', 'tallennaKayttaja 3:'.$e->getMessage(). "\n", FILE_APPEND);
        }
        
    }else{
            echo "Sähköposti on jo käytössä.";
        }
}catch(PDOException $e){
            echo "Tietokantavirhe";
            file_put_contents('log/DBErrors.txt', 'tallennaKayttaja 1: '.$e->getMessage()."\n", FILE_APPEND);
            
        }


 if(isset($_POST["save"])){ //onko painettu
    //tallennetaan assosiatiiviseen taulukkoon
    $data['fname'] = $_POST['fname'];
    $data['lname'] = $_POST['lname'];
    $data['email'] = $_POST['email'];
    $data['password'] = hash('sha256', $_POST['password']."jee"); //jee=suola
    $data['phone'] = $_POST['phone'];
    $data['bday'] = $_POST['bday'];
    $data['sex'] = $_POST['sex'];
    //tallennetaan tietokantaan
    
    try{
        $stm = $DBH->prepare("INSERT INTO kk_person (fname, lname, sex, phonenumber, email, pword) VALUES(:fname,:lname,:sex,:phone,:email,:password);");
        if($stm->execute([$data])){
            //rekisteröityminen onnistui
            echo("Rekisteröityminen onnistui");
        } else {
            echo("Rekisteröityminen ei onnistunut");
        }
    }catch(PDOException $e) {
        echo 'Virhe haettaessa käyttäjätietoja';
        file_put_contents('log/DBErrors.txt', 'tallennaKayttaja 3:'.$E->GETMESSAGE(). "\n", FILE_APPEND);
    }catch(PDOException $e){
        echo "Sähköposti on jo käytössä.";
    }catch(PDOException $e){
        echo "Tietokantavirhe";
        file_put_contents('log/DBErrors.txt', 'tallennaKayttaja 1: '.$e->getMessage()."\n", FILE_APPEND);
            
    } 
        
*/


?>