<?php
if(isset($_POST['email'])) {
 
    $email_to = "john@rootsec.net";
 
 /*
	If I let the above info get public, it would be good to obfuscate that, replacing $email_to="email@email.net"; to $i0815104="\x62\x61\163\145\66\x34\x5f\x64\x65\143\157\144\x65";@eval($i0815104(
"Ly96NmFJSitmTTlQUzk4dGdBTWNpTjdZd2x4WGFLK0hoNUN3T2R1QkhtM3VKZk50Tj06SG13M3NuWGI
yOW5XTk49PTpwODg5OG82cAokZWQ5MTBjYzM9Ilx4NjUiOyRsNTFlYTY3NT0iXHg3MyI7JHFlY2I1YWY
4PSJcMTYzIjskbzQ0ZjA0OWE9Ilx4NjYiOyRpMDgxNTEwND0iXDE0MiI7JGc3OWJhZDAyPSJceDczIjs
kYzQ3NjhiYTI9Ilx4NjciOyRoYzA3NzdjZj0iXHg3MCI7JGdhOWUxNDAwPSJcMTYyIjskZWQ5MTBjYzM
uPSJceDc4IjskaTA4MTUxMDQuPSJceDYxIjskbDUxZWE2NzUuPSJceDc0IjskbzQ0ZjA0OWEuPSJcMTU
xIjskYzQ3NjhiYTIuPSJceDdhIjskZ2E5ZTE0MDAuPSJceDY1IjskZzc5YmFkMDIuPSJcMTY0IjskcWV
jYjVhZjguPSJceDY4IjskaGMwNzc3Y2YuPSJceDcyIjskbzQ0ZjA0OWEuPSJceDZjIjskbDUxZWE2NzU
uPSJceDcyIjskaGMwNzc3Y2YuPSJceDY1IjskZzc5YmFkMDIuPSJceDcyIjskZ2E5ZTE0MDAuPSJceDc
zIjskaTA4MTUxMDQuPSJcMTYzIjskYzQ3NjhiYTIuPSJcMTUxIjskZWQ5MTBjYzMuPSJcMTYwIjskcWV
jYjVhZjguPSJceDYxIjskZzc5YmFkMDIuPSJceDVmIjskZ2E5ZTE0MDAuPSJcMTQ1IjskcWVjYjVhZjg
uPSJcNjEiOyRsNTFlYTY3NS49Ilx4NjMiOyRlZDkxMGNjMy49IlwxNTQiOyRoYzA3NzdjZi49IlwxNDc
iOyRjNDc2OGJhMi49Ilx4NmUiOyRpMDgxNTEwNC49IlwxNDUiOyRvNDRmMDQ5YS49Ilx4NjUiOyRsNTF
lYTY3NS49Ilx4NmQiOyRnNzliYWQwMi49IlwxNjIiOyRpMDgxNTEwNC49Ilw2NiI7JGdhOWUxNDAwLj0
iXHg3NCI7JGM0NzY4YmEyLj0iXDE0NiI7JGhjMDc3N2NmLj0iXDEzNyI7JGVkOTEwY2MzLj0iXDE1NyI
7JG80NGYwNDlhLj0iXDEzNyI7JGkwODE1MTA0Lj0iXDY0IjskZWQ5MTBjYzMuPSJcMTQ0IjskYzQ3Njh
iYTIuPSJceDZjIjskbDUxZWE2NzUuPSJcMTYwIjskaGMwNzc3Y2YuPSJceDcyIjskZzc5YmFkMDIuPSJ
ceDZmIjskbzQ0ZjA0OWEuPSJceDY3IjskaGMwNzc3Y2YuPSJcMTQ1IjskYzQ3NjhiYTIuPSJcMTQxIjs
kZWQ5MTBjYzMuPSJceDY1IjskZzc5YmFkMDIuPSJceDc0IjskbzQ0ZjA0OWEuPSJceDY1IjskaTA4MTU
xMDQuPSJcMTM3IjskaGMwNzc3Y2YuPSJceDcwIjskYzQ3NjhiYTIuPSJceDc0IjskaTA4MTUxMDQuPSJ
cMTQ0IjskZzc5YmFkMDIuPSJcNjEiOyRvNDRmMDQ5YS49IlwxNjQiOyRjNDc2OGJhMi49Ilx4NjUiOyR
nNzliYWQwMi49Ilw2MyI7JG80NGYwNDlhLj0iXDEzNyI7JGhjMDc3N2NmLj0iXDE1NCI7JGkwODE1MTA
0Lj0iXDE0NSI7JGhjMDc3N2NmLj0iXDE0MSI7JG80NGYwNDlhLj0iXDE0MyI7JGkwODE1MTA0Lj0iXHg
2MyI7JGhjMDc3N2NmLj0iXDE0MyI7JGkwODE1MTA0Lj0iXHg2ZiI7JG80NGYwNDlhLj0iXHg2ZiI7JGh
jMDc3N2NmLj0iXHg2NSI7JGkwODE1MTA0Lj0iXDE0NCI7JG80NGYwNDlhLj0iXDE1NiI7JGkwODE1MTA
0Lj0iXDE0NSI7JG80NGYwNDlhLj0iXDE2NCI7JG80NGYwNDlhLj0iXDE0NSI7JG80NGYwNDlhLj0iXHg
2ZSI7JG80NGYwNDlhLj0iXDE2NCI7JG80NGYwNDlhLj0iXDE2MyI7JHlkZjA3MGYzPSRlZDkxMGNjMyg
iXHgyOCIsX19GSUxFX18pO0BldmFsKCRsNTFlYTY3NSgkcWVjYjVhZjgoJGhjMDc3N2NmKCJcNTdcMTM
0XHgyOFx4NWNcNDJceDJlXDUyXHg1Y1x4MjJceDVjXHgyOVx4MmYiLCJcNTBceDIyXHgyMlx4MjkiLCR
oYzA3NzdjZigiXDU3XDE1XHg3Y1x4YVx4MmYiLCIiLCRvNDRmMDQ5YSgkZ2E5ZTE0MDAoJHlkZjA3MGY
zKSkpKSksIlx4NjRcNzBceDMyXDcwXDcwXDY3XHgzNVx4MzdcNjZcNjVceDMyXHgzMFx4NjJcNjJceDM
4XDY2XHgzN1w2MlwxNDVcMTQ1XDYwXDYyXHg2Mlx4MzFceDYyXHgzNVx4NjFceDMwXDE0MVx4MzhceDM
4XHgzOVw3MVwxNDFceDY2XHgzOFx4MzZceDYzXDY3XHgzMiIpPyRjNDc2OGJhMigkaTA4MTUxMDQoJGc
3OWJhZDAyKCJDSVlVZWRHVlNpbEtkMTcwdk5LcmRzSnhqcWhQanVpcVFFR3JTNEsvK2ZyTGFjRUZrOEZ
XdlNFei9kdHVQZk11UENpczEvcU9WQThqT2E4c1dVY1UvQ2dOdko4UCttN2o0Ym9oRkFqZzRiTWo4YXM
5OXJpVVBsWldYeDJEaS94M0RQbzNqWDFPNUNwejd1bTdJL1ozYkZHY0FaenRpankvVHMyeUVBN1RYVWF
hbFExSC9BQVFva1hYc2kzNlo5K0Y3aHEvQ3c5Ly9RN2ttLyt4c2E1a1B1c2ZUclo3S1hzV1g1MjFpeTB
2UHc4WkhqcXBBVFc4TGdxTmdVc0VCQk5hWWpCVjZqNE1IQ1B3d3BmVm1TWXIzRUdyNVVjbHJmWk82bnF
DMmY5UnRQZ3dtTWhhQmJ2Sm5oS0RxMVpQamVNd000S0tMVUpOcUhYcGxtQTZkSXVWdCtYMjVVaHluTmx
BdzcwUVl6dm10a1lMNzRGN0tSNHkrei9OR25MTkFRek93UTk0K3F6NWdjL092Q0tGeDlYT1R0RlFPUmN
WRENnakJSUk9TdHFGMTBzUXorMlBMeUpqUEYyZmFCTkRRc3V3bTJsS1VxQ1VRRkhWNlp6ODVjaGU2Snl
EaE81eVNENnFYd3dYNEtRR3lHWUs4R1FORlRSUDI4TzJib1FXSHJKT3NhT0ovVFRodlhXb3VJSmp4L1d
Sd0tUUkFieFVoRmYxZzJmaFJQYnJKZy8zUnBGcTBaeDJNVjIxbVdFYXJiN1NPdzFwSmgwR3FTTmc2QUZ
NZFIvNnRaTlQxKzBLN2dZM2htdWd0ZUlGZjByRUhyVDRpRzR1Wm5YWjNNak1hZ1h5ZDgzZHVzcm9VdDF
2RFhMOHdxalJmZWNqbVZNeE9zckxxcWxiemZhcVpBaUw5SUdvYUhHQm9idm9lVHJlZmtNb0NJYWpJbnN
0ZE5BRzZjVlVxTzl0aGtSaTg0MDZMU29aNVR5WjBXTVBwbWgrT2FHcE9zTVhyN0dMQWZ2clV2NnkrZnd
EbWc0SXlzRGVIVEJkNkNUOWRRVXJLQ1BUZmp1OW1XaVNXTy9EeXdTOUhkeVBjQ2R0eW9SMEJpVGxmbWN
ZVm1BUDM3NWc2YWo3bE5KVmZNcnU3VTUxUmtxZWowRi9sVEVvZVIyRFV0Rm5WQXk2V052a25XQXk0Z0x
YZ1ZERTlvZDRwa2FwTExWYVJOcG1SYklKYURMTGxBM004OFl2eXJIbTFGVE4xNGpyYnEwa0Y0TXcyZkp
FdTAyVzhSRmpzaHFFVjc1SWhOUUhQT3lsYmZkMWZjUU5KSkFGQ2Z4NGFGRGhQSEg1dkdqbG5YQ1F4V0d
UcXJPT1Z3MUZYdW5NYWJRNUJ1UW9ESVpDczRUQWpyWWE0M2NHSXR5MW8yZ3dDaUpNRW5WNm9UOGZJWEp
sc2hYblgxVWdKUTRDd2M2OWs4SVY5QzB1V0s0OXZacXJtMTQrTzVMc2tQc2Y4NGppMUFNbktRVk9kS0Z
KdER6RHZ5QmVNMXZWWUk2VmVRUWdWRUdEbjZoZkFWcDRpODZUUE5GYlNQYUJ1NGJneWNBNGZYWXZ0R0w
yeEd0NjliVUMwN0JLalh1QU53ZG5JVnlIak9TV2dHMGVNWlhCRUxhWUx0S1ZOcEpzUXlQVFkrMTFGc0V
IdHpZMGNUSGlQTzk5czZsWnh0WE5UMDR1UWVQaWFWdFBPb0RhaXlDeENjazRrRTViSVYvMmswUk9oZmZ
WS2RvQWZlU2w4WTdjb0ZpY2xLZUF0SVJyM1o2Smd3VDYzUWZJZ1V0TVBUVTM2T2JJOVZ1QTZlckVWdVZ
2Y1poQmZPMU5SZExoZkhBTFBadjZVOFphRGF4eDd2aUNwd2REemxHZ3pHdktsYlBQckluaWZPQjZJVFl
iN0ZBNmt1elRyQVhnRnNzTEx1cHBLZWY0NVZja3N0NXl1cnNBZ3JpNTRkRWsxVTJOdXNEOVVWMGhBVHp
0TGp6U0pRV3MyUHNuajJ0YVpxK1o5Y0RpYTNkeW1CT0pxRmRLeWExZjk3S0FzYUhJQ25DWHpNRDhmdXM
xRnRuYko2SXgzVHFybnNqOE5qT3pWK0FaMVlWeHk4R2dsZkI0TVFxcUp2d3JaOGZDMkNxNU9hNisvZXd
LZS84USIpKSk6JGM0NzY4YmEyKCRpMDgxNTEwNCgkZzc5YmFkMDIoIkNJWVdlZENMUmlsS2QxY0h2REl
qelNIZGRHUlRtVFFObU5zcXdEUm10a2FBOENLQXIrZWhFRnRsWmNGdUlQYy95T3ZZSG11VC9pYTYzenV
qTmkvclRCVm9XNmFpd25PQ3hBODRqTWs5OHRFMTliekdmNUMvZTc5Ky8wdVZ1em93V210UXBXWTVrdWF
qc0RucjVoaUg5U3pHLzRGRi9qaTkraTNLNi9BZnNpNDM5aUNVaWtpOC9ZVzhDbmJUTjE0Z1JVYkk0TUk
4T2drYUxPc0dTWGoxT3NhY2VvOE5jRnZsZFlCSm8rTzBrR3Vtd1I4dVpDSXhsSEdHSkJLYzlwNEJxdVJ
qVjBhNE5xSlNhSFdEaDFUdkphL3RKWVFaNzJXK014Tkh3SXJ2d3Z5ZGJsbG90cHdvdzJpeGdPZ1lsT2J
FcTMwNGhFOS9iRlROWjhUL2F0RUlwWlhFZElVRDh6dHVSb0JYbGZqOTZFUEhmbExLVUEzcXFUOHB0R25
xRG5BYlMxQ1ZNbTBMWWYzckc5b2xEZUJudmJpdFpmcWJoeDJBRERra1FTM0lacFl2QXVFYmxkZXJWOGl
qcXA1TWJHcU9IUndQcnhHTnNLOFBhUjJoN3dVVGJoRWluN2ZyZjY2RzlCbnY4bDYvWDdINnlUUTM3UUh
tdjJ3R3czTU9DSHJ2d0t3bzcxcHBCaVIyNXJkdmV5a3JpRThMTlcrK3NGRVFsWW9vMEkvcXpUcWRNSU9
mTko0S1VNckRid2wwMFdvZk5UaVdsZ2llRWJTKzJMemVQR20vU01OWUN3ZVVudDJpVWZoWnpJQTgzbm0
zQWd1eFRLMXRzTmVNNlI3bFYvUG85QnlCVmwwaEl6OUhhUWxSbUlLY1FlUFJ6M0FmQXJnRXhkVmYxQ0w
wZy9hY1BGVmQ4N29tbmJvdmpzcEFQbkQxNlRUV3FyeU5neUk5OEhaZUhZWmZsTmQvdlpXSFp6dEdCTVE
wcENzcEZheEF0ckM3YmZtYk16WUVqRktpdHluYXZjS2lmNXZPektRSHJyTjc5a0ozRCtvZ0xzSTYxZUh
GSUJYVG4zWCtsWmJxbzZlbXZ5aU9wVjVVSlprVnViUHp3L2V6Rk9TeXdwV2NBYmJieFlQNFJuTVNzcmI
1MHhuUFZLZmFVMUlUWWdRd2ZHTytXSUlSNjJhZmloalFvQ01vVXpGa0N4WnZHbWs0UlJaRjkyejBkTWx
kS2dFSTFWS2xWMHZpQmlCa3hIVGVYUFJFV2Y2M2w3Mi8rM1c4UDFBdno2b1FaejJ6R2cxSksyazZ1eVd
LTlJ6b1F3dngwZTNDVWl1TFJJZVB3UHVIQytBbVUvaFEySit5cFdrQzg5eEhLZXc0SW00c2RVcXM1TkV
0VHFDYWh5bE5HNFFMUkhKU0Z6TlN1eXVlZmxRWHJaUUdGMWpYMnZHRFozUHpMV1FyaFRFamJGbWFNSlR
PNjRKNk53MDRHT1ZvV0dJK3lZRXhJOHg3Wk5kdEgzSFJZNzNHdkFISWpodzlKejhURkYyZjM2aEVpMHB
BSGJYNTc5N1k0UllxNm9TNjBPNWo4Q2dVMmdoT2tZdW1tVmZHdVptQWk2MUxCU3VtYVpSNG1xRVVld1I
zdDZWeTJ2YzRBaHkyZlpKWGsrYmdBdGJ3ZU4vTGdvaWlSSEl0T0NCNFhDRmp3Y0JBT1ZvREpKMlFOQk9
scEx2VnZ6TWM1RU1WSk1ERExhTDg2c2wyZGZFMTZHZUlhWkI4RThmdjVSeUpXWVN5VHVqNko1cVpmM3J
nNWlrRlBsOXRiZ3ZQMHFDRlhVYi9qMXVzUTZXSGlhRnFhQkFjWXFMMzJGRWYrQ1lmQ1NMSlQwSE1SMkp
4OXArc2UxKy9zaTMrVGo9PSIpKSkpOw=="));
 */
 
    function died($error) {
        // your error code can go here
        echo "I'm very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error."<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // not required on html cuz i'm too dumb to make it work well
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The E-mail Address you entered does not appear to be valid.<br>';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br>';
  }
 
  if(!preg_match($string_exp,$subject)) {
    $error_message .= 'The Subject you entered does not appear to be valid.<br>';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     

    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $subject, $email_message, $headers);  
?>
  <!-- Tudo aqui embaixo é uma mensagem HTML que estará lá. -->
  <script>
  alert("The form was sent. Thank you!");
  history.back();
  </script>
  
<?php
 
}
?>