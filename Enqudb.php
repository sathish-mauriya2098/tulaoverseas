<?php
define('DB_NAME','enyaedu_tula_enquiry');
define('DB_USER','enyaedu_tula');
define('DB_PASSWORD','tulaenquiry');
define('DB_HOST','localhost');
$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$link)
{
    die('Could not connect:'.mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
    die('Can not use'.DB_NAME.':'.mysql_error());
}

    $headers = "From:tulaoverseas@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $course=$_POST['course'];
    $country=$_POST['country'];
    $email=$_POST['mail'];
    $viabletime=$_POST['time'];
    $existmail=mysql_query("select*from tula where MAILID='$email'");
    $msg="<b>Name :</b>$name<br>
<b>Mobile No :</b>$mobile<br>
<b>Course looking for :</b>$course<br>
<b>Country looking for :</b>$country<br>
<b>Emai :</b>$email<br>
<b>Viable time to call  :</b>$viabletime";
$sql="INSERT INTO tula(NAME,MOBILENO,COURSE_LOOKING,COUNTRY_LOOKING,EMAILID,VIABLE_TIME)
VALUES('$name','$mobile','$course','$country','$email','$viabletime')";
    if (mysql_num_rows($existmail)>0) {
    echo'<html><body><br><br><br><br><br><br><br><br><center><h1>Mail already exists.Please enter new mail id.<br>Click <a href="enquiry.php">here</a> to go back.</h1></center></body></html>';
}
     else
        {
           mysql_query($sql);
            echo"<html><body><br><br><br><br><br><br><br><br><center><h1>Request submitted Sucessfully.</h1></center></body></html>";
         mail("tulaoverseas@gmail.com","TULA Enquiry",$msg,$headers); 
     }

mysql_close();
?>