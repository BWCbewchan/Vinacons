<?php
// URL của tài nguyên bạn muốn truy cập
$url = 'https://viewer.autodesk.com/id/dXJuOmFkc2sub2JqZWN0czpvcy5vYmplY3Q6YTM2MHZpZXdlci1wcm90ZWN0ZWQvdDE3MTA1ODIxMDBfYjE4NDMwNzMtMTJkZC00OTg2LWI3MTgtNjk5MTA0MzY3YjI2LnJ2dA?sheetId=MmZlYWE2MjQtMDc5OS04Njg0LTg3ZWQtM2ZlOWQwOTQ5Mzg5';

// Tạo một yêu cầu GET đến tài nguyên
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Đặt tiêu đề và gửi phản hồi về cho trình duyệt
header('Content-Type: application/json');
http_response_code($httpcode);
echo $response;
?>
