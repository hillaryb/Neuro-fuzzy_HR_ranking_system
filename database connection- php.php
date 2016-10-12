<?php
if($_POST )
{
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

$selected = mysql_select_db("employment",$dbhandle) 
  or die("Could not select employment");

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $tel_number = $_POST['tel_number'];
  $dobx = $_POST['dob'];
  $nationality = $_POST['nationality'];
  $postal= $_POST['postal'];
  $id_no = $_POST['id_no'];
  $gender = $_POST['gender'];
  $University = strtolower($_POST['University']);$Degree = $_POST['Degree'];$CGPA = $_POST['CGPA'];$Startx = $_POST['Start'];$Endx = $_POST['End'];
  $institution = $_POST['institution'];$course = strtolower($_POST['course']);$CGPA1= $_POST['CGPA1'];$Start1x= $_POST['Start1'];$End1x = $_POST['End1'];
  $alevel = $_POST['a_level'];$award = $_POST['award'];$grade= $_POST['grade'];$Start2x= $_POST['Start2'];$End2x = $_POST['End2'];
  $olevel = $_POST['o_level'];$award1 = $_POST['award1'];$grade1= $_POST['grade1'];$Start3x= $_POST['Start3'];$End3x= $_POST['End3'];
  $organisation1 = $_POST['organisation1'];$start_date1x = $_POST['start_date1'];$end_date1x= $_POST['end_date1'];$position1= strtolower($_POST['position1']);
  $organisation2 = $_POST['organisation2'];$start_date2x = $_POST['start_date2'];$end_date2x= $_POST['end_date2'];$position2= strtolower($_POST['position2']);
  $organisation3 = $_POST['organisation3'];$start_date3x = $_POST['start_date3'];$end_date3x= $_POST['end_date3'];$position3= strtolower($_POST['position3']);
  $language1 = $_POST['language1'];$speak1= $_POST['speak1'];$read1= $_POST['read1'];$write1= $_POST['write1'];
  $language2 = $_POST['language2'];$speak2= $_POST['speak2'];$read2= $_POST['read2'];$write2= $_POST['write2'];
  $language3 = $_POST['language3'];$speak3= $_POST['speak3'];$read3= $_POST['read3'];$write3= $_POST['write3'];
  $about_me= strtolower($_POST['about_me']);
  //$motivation = $_POST['motivationx'];
  $motivation = (isset($_POST['motivationx']) ? $_POST['motivationx'] : '');

  

  $dob=date('Y-m-d',strtotime($dobx)); 
$Start=date('Y-m-d',strtotime($Startx));
$End=date('Y-m-d',strtotime($Endx));
$End1=date('Y-m-d',strtotime($End1x));
$Start1=date('Y-m-d',strtotime($Start1x));
$End2=date('Y-m-d',strtotime($End2x));
$Start2=date('Y-m-d',strtotime($Start2x));
$End3=date('Y-m-d',strtotime($End3x));
$Start3=date('Y-m-d',strtotime($Start3x));
$end_date1=date('Y-m-d',strtotime($end_date1x));
$start_date1=date('Y-m-d',strtotime($start_date1x));
$end_date2=date('Y-m-d',strtotime($end_date2x));
$start_date2=date('Y-m-d',strtotime($start_date2x));
$end_date3=date('Y-m-d',strtotime($end_date3x));
$start_date3=date('Y-m-d',strtotime($start_date3x));



if ($University == "makerere university") {
    $universityw = "5";
} elseif ($University == "") {
    $universityw = "0";
} else {
    $universityw = "3";
}

if ($Degree == "bachelor of commerce") {
    $Degreew = "5";
} elseif ($Degree == "bachelor of business administration") {
    $Degreew = "4";
} else {
    $Degreew = "1";
}


$CGPAw = $CGPA ;
$agradew = $grade ;
$one = "-0.1";
$ten = "10.8";
$ogradew = $one*$grade1 + $ten ;


 $date1=date_create($start_date1);
$date2=date_create($end_date1);
$diff=date_diff($date1,$date2);
$send =$diff->format("%r%a ");
$date3=date_create($start_date2);
$date4=date_create($end_date2);
$diff=date_diff($date3,$date4);
$send1 =$diff->format("%r%a ");
$date5=date_create($start_date3);
$date6=date_create($end_date3);
$diff=date_diff($date5,$date6);
$send2 =$diff->format("%r%a ");



//$array = array('head', 'accountant','senior','principle','assistant','clerk');
//$i = count(array_intersect($array, explode(" ", preg_replace("/[^A-Za-z0-9' -]/", "", $position1))));
//$r = count(array_intersect($array, explode(" ", preg_replace("/[^A-Za-z0-9' -]/", "", $position2))));
//$o = count(array_intersect($array, explode(" ", preg_replace("/[^A-Za-z0-9' -]/", "", $position3))));
//echo ($i) ? "found ($i)" : "not found";
if (strpos($position1, "head") !== false || strpos($position1, "senior") !== false || strpos($position1, "principle") !== false){
$i = "5";
} else {
  $i = "0";
}
if (strpos($position1, "accountant") !== false || strpos($position1, "accounting") !== false || strpos($position1, "accounts") !== false){
$r = "5";
} else {
  $r = "0";
}
$experience1 = $i + $r ;

if (strpos($position2, "head") !== false || strpos($position2, "senior") !== false || strpos($position2, "principle") !== false){
$a = "5";
} else {
  $a = "0";
}
if (strpos($position2, "accountant") !== false || strpos($position2, "accounting") !== false || strpos($position2, "accounts") !== false){
$b = "5";
} else {
  $b = "0";
}
$experience2 = $a + $b ;
if (strpos($position3, "head") !== false || strpos($position3, "senior") !== false || strpos($position3, "principle") !== false){
$c = "5";
} else {
  $c = "0";
}
if (strpos($position3, "accountant") !== false || strpos($position3, "accounting") !== false || strpos($position3, "accounts") !== false){
$d = "5";
} else {
  $d = "0";
}
$experience3 = $c + $d ;



//$value = "3";
//$experience1 = $i * $value ;
//$experience2 = $r * $value ;
//$experience3 = $o * $value ;
$totalexperience = $experience1 + $experience2 + $experience3 ;
echo "$totalexperience" ;

$totalex = $send + $send1 + $send2 + $totalexperience ;


if ($speak1 == "fluent") {
    $speak1x = "5";
} elseif ($speak1 == "good knowledge") {
    $speak1x = "3";;
} else {
   $speak1x = "1";;
}

if ($speak2 == "fluent") {
    $speak2x = "5";
} elseif ($speak2 == "good knowledge") {
    $speak2x = "3";;
} else {
   $speak2x = "1";;
}

if ($speak3 == "fluent") {
    $speak3x = "5";
} elseif ($speak3 == "good knowledge") {
    $speak3x = "3";;
} else {
   $speak3x = "1";;
}

if ($read1 == "fluent") {
    $read1x = "5";
} elseif ($read1 == "good knowledge") {
    $read1x = "3";;
} else {
   $read1x = "1";;
}

if ($read2 == "fluent") {
    $read2x = "5";
} elseif ($read2 == "good knowledge") {
    $read2x = "3";;
} else {
   $read2x = "1";;
}

if ($read3 == "fluent") {
    $read3x = "5";
} elseif ($read3 == "good knowledge") {
    $read3x = "3";;
} else {
   $read3x = "1";;
}

if ($write1 == "fluent") {
    $write1x = "5";
} elseif ($write1 == "good knowledge") {
    $write1x = "3";;
} else {
   $write1x = "1";;
}

if ($write2 == "fluent") {
    $write2x = "5";
} elseif ($write2 == "good knowledge") {
    $write2x = "3";;
} else {
   $write2x = "1";;
}

if ($write3 == "fluent") {
    $write3x = "5";
} elseif ($write3 == "good knowledge") {
    $write3x = "3";;
} else {
   $write3x = "1";;
}

$speakx = $speak1x + $speak2x +$speak3x ;
$readx = $read1x + $read2x + $read3x ;
$writex = $write1x + $write2x + $write3x ; 
$languagetotal = $speakx + $readx + $writex ;


if ($course == "acca" || $course == "association of chattered certified accountants" || $course == "cpa" || $course == "certified public accountants") {
    $coursew = "5";
} elseif ($course == "" ) {
    $coursew = "0";
}  else {
   $coursew = "2";
}





   $query = "INSERT INTO personal_details (firstname,lastname,email,tel,dob,nationality,postal,id,gender,university,degree,cgpa,univ_start,univ_end,institution,course,prof_cgpa,prof_start,prof_end,a_level,alevel_award,alevel_grade,alevel_start,alevel_end,o_level,olevel_award,olevel_grade,olevel_start,olevel_end,organisation1,org1_startdate,org1_enddate,org1_position,organisation2,org2_startdate,org2_enddate,org2_position,organisation3,org3_startdate,org3_enddate,org3_position,language1,lang1_speak,lang1_read,lang1_write,language2,lang2_speak,lang2_read,lang2_write,language3,lang3_speak,lang3_read,lang3_write,about_me,motivation,universityw,Degreew,CGPAw,agradew,ogradew,experiencew,languagew,prof_coursew) 
  VALUES
   ('$fname','$lname','$email','$tel_number','$dob','$nationality','$postal','$id_no','$gender','$University','$Degree','$CGPA','$Start','$End','$institution','$course','$CGPA1','$Start1','$End1','$alevel','$award','$grade','$Start2','$End2','$olevel','$award1','$grade1','$Start3','$End3','$organisation1','$start_date1','$end_date1','$position1','$organisation2','$start_date2','$end_date2','$position2','$organisation3','$start_date3','$end_date3','$position3','$language1','$speak1','$read1','$write1','$language2','$speak2','$read2','$write2','$language3','$speak3','$read3','$write3','$about_me','$motivation','$universityw','$Degreew','$CGPAw','$agradew','$ogradew','$totalex','$languagetotal','$coursew')";
  mysql_query($query);

 


//echo ($sum) ? "total points ($sum)" : "no points acquired";
//$array = array('hardworking', 'knowledge','skills','generous','To');
//$r = count(array_intersect($array, explode(" ", preg_replace("/[^A-Za-z0-9' -]/", "", $about_me))));
//echo ($i) ? "found ($i)" : "not found";
//$value = "5";
//$sumabout = $r * $value ;

 
/*
if ($speak1 == "fluent") {
    $speak1x = "5";
} elseif ($speak1 == "good knowledge") {
    $speak1x = "3";;
} else {
   $speak1x = "1";;
}

if ($speak2 == "fluent") {
    $speak2x = "5";
} elseif ($speak2 == "good knowledge") {
    $speak2x = "3";;
} else {
   $speak2x = "1";;
}

if ($speak3 == "fluent") {
    $speak3x = "5";
} elseif ($speak3 == "good knowledge") {
    $speak3x = "3";;
} else {
   $speak3x = "1";;
}

if ($read1 == "fluent") {
    $read1x = "5";
} elseif ($read1 == "good knowledge") {
    $read1x = "3";;
} else {
   $read1x = "1";;
}

if ($read2 == "fluent") {
    $read2x = "5";
} elseif ($read2 == "good knowledge") {
    $read2x = "3";;
} else {
   $read2x = "1";;
}

if ($read3 == "fluent") {
    $read3x = "5";
} elseif ($read3 == "good knowledge") {
    $read3x = "3";;
} else {
   $read3x = "1";;
}

if ($write1 == "fluent") {
    $write1x = "5";
} elseif ($write1 == "good knowledge") {
    $write1x = "3";;
} else {
   $write1x = "1";;
}

if ($write2 == "fluent") {
    $write2x = "5";
} elseif ($write2 == "good knowledge") {
    $write2x = "3";;
} else {
   $write2x = "1";;
}

if ($write3 == "fluent") {
    $write3x = "5";
} elseif ($write3 == "good knowledge") {
    $write3x = "3";;
} else {
   $write3x = "1";;
}

$speakx = $speak1x + $speak2x +$speak3x ;
$readx = $read1x + $read2x + $read3x ;
$writex = $write1x + $write2x + $write3x ; 
$languagetotal = $speakx + $readx + $writex ;*/

 /*$query1 = "INSERT INTO converted (hobbies,speakx,readx,writex) 
  VALUES
   ('$totalex','$speakx','$readx','$writex')";
  mysql_query($query1);*/






/*else if ($is_post && $is_form_valid) {
  saveToDatabase();
  header("Location: " . $_SERVER['REQUEST_URI'] . "?submit=true");
}
else {
  displayForm();
}*/

  // echo "<h2>successful!</h2>";
/*
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$mysql->close();*/
}
?>