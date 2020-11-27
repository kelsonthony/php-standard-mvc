<?php

$this->get('/', function() {
    echo 'Estou no Root!';
});

$this->get('/home', function() {
    echo 'Estou na Home!';
});

//dd('test home');

$this->get('/about/test', function() {
    echo 'Estou na About Test! ;)';
});

$this->get('/categoria', 'Method@controller');