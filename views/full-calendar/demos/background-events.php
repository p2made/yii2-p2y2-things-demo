<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../fullcalendar.css' rel='stylesheet' />
<link href='../fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='../lib/moment.min.js'></script>
<script src='../lib/jquery.min.js'></script>
<script src='../fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2015-02-12',
			businessHours: true, // display business hours
			editable: true,
			events: [
				{
					title: 'Business Lunch',
					start: '2015-02-03T13:00:00',
					constraint: 'businessHours'
				},
				{
					title: 'Meeting',
					start: '2015-02-13T11:00:00',
					constraint: 'availableForMeeting', // defined below
					color: '#257e4a'
				},
				{
					title: 'Conference',
					start: '2015-02-18',
					end: '2015-02-20'
				},
				{
					title: 'Party',
					start: '2015-02-29T20:00:00'
				},

				// areas where "Meeting" must be dropped
				{
					id: 'availableForMeeting',
					start: '2015-02-11T10:00:00',
					end: '2015-02-11T16:00:00',
					rendering: 'background'
				},
				{
					id: 'availableForMeeting',
					start: '2015-02-13T10:00:00',
					end: '2015-02-13T16:00:00',
					rendering: 'background'
				},

				// red areas where no events can be dropped
				{
					start: '2015-02-24',
					end: '2015-02-28',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				{
					start: '2015-02-06',
					end: '2015-02-08',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				}
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
