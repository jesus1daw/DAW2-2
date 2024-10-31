<?php
$var="prueba";
if (isset($var)) echo "Esta declarada ";
if (empty($var)) echo "No esta vacia ";
unset($var);
if (isset($var)) echo "No esta declarada ";
if (empty($var)) echo "Esta vacia porque no esta declarada " ;
$var="foo";
if ((bool) $var) echo "True ";
if (!empty($var)) echo "True ";
