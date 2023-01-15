<!-- jquery -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- count down -->
<script src="assets/js/jquery.countdown.js"></script>
<!-- isotope -->
<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
<!-- waypoints -->
<script src="assets/js/waypoints.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- mean menu -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- sticker js -->
<script src="assets/js/sticker.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<!-- calendar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
<script>
    var botmanWidget = {
        title: 'FMC Catering Services',
        aboutText: 'FMC Catering Services',
        introMessage: 'Hi! Welcome to FMC Catering Services'
    };
</script>

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

<script>
    $('input[type="checkbox"]').on('change', function(e) {
        if (e.target.checked) {
            $('#myModal').modal();
        }
    });
</script>
