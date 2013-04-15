<?php

use Illuminate\Support\Facades\App,
	Illuminate\Support\Facades\Event;

App::make('orchestra.app')->start();

include_once __DIR__.'/start/macro.php';
include_once __DIR__.'/filters.php';
include_once __DIR__.'/routes.php';

Event::fire('orchestra.ready');