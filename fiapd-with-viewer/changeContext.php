<?php
$xml = "/usr/local/tomcat/conf/server.xml";
$server = simplexml_load_file($xml);
$context = $server->Service->Engine->Host->addChild('Context');
$context->addAttribute('docBase', 'PHPBridge');
$context->addAttribute('path', '');
$xmlString = $server->asXML();
file_put_contents($xml, $xmlString);