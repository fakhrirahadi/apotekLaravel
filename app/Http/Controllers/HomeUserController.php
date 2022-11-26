<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Drug, Supplier, Transaction, User};

class HomeUserController extends Controller
{
    public function indexUser()
    {
		$drugs = Drug::paginate(20);
    	return view('home/indexUser',compact('drugs'), [            
    		'drug' => Drug::count(),
    		'supplier' => Supplier::count(),
    		'transaction' => Transaction::count(),
    		'user' => User::count()
    	]);
		
    }

	
}
