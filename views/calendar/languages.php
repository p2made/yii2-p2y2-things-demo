<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' href='../lib/cupertino/jquery-ui.min.css' />
<link href='../fullcalendar.css' rel='stylesheet' />
<link href='../fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='../lib/moment.min.js'></script>
<script src='../lib/jquery.min.js'></script>
<script src='../fullcalendar.min.js'></script>
<script src='../lang-all.js'></script>
<script>

	$(document).ready(function() {
		var currentLangCode = 'en';

		// build the language selector's options
		$.each($.fullCalendar.langs, function(langCode) {
			$('#lang-selector').append(
				$('<option/>')
					.attr('value', langCode)
					.prop('selected', langCode == currentLangCode)
					.text(langCode)
			);
		});

		// rerender the calendar when the selected option changes
		$('#lang-selector').on('change', function() {
			if (this.value) {
				currentLangCode = this.value;
				$('#calendar').fullCalendar('destroy');
				renderCalendar();
			}
		});

		function renderCalendar() {
			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				defaultDate: '2015-02-12',
				lang: currentLangCode,
				buttonIcons: false, // show the prev/next text
				weekNumbers: true,
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					{
						title: 'All Day Event',
						start: '2015-02-01'
					},
					{
						title: 'Long Event',
						start: '2015-02-07',
						end: '2015-02-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2015-02-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2015-02-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2015-02-11',
						end: '2015-02-13'
					},
					{
						title: 'Meeting',
						start: '2015-02-12T10:30:00',
						end: '2015-02-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2015-02-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2015-02-12T14:30:00'
					},
					{
						title: 'Happy Hour',
						start: '2015-02-12T17:30:00'
					},
					{
						title: 'Dinner',
						start: '2015-02-12T20:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2015-02-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2015-02-28'
					}
				]
			});
		}

		renderCalendar();
	});

</script>
<style>

	body {
		margin: 0;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#top {
		background: #eee;
		border-bottom: 1px solid #ddd;
		padding: 0 10px;
		line-height: 40px;
		font-size: 12px;
	}

	#calendar {
		max-width: 900px;
		margin: 40px auto;
		padding: 0 10px;
	}

</style>
</head>
<body>

	<div id='top'>

		Language:
		<select id='lang-selector'></select>

	</div>

	<div id='calendar'></div>

</body>
</html>
