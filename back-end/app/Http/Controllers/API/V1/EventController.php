<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EventCollection;
use App\Http\Resources\V1\EventResource;
use App\Models\Event;
use App\QueryFilters\V1\EventQuery;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $filter = new EventQuery();
        $filterItems = $filter->transformQuery($request);
        $events = Event::where($filterItems)->paginate();

        return new EventCollection($events->appends($request->query()));
    }

    public function show(Event $event)
    {
        //
        return new EventResource($event);
    }
}
