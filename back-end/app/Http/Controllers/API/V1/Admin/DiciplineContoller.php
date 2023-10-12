<?php

namespace App\Http\Controllers\API\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\V1\DiciplineRequest;
use App\Http\Resources\V1\DiciplineResource;
use App\Models\Dicipline;

class DiciplineContoller extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(DiciplineRequest $request)
    {
        //
        $dicipline = Dicipline::create($request->validated());

        return new DiciplineResource($dicipline);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Dicipline $dicipline, DiciplineRequest $request)
    {
        //
        $dicipline->update($request->validated());

        return new DiciplineResource($dicipline);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dicipline $dicipline)
    {
        //
        return $dicipline->delete();
    }
}
