<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\Category;
use App\Models\User;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard',['title'=>'Admin Dashboard | Journal Manager | Federal College of Education (Technical) Umunze']);
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

    public function viewProfile()
    {
        return view('admin.profile');
    }

    // JOURNAL
    public function allJournalAdmin()
    {
        $journals=Journal::all();

        return view('admin.allJournals',[
            'journals' => $journals,
            'title' => 'All Journals | Journal Manager | Federal College of Education (Technical) Umunze']);
    }

    public function pendingJournalAdmin()
    {
        $journals=Journal::all();

        return view('admin.pendingJournals',[
            'journals' => $journals,
            'title' => 'Pending Journals | Journal Manager | Federal College of Education (Technical) Umunze']);
    }

    public function rejectedJournalAdmin()
    {
        $journals=Journal::all();

        return view('admin.rejectedJournals',[
            'journals' => $journals,
            'title' => 'Rejected Journals | Journal Manager | Federal College of Education (Technical) Umunze']);
    }
}
