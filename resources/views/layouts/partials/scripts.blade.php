<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            events: [
                @foreach ($events as $event)
                    {
                        title: '{{ $event->title }}',
                        start: '{{ $event->start }}{{ $event->time != null ? 'T' . $event->time : null }}',
                        end: '{{ $event->end }}',
                        url: '',
                        color: '{{ $event->color != null ? $event->color : '#2e45e0' }}',
                    },
                @endforeach
            ]
        });
    });
</script>
