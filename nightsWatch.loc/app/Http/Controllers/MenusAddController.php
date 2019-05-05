<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Validator;

class MenusAddController extends Controller
{
    //
    public function execute(Request $request){

    	if($request->isMethod('post'))	{
    		$input = $request->except('_token');
    		
    		$validator = Validator::make($input,[

    			'name'=>'required|unique:menus|max:30',
    			'price'=>'required|max:6',
    			'text'=>'required',
    			'images'=>'required'
    		]);
    		if ($validator->fails()) {
    			return redirect()->route('menusAdd')->withErrors($validator)->withInput();
    		}
    		if ($request->hasFile('images')) {
	    	
	    		$file = $request->file('images');
    			$input['images'] = $file->getClientOriginalName();
    			
                $filePath = public_path()."/assets/img/menu";

    			$file->move($filePath,$input['images']);
    		}

            $price = floatval($input['price']);
        DB::insert('INSERT INTO `menus` (`name`,`price`,`img`,`text`) VALUES (?,?,?,?)',
                        [
                            $input['name'],
                            $price,
                            $input['images'],
                            $input['text']
                        ]);

    	}


    	if(view()->exists('admin.pages_add')){

    		$data = [
    					'title' => 'New Menu'
    				];
 			return view('admin.pages_add');
    	}
    	abort(404);
    }
}
