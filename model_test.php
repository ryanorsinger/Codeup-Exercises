<?php

require_once 'model.php';
require_once 'user.php';

$model = new Model();

$all = Model::all();

var_dump($all);
