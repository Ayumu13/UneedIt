<!DOCTYPE html>
<html>
<head>
    <title>Afsprakenformulier</title>
    <link rel="stylesheet" href="formstyle.css">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Afsprakenformulier</h2>
 
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
 
        <form action="/form-submit" method="POST">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="input-field">
                        <label for="voornaam">Voornaam:</label>
                        <input type="text" class="form-control" id="voornaam" name="voornaam" required>
                    </div>
                    <div class="input-field">
                        <label for="achternaam">Achternaam:</label>
                        <input type="text" class="form-control" id="achternaam" name="achternaam" required>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <label for="email">E-mail adres:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="input-field">
                        <label for="telefoon">Telefoonnummer:</label>
                        <input type="text" class="form-control" id="telefoon" name="telefoon" required>
                    </div>
                </div>
 
                <!-- Calendar Container -->
                <div id='calendar' style='margin-top: 20px;'></div>
 
            </div>
        </form>
 
    </div>
 
    <!-- FullCalendar Initialization Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: '/calendar/events',
                dateClick: function(info) {
                    var title = prompt('Event Title:');
                    if (title) {
                        var start = info.dateStr;
                        var end = info.dateStr;
 
                        fetch('/calendar/events', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                title: title,
                                start: start,
                                end: end,
                            })
                        }).then(response => response.json()).then(data => {
                            calendar.addEvent({
                                id: data.id,
                                title: data.title,
                                start: data.start,
                                end: data.end,
                            });
                        });
                    }
                }
            });
            calendar.render();
        });
    </script>
 
</body>
</html>