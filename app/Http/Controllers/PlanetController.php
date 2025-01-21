<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);
        $planet->name = $request->name;
        $planet->english_name = $request->english_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->save();
        return redirect(route('planets.index'));
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();
        return redirect(route('planets.index'));
    }

    public function create()
    {
        return view('planets.create');
    }

    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function store(PlanetRequest $request)
    {
        $planet = new Planet();
        $planet->name = $request->name;
        $planet->english_name = $request->english_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;
        $planet->save();
        return redirect(route('planets.index'));
    }
}
