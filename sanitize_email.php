<?php

$emails = array(
    'aaa@bbb.com',
    'abc',
    '.com',
    '@.com',
    'aaa@bbb.com ds'
);

foreach ($emails as $email) {
    echo "$email : ";
    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
    echo "<br />";
}