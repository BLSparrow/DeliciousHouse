<?php
include $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$countries = $dataCountry ->getAllCountry();

include $_SERVER['DOCUMENT_ROOT'] . '/countries/countries.view.php';