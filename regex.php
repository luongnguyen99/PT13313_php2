<?php

$pattern = '/\(\+[1-9]{1}[0-9]{1,2}\)\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}/';
$subject = '(+200) 098 765 432';
if (preg_match($pattern, $subject)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}

?>