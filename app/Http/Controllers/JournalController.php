<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $journals = Journal::all()->toArray();
        // return view('listJournal',compact('journals'));

        $journals = Journal::latest()->paginate(3);
        return view('listJournal',compact('journals'))->with('i', (request()->input('page', 1) - 1) * 3);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.uploadJournal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author_name' => 'required',
            'author_email' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'journal' => 'required',
            'institution' => 'required',
            'institution_email' => 'required',
            'affiliation' => 'required',
            'country' => 'required',
            'category' => 'required',
            'author' => 'required',
            'featured_img' => 'required',
            'doi' => 'required',
            'issn' => 'required',
            ]);

            Journal::create($request->all());
            return redirect()->route('user.listJournal')->with('success','Journal created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        return view('viewJournal',compact('journal'));
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
