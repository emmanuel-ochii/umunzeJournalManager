<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\Category;
use App\Models\User;
use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = Journal::where('status', 1)->latest()->paginate(6);
        $categories = Category::orderBy('id','desc')->get();
        return view('welcome',compact('journals','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function uploadJournal()
    {
        return view('user.uploadJournal');
    }

    public function viewJournal(Journal $journal)
    {

        return view('viewJournal',compact('journal'));
    }

    public function search(Request $request)
    {
        // return view('search');

        $search =  $request->input('search');
        if($search!=""){
            $journals = Journal::where(function ($query) use ($search){
                $query->where('title', 'like', '%'.$search.'%')
                    ->orWhere('abstract', 'like', '%'.$search.'%');
            })
            ->paginate(2);
            $journals->appends(['search' => $search]);
            // echo $search;
        }
        else{
            $journals = Journal::paginate(3);
        }

        return view('search')->with(['data' => $journals ,'search' =>$search]);

    }

    public function viewProfile()
    {
        // $user_id = Auth::user()->id;
        $users = User::all();

        // return $users;

        // exit();

        return view('user.profile')->with('users');
        // return view('user.profile',compact('users'));
        // return view('user.profile');
    }

    public function listJournal()
    {
        $journals = Journal::where('status', 1)->latest()->paginate(9);
        return view('listJournal',compact('journals'))->with('i', (request()->input('page', 1) - 1) * 3);
    }

    public function listCategory()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('listCategory',['categories' => $categories]);
    }

    public function editProfile()
    {
        return view('user.editProfile');
    }

    public function userJournals()
    {
        return view('user.userJournals');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
