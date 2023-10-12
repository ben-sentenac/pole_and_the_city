<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DiciplineCollection;
use App\Http\Resources\V1\DiciplineResource;
use App\Models\Dicipline;
use Illuminate\Http\Request;

class DiciplineController extends Controller
{
    protected $acceptedTrueParams = ['1','true'];
    /**
     * Display a listing of the resource.
     * @queryParam courses boolean
     * display all courses related in each dicipline
     */
    public function index(Request $request)
    {
        $includeCourses = $this->validateRequestParam($request);

        $diciplines = ($includeCourses) ? Dicipline::with('courses')->get() : Dicipline::all();

        return new DiciplineCollection($diciplines);

    }

    /**
     * Display the specified Dicipline.
     * @queryParam courses boolean
     * display all courses related to given the dicipline
     */
    public function show(Dicipline $dicipline, Request $request)
    {

        $includeCourses = $this->validateRequestParam($request);
        $dicipline = ($includeCourses) ? $dicipline->with('courses')->find($dicipline->id) : $dicipline;

        return new DiciplineResource($dicipline);
    }
/**
 * filter accepted query params
 */
    private function validateRequestParam(Request $request):bool {
        return in_array($request->query('courses'),$this->acceptedTrueParams);
    }
}
