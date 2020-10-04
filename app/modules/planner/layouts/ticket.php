<div class="ticket mb-4 row">

    <div class="col-md-4">
        <div class="md-form mb-0">
            <input type="datetime-local" placeholder="Ticket date" id="ticket_date_{UNIQID}" name="tickets[{UNIQID}][ticket_date]" class="form-control">
            <!-- <label for="ticket_date_{UNIQID}" class="">Ticket date</label> -->
        </div>
    </div>
   
    <div class="col-md-4">
        <div class="md-form mb-0">
            <input type="text" id="from_city_{UNIQID}" name="tickets[{UNIQID}][from_city]" class="form-control">
            <label for="from_city_{UNIQID}" class="">From (city)</label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="md-form mb-0">
            <input type="text" id="to_city_{UNIQID}" name="tickets[{UNIQID}][to_city]" class="form-control">
            <label for="to_city_{UNIQID}" class="">To (city)</label>
        </div>
    </div>

     <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="text" id="transportation_type_{UNIQID}" name="tickets[{UNIQID}][transportation_type]" class="form-control">
            <label for="transportation_type_{UNIQID}" class="">Transportation type (eg bus, airplane, train)</label>
        </div>
    </div>

    <div class="col-md-3">
        <div class="md-form mb-0">
            <input type="text" id="platform_gate_{UNIQID}" name="tickets[{UNIQID}][platform_gate]" class="form-control">
            <label for="platform_gate_{UNIQID}" class="">Platform/gate</label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="md-form mb-0">
            <input type="text" id="seat_number_{UNIQID}" name="tickets[{UNIQID}][seat_number]" class="form-control">
            <label for="seat_number_{UNIQID}" class="">Seat number</label>
        </div>
    </div>

    <div class="col-md-12">
        <div class="md-form mb-0">
            <input type="text" id="luggage_processing_{UNIQID}" name="tickets[{UNIQID}][luggage_processing]" class="form-control">
            <label for="luggage_processing_{UNIQID}" class="">Luggage processing</label>
        </div>
    </div>
    
</div>