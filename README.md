| 1. Introduction
----------------
Package will help you override Log class laravel

| 2. Directory Struct
-----------------------

    Root
    |__App
    |   |__app.php
    |
    |__Build
    |   |__Process.php - This class will copy Log.Php from OverrideLog
    |                       to laravel
    |__Config
    |   |__Log.php - contain path for copy of Process.php
    |
    |__Support
    |   |__.....
    |
    |__Versions
    |   |__laravel6
    |   |   |__Logger.php // Your code here to override Log of laravel version 6
    |   |
    |   |__laravel7
    |   |   |__Logger1.php
    |   |
    |   |__laravel8
    |   |__...
    |
    |__composer.json

-----------------------


| 3. Step by step do it
-----------------------

    3.1 Clone/download OverrideLog folder to your computer

    3.2 Customize Logger.php as you want to

    3.3 Commit this source OverrideLog on your git respository

    3.4 Update composer.json in laravel6 project

    3.5 Run composer update/install to override
-----------------------



