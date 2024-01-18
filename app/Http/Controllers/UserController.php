<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }
	public function store(Request $request)
    {
        $input_data = $request->all();
		$data=[
			'name' => $input_data['name'],
			'dob' => $input_data['dob'],
			'migrane_frequency' => $input_data['migrane_frequency'],
			'daily_frequency' => (isset($input_data['daily_frequency']) &$input_data['migrane_frequency']=='daily')?$input_data['daily_frequency']:'',
			
		];
        User::create($data);
		  
		$year = (date('Y') - date('Y',strtotime($input_data['dob'])));
		if($year<=18){
			$msg='Participants must be over 18 years of age';
		} else {
			$medicine=($input_data['migrane_frequency']<>'daily')?'A':'B';			
			$msg='Participant '.$input_data['name'].' is assigned to Cohort '.$medicine;
		}
        return redirect("result")->with('message', $msg);
    }
	
	public function result()
    {
        return view('result');
    }
}
