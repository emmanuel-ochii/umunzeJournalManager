<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('welcome');

        // $journals = Journal::all()->toArray();
        // return view('listJournal',compact('journals'));

        $journals = Journal::latest()->paginate(3);
        return view('welcome',compact('journals'))->with('i', (request()->input('page', 1) - 1) * 3);
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
        // return view('viewJournal');
        return view('viewJournal',compact('journal'));
    }

    public function search()
    {
        return view('search');
    }

    public function viewProfile()
    {
        return view('user.profile');
    }

    public function listJournal()
    {
        return view('listJournal');
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
