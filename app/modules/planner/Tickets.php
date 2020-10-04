<?php

namespace app\modules\planner;

/**
 * 
 */
class Tickets extends Planner
{
	protected array $tickets;
	private array $ticketsSorted;
	private array $planner;
	
	public function __construct()
	{
		$this->tickets = array();
	}

	public function setTickets(array $tickets) {
		$this->tickets = $tickets;
	}

	public function getTickets() {
		return $this->tickets;
	}

	private function sortTickets() {
		$this->ticketsSorted = $this->tickets;
		usort($this->ticketsSorted, fn($a,$b) => strtotime($a['ticket_date']) <=> strtotime($b['ticket_date']));
	}

	public function getSortedTickets() {
		$this->sortTickets();
		return $this->ticketsSorted;
	}

	public function renderPlanner() {
		$this->sortTickets();
		$tickets = $this->ticketsSorted;
		$i=0;
		foreach ($tickets as $ticket) {
			$ticket = (object)$ticket;
			if (empty($ticket->ticket_date)) {
				continue;
			}
			$i++;
			$this->planner[] = "[$i] On $ticket->ticket_date take the $ticket->transportation_type from $ticket->from_city to $ticket->to_city; Use platform/gate $ticket->platform_gate, seat $ticket->seat_number; $ticket->luggage_processing<br/>";
			
		}
		return implode("<br/>", $this->planner);
	}

	public function renderTicket() {
		$view = $this->renderLayout();
		return str_replace('{UNIQID}', uniqid(), $view);
	}

	protected function renderLayout() {
        ob_start();
        include_once __DIR__. '/layouts/ticket.php';
        return ob_get_clean();
    }

}

// EOF
