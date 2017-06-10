<?php
require_once ("java/Java.inc");

function getenvj($name)
{
        $System = java("java.lang.System");
        return $System->getenv($name);
}