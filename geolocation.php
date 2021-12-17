<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>

        </style>
    </head>
    <body>
        
        <div>
            <p>Semmi köze a kérdéshez, de lehet vele poénkodni. :)</p>
            <?php
function ip_visitor_locale($ip = "92.52.192.222")
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $ip_data_in = curl_exec($ch); // string
    curl_close($ch);

    $ip_data = json_decode($ip_data_in,true);
    $ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/
    echo '<pre>';
    print_r($ip_data);
    echo '</pre>';

    //echo 'ip: '.$ip_data["geoplugin_request"];
    //echo 'város: '.$ip_data["geoplugin_city"];
    //echo 'megye: '.$ip_data["geoplugin_region"];
    //echo 'megye neve: '.$ip_data["geoplugin_regionName"];
    //echo 'ország kódja: '.$ip_data["geoplugin_countryCode"];
    //echo 'ország neve: '.$ip_data["geoplugin_countryName"];
    //echo 'ÁFA kulcs: '.$ip_data["geoplugin_euVATrate"];
    //echo 'kontinens: ';  $ip_data["geoplugin_continentName"];
    //  echo 'GPS: '.$ip_data["geoplugin_latitude"].', '.$ip_data["geoplugin_longitude"];
    //  echo 'időzóna: '.$ip_data["geoplugin_timezone"];
    //  echo 'pénznem: '.$ip_data["geoplugin_currencyCode"];
    //  echo 'átváltás: 1$ => '.$ip_data["geoplugin_currencyConverter"].' '. $ip_data["geoplugin_currencySymbol_UTF8"];

    }
    function get_ip() {
        //-- helyi hálózaton nem ad megfellő eredményt --------------
        //-- 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR'    
        $ip="";
        if (!empty($_SERVER['HTTP_CLIENT_IP']) && filter_var($_SERVER['HTTP_CLIENT_IP']??null, FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) && filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED']) && filter_var($_SERVER['HTTP_X_FORWARDED'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_X_FORWARDED'];
        } else if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && filter_var($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && filter_var($_SERVER['HTTP_FORWARDED_FOR'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (!empty($_SERVER['HTTP_FORWARDED']) && filter_var($_SERVER['HTTP_FORWARDED'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['HTTP_FORWARDED'];
        } else if (!empty($_SERVER['REMOTE_ADDR']) && filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['REMOTE_ADDR'];
        } 
        return $ip;
    }
    ip_visitor_locale("195.199.249.49");
//    ip_visitor_locale(get_ip());
            ?>  
            
        </div>
    </body>
</html>
