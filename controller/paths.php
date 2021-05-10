<?php
DEFINE('DB_PATH', $_SERVER['DOCUMENT_ROOT'] . "/db");
DEFINE('CONTROLLER_PATH', $_SERVER['DOCUMENT_ROOT'] . "/controller"); # used in user registration form
DEFINE('VIEWS_PATH', $_SERVER['DOCUMENT_ROOT'] . "/views"); # used in user registration form
DEFINE('COMPONENTS_PATH', VIEWS_PATH . "/components"); # used in user registration form
DEFINE('LAYOUTS_PATH', VIEWS_PATH . "/layouts"); # used in user registration form
DEFINE('FUNCTIONS_PATH', CONTROLLER_PATH . "/functions"); # used in user registration form

#HTML relative paths
DEFINE('HTML_CONTROLLER_PATH', '../../controller/'); # used in user registration form
DEFINE('HTML_COMPONENTS_PATH', '../components/'); #used in main.html
DEFINE('HTML_LAYOUTS_PATH', '../layouts/');#used in main.html
