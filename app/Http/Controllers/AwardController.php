<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Http\Requests\AwardRequest;

class AwardController extends Controller
{

    public function index()
    {
        $awards = Award::paginate(10);

        return view('awards.awards', compact('awards'));
    }

    public function store(AwardRequest $request)
    {
        Award::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'award' => $request->award
        ]);
        return redirect()->route('awards')->with('¡Éxito!', "Se ha guardado tu registro.");

    }

}
