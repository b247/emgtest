<?php
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest' || empty($_SERVER['HTTP_REFERER'])) {
	header("HTTP/1.1 401 Unauthorized");exit('401: Unauthorized');
}
require __DIR__.'/vendor/autoload.php';

foreach ($_POST as $key => $val) { $$key = $val; }

function sort_tickets(array $params) {

	foreach ($params as $key => $val) { $$key = $val; }
	$ticketsObj = new app\modules\planner\Tickets();

	$ticketsObj->setTickets($tickets ?? array());
	// return json_encode($ticketsObj->getSortedTickets());
	return $ticketsObj->renderPlanner();

}

function add_ticket(array $params) {

	$ticketsObj = new app\modules\planner\Tickets();

	return $ticketsObj->renderTicket();
}

$response = call_user_func($_method,$_POST);
exit($response);


// EOF
