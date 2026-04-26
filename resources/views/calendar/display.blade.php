@extends('layouts.app')

@section('content')

<div id="calendar"></div>

<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Create Booking</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <p id="selectedDate"></p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin, listPlugin, interactionPlugin],

        initialView: 'dayGridMonth',
        initialDate: '2026-04-28',

        selectable: true,

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },

        events: "{{ route('calendar.json') }}",

        dateClick: function(info) {
            document.getElementById('selectedDate').innerHTML =
                "Selected Date: " + info.dateStr;

            $('#bookingModal').modal('show');
        }
    });

    calendar.render();

});
</script>
@endsection