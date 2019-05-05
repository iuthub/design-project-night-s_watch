<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class MenusEditController extends Controller
{
    public function execute($id,Request $request)	{
    	if($request->isMethod('delete')){

    		DB::delete("DELETE FROM `menus` WHERE id=?",[$id]);
    		return redirect('admin')->with('status','Menu was deleted');

    	}
/*------------------------------------------------------------------Request*/
    	if($request->isMethod('post'))	{
    		$input = $request->except('_token');
    		
    		$validator = Validator::make($input,[

    			'name'=>'required|max:30|unique:menus,name,'.$input['id'],
    			'price'=>'required|max:6',
    			'text'=>'required',
    			'images'=>'required'
    		]);
    		if ($validator->fails()) {
    			return redirect()->route('menusEdit',['page'=>$input['id']])->withErrors($validator)->withInput();
    		}
    		if ($request->hasFile('images')) {
	    	
	    		$file = $request->file('images');
    			$input['images'] = $file->getClientOriginalName();
    			
                $filePath = public_path()."/assets/img/menu";

    			$file->move($filePath,$input['images']);
    		}

    		else{
    			$input['images'] = $input = ['old_images'];
    		}

            $price = floatval($input['price']);
            DB::update("UPDATE `menus` SET `name`=?,`price`=?,`img`=?,`text`=? WHERE `id`=?",
                        [
                            $input['name'],
                            $price,
                            $input['images'],
                            $input['text'],
                            $id
                        ]);
            return redirect('admin')->with('status','Page edited successfully!');

    	}
/*---------------------------------------------------------------------Request*/

    	$foods = DB::select("SELECT * FROM `menus` WHERE id=?",[$id]);

    	// dd($foods[0]->name);
    	if(view()->exists('admin.pages_edit')){

    		$data = [
    					'title' => 'Edit Menu',
    					'id' => $id,
    					'name'=>$foods[0]->name,
    					'text'=>$foods[0]->text,
    					'price'=>$foods[0]->price,
    					'img'=>$foods[0]->img

    				];
 			return view('admin.pages_edit')->with(['data'=>$data]);
    	}
    	abort(404);
    }
}
