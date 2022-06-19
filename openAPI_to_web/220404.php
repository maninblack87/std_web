<?php

$ch = curl_init();
$url = 'http://apis.data.go.kr/1192000/select0040List/getselect0040List'; /*URL*/
$queryParams = '?' . urlencode('serviceKey') . 'aKvmHpFI2+TNf3LepeF8Whu34R7222pR/vJ43DIO4w75ZJ/T3xlde342akR7IENdds1rFokGa5yW4VzjMJcO0w=='; /*Service Key*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('type') . '=' . urlencode('xml'); /**/
$queryParams .= '&' . urlencode('baseDt') . '=' . urlencode('20210101'); /**/
$queryParams .= '&' . urlencode('mxtrNm') . '=' . urlencode('옹진수산업협동조합'); /**/
$queryParams .= '&' . urlencode('csmtmktNm') . '=' . urlencode('연안위판장(옹진)'); /**/
$queryParams .= '&' . urlencode('mprcStdCode') . '=' . urlencode('620401'); /**/
$queryParams .= '&' . urlencode('mprcStdCodeNm') . '=' . urlencode('굴(참굴)'); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

?>