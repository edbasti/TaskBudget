<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Saving;
use App\Period;
use Session;


class SavingsController extends Controller
{
    public function index()
	{
	    $savings = Saving::all();
	    $periods = Period::all();
	    //return view('savings.index')->withSavings($savings);
	    return view('savings.index', compact('savings','periods'));

	}

	public function create()
	{
		$periods = Period::all();
	    return view('savings.create')->withPeriods($periods);
	}
	
	public function show($id)
	{
		$saving = Saving::findOrFail($id);
		$periods = Period::all();
	    return view('savings.edit', compact('saving','periods'));
		// /return view('savings.edit')->withSaving($saving);
	}
	
	public function store(Request $request)
	{
	    $this->validate($request, [
		    'description' => 'required',
		    'amount' => 'required|numeric'
		]);
	    $input = $request->all();
		Saving::create($input);
		Session::flash('flash_message', 'Budget successfully added!');
		return redirect()->back();
	}
	
	public function update($id, Request $request)
	{
	    $saving = Saving::findOrFail($id);

	    $this->validate($request, [
	        'title' => 'required',
	        'description' => 'required'
	    ]);

	    $input = $request->all();

	    $saving->fill($input)->save();

	    Session::flash('flash_message', 'Budget successfully added!');

	    return redirect()->back();
	}
	
	public function destroy($id)
	{
	    $saving = Saving::findOrFail($id);

	    $saving->delete();

	    Session::flash('flash_message', 'Budget successfully deleted!');

	    return redirect()->route('savings.index');
	}
}
