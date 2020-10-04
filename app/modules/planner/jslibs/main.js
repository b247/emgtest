let sectionTickets = $('section#tickets');
let addTicket = $('#addTicket');
let planner = $('#planner');


$('#addTicket').click(function(e){
	e.preventDefault();

	$.post('/ajax.php',{_method:'add_ticket'},function(data){
		sectionTickets.append(data);
		$( "html, body" ).scrollTop( addTicket.offset().top);
	})
})	

$('#ticketsToSort').submit(function(e){
	e.preventDefault();

	let form = $(this);
	$('[type=submit]', form).prop('disabled', true);

	let formData = new FormData(this);
	formData.append('_method','sort_tickets');

	$.ajax({
		url: '/ajax.php',
		data: formData,
		processData: false,
		contentType: false,
		type: 'POST',
		success: function(data){
			$('[type=submit]', form).prop('disabled', false);
			// data = JSON.parse(data);

			planner.html(data);
			$( "html, body" ).scrollTop( planner.offset().top);
			
		}
	})
})