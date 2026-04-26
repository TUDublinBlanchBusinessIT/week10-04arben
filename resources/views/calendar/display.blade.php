@extends('layouts.app')

@section('content')
<div id="calendar"></div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin, listPlugin, interactionPlugin],
        initialView: 'dayGridMonth',

        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },

        slotDuration: '00:10:00',
        editable: true,
        initialDate: '2026-04-28',
        events: "{{ route('calendar.json') }}"
    });

    calendar.render();
});
</script>
@endsection