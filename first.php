<?php

//*************** 1 */
//phpinfo();

//*************** 2 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
echo $FIRSTNAME."ASDASDD"."<BR>";

//error_reporting(E_ALL);
//ini_set('display_errors', 1); 

//*************** 3 */
define("siteName", "http://localhost:8080/apps/phptest/first.php");
echo siteName . "  **** constant" . "<br>";

//*************** 4 */
echo $_SERVER['SERVER_NAME'] . "******************************** (1) server name" . "<br>"; //server name
echo 'User IP Address - ' . $_SERVER['REMOTE_ADDR'] . " ********************** (2) ip adress" . "<br>"; //ip adress
echo $_SERVER['SERVER_PORT'] . "*********************************** (3) Root" . "<br>"; // server port
$fullpath = __FILE__;
echo $fullpath . "  ******* (4) current path" . "<BR>"; //FILE PATH
$fileName = basename($fullpath);
echo $fileName . "******************************** (5) file name" . "<br>";

//*************** 5 */
//for loop
echo "<BR>"."<BR>"."<BR>";
echo "*******************FOR LOOP**************"."<BR>";
$a = 0;
$b = 0;
for ($i = 0; $i < 5; $i++) {
    $a += 10; //$a=$a+10
    $b += 5;
}
echo ("At the end of the FOR loop a = $a and b = $b") . "<br>"; //a = 50, b=25

//while loop
echo "<BR>"."<BR>"."<BR>";
echo "****************WHILE LOOP**************"."<BR>";

$i = 0;
$num = 50;
while ($i < 10) {
    $num--;
    $i++;
}
echo ("WHILE Loop stopped at i = $i and num = $num"). "<br>"; // i = 10 , num =40

//do...while
echo "<BR>"."<BR>"."<BR>";
echo "****************DO-WHILE LOOP***********"."<BR>";

$i = 0;
$num = 0;
do {
    $i++;
} while ($i < 10);
echo ("DO-WHILE Loop stopped at i = $i"). "<br>"; // i=10

//foreach
echo "<BR>"."<BR>"."<BR>";
echo "****************FOR-EACH LOOP***********"."<BR>";

$array = array(1, 2, 3, 4, 5);
// $array = [1,2,3,4,5];     
foreach ($array as $value) {
    echo "FOR-EACH LOOP Value is $value <br />";
}
                                /* O/P
                                Value is 1
                                Value is 2
                                Value is 3
                                Value is 4
                                Value is 5 */

//break
echo "<BR>"."<BR>"."<BR>";
echo "*******************BREAK*****************"."<BR>";

$i = 0;
while ($i < 10) {
    $i++;
    if ($i == 3) break;
}
echo ("BREAK Loop stopped at i = $i"). "<br>"; // i =3


#9
//continue
echo "<BR>"."<BR>"."<BR>";
echo "*******************CONTINUE**************"."<BR>";

$array = array(1, 2, 3, 4, 5);

foreach ($array as $value) {
    if ($value == 3) continue;
    echo "CONTINUE Value is $value <br />";
}
                                /* O/P
                                Value is 1
                                Value is 2
                                Value is 4
                                Value is 5 */

//*********** 6 */
echo "<BR>"."<BR>"."<BR>";
echo "*******************SWITCH****************"."<BR>";
$age=10;
switch($age){
    case $age<5:
        echo "Stay at home";
        break;
    case $age==5:
        echo " Go to Kindergarden";
        break;
    case $age>5&& $age<12:
        echo "Go to grade: ".($age-6) ;
        break;
    default:
        echo "you are kwayes!";
}