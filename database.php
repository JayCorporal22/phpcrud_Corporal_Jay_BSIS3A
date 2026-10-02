<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_corporal_jay_bsis3a');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}

