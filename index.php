<?php

$name = $_GET['name'] ?? "Unknown";

printf("Hello %s", htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));
