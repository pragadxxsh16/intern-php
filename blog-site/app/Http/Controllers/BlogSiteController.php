<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
#use Illuminate\Support\Facades\DB;
#use Symfony\Contracts\Service\Attribute\Required;



class BlogSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * view a newly created resource in storage.
     */
    public function view()
    {
        $data=blog::orderBy('id','desc')->paginate(10);
        return view('view',compact('data'));
    }

    /**
     *  storing the resource in database
     */ 

    public function store(Request $request)
    {
        $data=new blog();
        $data->title=$request->Title;
        $data->textarea=$request->Textarea;
        $data->save();
        return redirect()
        ->route('BlogSite.view')
        ->withSuccess('The blog has been created successfully..!!!');
    
    }




        /*$_request->validate([
            'title' => 'required',
            'textarea' => 'required'
        ]);
        $data=$_request->except('_token');
        blog::create($data);
       
    }*/
}

