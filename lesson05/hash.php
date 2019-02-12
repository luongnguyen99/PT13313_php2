<?php


echo password_hash('123456', PASSWORD_DEFAULT);
echo "<br>";
var_dump(password_verify('123456', '$2y$10$M1RRC1HdJ7ZsxuUp6YkS8e7b7YQqtrnnOSWXnw4O.PDwVoBJ96Yh2u'));