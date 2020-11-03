<?php

$controlPrefix = $_GET['cp'] ?? 'c_MainPage';

$path = "Controls/$controlPrefix.php";

include_once($path);