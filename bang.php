<?php
function getBanglaDate($date){
 $engArray = array(
 1,2,3,4,5,6,7,8,9,0,
 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
 'AM', 'PM'
 );
 $bangArray = array(
 '১','২','৩','৪','৫','৬','৭','৮','৯','০',
 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর',
 'এ.এম.', 'পি.এম.'
 );
 
 $converted = str_replace($engArray, $bangArray, $date);
 return $converted;
}
function getmonth($mon){
 $engArr = array(
 1,2,3,4,5,6,7,8,9
 );
 $bangArr = array(
 'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর'
 );
 
 $convert = str_replace($engArr, $bangArr, $mon);
 return $convert;
}
function getweek($monp){
 $engAr = array(
 'Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday'
 );
 $bangAr = array(
 'শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার'
 );
 
 $conver = str_replace($engAr, $bangAr, $monp);
 return $conver;
}

?>
<?php
echo "আজ ".getweek(date("l")).", ";
            
date_default_timezone_set('Asia/Dhaka');
$currentDateTime=date('m/d/Y H:i:s');
$newDateTime = date('m/d/y', strtotime($currentDateTime));
echo getBanglaDate(date("d"))." ";
$monst=date('m');
if($monst<10){
echo getmonth($monst);
}
else{
	if($monst==10){
		echo 'অক্টোবর';
	}
	if($monst==11){
		echo 'নভেম্বর';
	}
	if($monst==12){
		echo 'ডিসেম্বর';
	}	
}
echo " ২০".getBanglaDate(date("y"))." খ্রিষ্টাব্দ";

?>
