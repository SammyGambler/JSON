<?php


$userDataStr = '{"name":"sammy","age":25}';
/**
 * author:SamanAzizi
 * Desc:convert JSON Str into JSON obj
 */

$userDataObj = json_decode($userDataStr);
$userDataObj->name ="ali";
// print_r($userDataObj);

/** 
 * @Author: SamanAzizi 
 * @Date: 2020-03-16 13:47:55 
 * @Desc:  convert JSON Obj into JSON STR
 */

$userDataStrAgain = json_encode($userDataObj);
file_put_contents("userData.json",$userDataStrAgain);
// file_get_contents("userData.json");

/** 
 * @Author: SamanAzizi 
 * @Date: 2020-03-16 14:16:01 
 * @Desc:  check if Json is a Valid Structure
 */
function isValid($str)
{

    if (json_decode($str))
        return true;
    else
        return false;
}
function isValidJSON($str){
    return json_decode($str) !== null ;
}
echo isValid($userDataStr);
echo isValidJSON($userDataStr);

