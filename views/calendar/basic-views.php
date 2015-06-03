<?php

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'All Day Event';
	$newEvent->start = date('2015-02-01');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Long Event';
	$newEvent->start = date('2015-02-07');
	$newEvent->end = date('2015-02-10');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date('2015-02-09T16:00:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date('2015-02-16T16:00:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Conference';
	$newEvent->start = date('2015-02-11');
	$newEvent->end = date('2015-02-13');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date('2015-02-12T10:30:00');
	$newEvent->end = date('2015-02-12T12:30:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Lunch';
	$newEvent->start = date('2015-02-12T12:00:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date('2015-02-12T14:30:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Happy Hour';
	$newEvent->start = date('2015-02-12T17:30:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Dinner';
	$newEvent->start = date('2015-02-12T20:00:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Birthday Party';
	$newEvent->start = date('2015-02-13T07:00:00');
	$events[] = $Event;

	$Event = new \p2made\models\FullCalendarEvent();
	$newEvent->title = 'Click for Google';
	$newEvent->url = 'http://google.com/';
	$newEvent->start = date('2015-02-28');
	$events[] = $Event;
