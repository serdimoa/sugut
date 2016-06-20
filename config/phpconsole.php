<?php

// See options description in corresponding PhpConsole\Laravel\ServiceProvider properties annotations

return array(
    'isEnabled' => false,
    'handleErrors' => false,
    'handleExceptions' => true,
    'sourcesBasePath' => base_path(),
    'registerHelper' => true,
    'serverEncoding' => null,
    'headersLimit' => null,
    'password' => null,
    'enableSslOnlyMode' => false,
    'ipMasks' => array(),
    'isEvalEnabled' => false,
    'dumperLevelLimit' => 5,
    'dumperItemsCountLimit' => 100,
    'dumperItemSizeLimit' => 5000,
    'dumperDumpSizeLimit' => 500000,
    'dumperDetectCallbacks' => true,
    'detectDumpTraceAndSource' => false,
    'dataStorage' => new PhpConsole\Storage\File(storage_path('php-console.dat'), true),
);
