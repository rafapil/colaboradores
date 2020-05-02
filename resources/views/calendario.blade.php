<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">

</head>

<body>

    <div class="ui container">

        <!-- <div class="ui menu">
			<div class="header item">Brand</div>
			<a class="active item">Link</a>
			<a class="item">Link</a>
			<div class="ui dropdown item">
				Dropdown
				<i class="dropdown icon"></i>
				<div class="menu">
					<div class="item">Action</div>
					<div class="item">Another Action</div>
					<div class="item">Something else here</div>
					<div class="divider"></div>
					<div class="item">Separated Link</div>
					<div class="divider"></div>
					<div class="item">One more separated link</div>
				</div>
			</div>
			<div class="right menu">
				<div class="item">
					<div class="ui action left icon input">
						<i class="search icon"></i>
						<input type="text" placeholder="Search">
						<button class="ui button">Submit</button>
					</div>
				</div>
				<a class="item">Link</a>
			</div>
		</div> -->
    </div>

    <br />
    <div class="ui container">
        <div class="ui grid">
            <div class="ui sixteen column">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function () {

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,basicWeek,basicDay'
				},
				defaultDate: '2019-12-12',
				navLinks: true, // can click day/week names to navigate views
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [{
						title: 'All Day Event',
						start: '2019-12-01'
					},
					{
						title: 'Long Event',
						start: '2019-12-07',
						end: '2019-12-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-12-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2019-12-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2019-12-11',
						end: '2019-12-13'
					},
					{
						title: 'Meeting',
						start: '2019-12-12T10:30:00',
						end: '2019-12-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2019-12-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2019-12-12T14:30:00'
					},
					{
						title: 'Happy Hour',
						start: '2019-12-12T17:30:00'
					},
					{
						title: 'Dinner',
						start: '2019-12-12T20:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2019-12-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'https://google.com/',
						start: '2019-12-28'
					}
				]
			});

		});
    </script>

</body>

</html>
