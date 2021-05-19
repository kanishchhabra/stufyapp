<?php
DEFINE('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . "/db");
DEFINE('CONTROLLER_PATH', $_SERVER['DOCUMENT_ROOT'] . "/controller"); # used in user registration form
DEFINE('VIEWS_PATH', $_SERVER['DOCUMENT_ROOT'] . "/views"); # used in user registration form
DEFINE('PARTIALS_PATH', VIEWS_PATH . "/partials"); # used in user registration form
DEFINE('CONTENT_PATH', VIEWS_PATH . "/content"); # used in user registration form
DEFINE('FUNCTIONS_PATH', CONTROLLER_PATH . "/functions"); # used in user registration form

#HTML relative paths
DEFINE('HTML_CONTROLLER_PATH', '../../controller/'); # used in user registration form
DEFINE('HTML_PARTIALS_PATH', '../partials/'); #used in main.html
DEFINE('HTML_CONTENT_PATH', '../content/');#used in main.html
