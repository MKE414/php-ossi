<?php
error_reporting(E_ALL|E_STRICT);  
ini_set('display_errors', true);
set_include_path(implode(PATH_SEPARATOR, array( dirname(__FILE__),'../../library',get_include_path() )));


require_once 'Avaya/CM.php';

$cm = Avaya_CM::getInstance();

$cm->connect('serverip', port, 'user', 'password');

$protocol = $cm->getProtocol();

//$data = $protocol->get('display system-parameters country-options', '4a3cff00');
//$data = $protocol->get('display system-parameters country-options');

//$data = $protocol->monitorSystem();
$data = $protocol->monitorSkill('135');
//$data = $protocol->getAgentLog(agentid);
//$data = $protocol->listAgents();

echo "<pre>";
print_r( $data );
echo "</pre>";



?>