<?php

// FB : MANGGALA FEBRI VALENTINO

echo "deviceCode : ";

$deviceCode 	= trim(fgets(STDIN));

echo "deviceId : ";

$deviceId 	= trim(fgets(STDIN));

echo "imei : ";

$imei =trim(fgets(STDIN));

eco "sign : ";

$sign =trim(fgets(STDIN))

eco "tk : ";

$tk =trim(fgets(STDIN))

eco "token : ";

$token =trim(fgets(STDIN))

eco "uuid : ";

$uuid =trim(fgets(STDIN))

echo "Masukkan Jumlah Suntik : ";

$jumlah	= trim(fgets(STDIN));

echo "SetSleep : ";

$wait	= trim(fgets(STDIN));

$i=0;

while($i<$jumlah){

			sleep($wait);

			$i++;

			flush();

			

		$news		=	news($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid);

		$video		=	video($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid);

		$share		=	share($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid);

		$code		=	code($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid);


	echo "TASK NEWS $news\n";

	echo "TASK VIDEO $video\n";

	echo "TASK SHARE $share\n";

	echo "TASK CODE $code\n";


	

	}

function news($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid){ 

		$rand = rand(1,9999);

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo$rand"); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

				$headers[] = "Request body: OSVersion=22&content_id=2266285&deviceCode={"Gravity":"false","cpuCore":"4","deviceId":"91cf86b3ff493486","cpuFreq":"1,5G 四核","ModelName":"Gretel","gps":"true","ModelBrand":"SPRD","Manufacturer":"SPRD","Display":"Gretel i5e Release by.Tomcat9","MemorySize":"1,9G","MacAddress":"00:27:15:38:00:8f"}&imei=356334070816395&isemu=2&lang=in-ID&market=googleplay&phoneBrand=SPRD&pushType=getui&sign=ed744761238e3ed7454a18e90d444e1be301750c&time=1541438785343&tk=dcf1b7627ac26b24607e3ef0d5dca110&token=c4512ec4ee3353be1ca9e5232af5bf08&uuid=34c66945-8278-4480-b4e7-5bdba92a35fd&version=9&versionName=1.3.6&wifi=1 =$deviceCode;deviceId;imei;sign;tk;token;uuid";

				$headers[] = "Accept-Language: in-          ID,in;q=0.8
User-Agent: Mozilla/5.0 (Linux; U; Android 5.1;                    in-id; Gretel Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30

Content-Type: application/x-www-form-urlencoded

Content-Length: 775

Host: api.yogopro.com

Connection: Keep-Alive

Accept-Encoding: gzip

Cache-Control: no-cache";

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

function video($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid){

		$rand = rand(1,9999);

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo/$rand"); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

					$headers[] = "Request body: OSVersion=22&content_id=2266285&deviceCode={"Gravity":"false","cpuCore":"4","deviceId":"91cf86b3ff493486","cpuFreq":"1,5G 四核","ModelName":"Gretel","gps":"true","ModelBrand":"SPRD","Manufacturer":"SPRD","Display":"Gretel i5e Release by.Tomcat9","MemorySize":"1,9G","MacAddress":"00:27:15:38:00:8f"}&imei=356334070816395&isemu=2&lang=in-ID&market=googleplay&phoneBrand=SPRD&pushType=getui&sign=ed744761238e3ed7454a18e90d444e1be301750c&time=1541438785343&tk=dcf1b7627ac26b24607e3ef0d5dca110&token=c4512ec4ee3353be1ca9e5232af5bf08&uuid=34c66945-8278-4480-b4e7-5bdba92a35fd&version=9&versionName=1.3.6&wifi=1 =$deviceCode;deviceId;imei;sign;tk;token;uuid";

					$headers[] = "Accept-Language: in-ID,in;q=0.8

User-Agent: Mozilla/5.0 (Linux; U; Android 5.1; in-id; Gretel Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30

Content-Type: application/x-www-form-urlencoded

Content-Length: 775

Host: api.yogopro.com

Connection: Keep-Alive

Accept-Encoding: gzip

Cache-Control: no-cache";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

function share($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid){

		$rand = rand(1,9999);

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo/$rand"); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

					$headers[] = "Request body: OSVersion=22&content_id=2266285&deviceCode={"Gravity":"false","cpuCore":"4","deviceId":"91cf86b3ff493486","cpuFreq":"1,5G 四核","ModelName":"Gretel","gps":"true","ModelBrand":"SPRD","Manufacturer":"SPRD","Display":"Gretel i5e Release by.Tomcat9","MemorySize":"1,9G","MacAddress":"00:27:15:38:00:8f"}&imei=356334070816395&isemu=2&lang=in-ID&market=googleplay&phoneBrand=SPRD&pushType=getui&sign=ed744761238e3ed7454a18e90d444e1be301750c&time=1541438785343&tk=dcf1b7627ac26b24607e3ef0d5dca110&token=c4512ec4ee3353be1ca9e5232af5bf08&uuid=34c66945-8278-4480-b4e7-5bdba92a35fd&version=9&versionName=1.3.6&wifi=1 =$deviceCode;deviceId;imei;sign;tk;token;uuid";

					$headers[] = "Accept-Language: in-ID,in;q=0.8

User-Agent: Mozilla/5.0 (Linux; U; Android 5.1; in-id; Gretel Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30

Content-Type: application/x-www-form-urlencoded

Content-Length: 775

Host: api.yogopro.com

Connection: Keep-Alive

Accept-Encoding: gzip

Cache-Control: no-cache";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

function code($deviceCode,$deviceId,$imei,$sign,$tk,$token,$uuid){

		$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "https://api.yogopro.com/api/reward/watchVideo/code"); 

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

				$headers = array();

					$headers[] = "Request body: OSVersion=22&content_id=2266285&deviceCode={"Gravity":"false","cpuCore":"4","deviceId":"91cf86b3ff493486","cpuFreq":"1,5G 四核","ModelName":"Gretel","gps":"true","ModelBrand":"SPRD","Manufacturer":"SPRD","Display":"Gretel i5e Release by.Tomcat9","MemorySize":"1,9G","MacAddress":"00:27:15:38:00:8f"}&imei=356334070816395&isemu=2&lang=in-ID&market=googleplay&phoneBrand=SPRD&pushType=getui&sign=ed744761238e3ed7454a18e90d444e1be301750c&time=1541438785343&tk=dcf1b7627ac26b24607e3ef0d5dca110&token=c4512ec4ee3353be1ca9e5232af5bf08&uuid=34c66945-8278-4480-b4e7-5bdba92a35fd&version=9&versionName=1.3.6&wifi=1 =$deviceCode;deviceId;imei;sign;tk;token;uuid";

					$headers[] = "Accept-Language: in-ID,in;q=0.8

User-Agent: Mozilla/5.0 (Linux; U; Android 5.1; in-id; Gretel Build/LMY47D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30

Content-Type: application/x-www-form-urlencoded

Content-Length: 775

Host: api.yogopro.com

Connection: Keep-Alive

Accept-Encoding: gzip

Cache-Control: no-cache";

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);

	return $result;

}

?>

