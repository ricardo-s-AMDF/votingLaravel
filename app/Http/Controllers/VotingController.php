<?php

namespace App\Http\Controllers;

use App\Models\Voting;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function index(Request $request)
    {        
        return view('voting.index');
    }

    public function show()
    {
        $listVoting = Voting::query()->selectRaw('name, count(name) as soma, number')->groupBy('name')->orderBy('soma', 'desc')->get();
        return view('voting.show')->with('voting', $listVoting);

    }

    public function save(Request $request)
    {
        $votingNumber = $request->input('number');
        $votingName = $request->input('name');
        $vote = new Voting();
        $vote->number = $votingNumber;
        $vote->name = $votingName;
        $vote->save();
        return view('voting.success');

        
    }

}
