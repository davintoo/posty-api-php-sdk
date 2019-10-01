<?php

require 'vendor/autoload.php';


$c = new Posty\Client([
    'endPoint' => 'http://127.0.0.1:9292',
    'apiToken' => 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
]);


try {
    $domain = 'test.com';
//    print_r($c->addUser($domain, [
//        'name' => 'test',
//        'password' => 'test123456',
//        'quota' => 1000
//    ]));
//    print_r($c->updateUser($domain, 'test', [
//        'quota' => 2000
//    ]));
//    print_r($c->deleteUser($domain, 'test'));


//    print_r($c->getUsers($domain));
//    print_r($c->getDomains());
} catch (\Exception $ex) {
    print_r($ex);
}
