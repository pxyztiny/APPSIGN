<?php
$taskid = getenv("TASKID");
$userid = getenv("USERID");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'http://task.jegotrip.com.cn:8080/app/sign');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (iPhone; CPU iPhone OS 13_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 source/jegotrip");
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode(array('userid' => $userid, 'taskId=' => $taskid)));
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$sContent = curl_exec($ch);
curl_close($ch);
echo $sContent;
?>
