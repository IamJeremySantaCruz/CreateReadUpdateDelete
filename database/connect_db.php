<?php

$connection = new mysqli("localhost", "root", "", "crud_opsv2");

if ($connection->connect_error) {
    die($connection . $connection->connect_error);
}
