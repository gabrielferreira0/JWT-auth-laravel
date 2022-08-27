<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;



class EventsController extends Controller
{
//    use DisableAuthorization;

    protected $model = Event::class;
}
