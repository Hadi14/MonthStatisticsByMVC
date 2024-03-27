<?
function dump($var, $return = false)
{
    if (is_array($var)) {
        $out = print_r($var, true);
    } else if (is_object($var)) {
        $out = var_export($var, true);
    } else {
        $out = $var;
    }

    if ($return) {
        return "\n<pre>$out</pre>\n";
    } else {
        echo "\n<pre>$out</pre>\n";
    }
}


function br()
{
    echo "<br>\n";
}
function getFullUrl()
{
    return $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}
function getRequestUri()
{
    return  $_SERVER['REQUEST_URI'];
}


function getBaseUrl()
{
    return "/MonthStatisticsByMVC/";
}
function getBaseUrlNoLastslash()
{
    return "/MonthStatisticsByMVC";
}

function strHas($str, $srch, $caseSensitive = false)
{
    if ($caseSensitive) {
        return strpos($str, $srch) !== false;
    } else {
        return strpos(strtolower($str), strtolower($srch)) !== false;
    }
}
function getLastInsert($tbl, $yrFieldName, $monFieldName, $yer, $mnth)
{
    $db = Db::getInstance();
    $sql = "select * from $tbl where $yrFieldName='$yer' and $monFieldName='$mnth' ";
    $row = $db->query($sql);
    return $row;
}
// function showmsg($type, $msg, $exit)
// {
//     $ar['msg'] = $msg;
//     Render::render("message/$type.php", $ar);
//     if ($exit) {
//         exit;
//     }
// }
function checkMeliCode($meli)
{
    $cDigitLast = substr($meli, strlen($meli) - 1);
    $fMeli = strval(intval($meli));
    if ((str_split($fMeli))[0] == "0" && !(8 <= strlen($fMeli)  && strlen($fMeli) < 10)) return false;
    $nineLeftDigits = substr($meli, 0, strlen($meli) - 1);
    $positionNumber = 10;
    $result = 0;
    foreach (str_split($nineLeftDigits) as $chr) {
        $digit = intval($chr);
        $result += $digit * $positionNumber;
        $positionNumber--;
    }
    $remain = $result % 11;
    $controllerNumber = $remain;
    if (2 <= $remain) {
        $controllerNumber = 11 - $remain;
    }
    return $cDigitLast == $controllerNumber;
    //   echo checkMeliCode($meli) ? 'نا معتبر' :  معتبر';
}