<?php
$query = http_build_query(array(
    'client_id' => '3',
    'redirect_uri' => 'http://localhost:8001/callback.php',
    'response_type' => 'code',
    'scope' => '', 
));
 
header('Location: http://127.0.0.1:8000/oauth/authorize?'.$query);


// File ini kalo di ekseskuis minta authorize ke http://127.0.0.1:8000/