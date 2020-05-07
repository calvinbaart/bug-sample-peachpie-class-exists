<?php

if (!class_exists("PHPUnit\\TextUI\\ResultPrinter")) {
    echo "0";
} else {
    echo "1";
}

if (!class_exists(PHPUnit\TextUI\ResultPrinter::class)) {
    echo "0";
} else {
    echo "1";
}

$instance = new PHPUnit\TextUI\ResultPrinter();

if (!class_exists("PHPUnit\\TextUI\\ResultPrinter")) {
    echo "0";
} else {
    echo "1";
}

if (!class_exists(PHPUnit\TextUI\ResultPrinter::class)) {
    echo "0";
} else {
    echo "1";
}
