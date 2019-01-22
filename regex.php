<?php

// $pattern = '/\(\+[1-9]{1}[0-9]{1,2}\)\s[0-9]{3}\s[0-9]{3}\s[0-9]{3}/';
$pattern = '/^[[:alnum:]]\@[[:alnum:]]+\.[a-z]+$/';
$subject = 'a.a1sdfsdfdsf@gmailsa5asda.co';
if (preg_match($pattern, $subject)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}

?>