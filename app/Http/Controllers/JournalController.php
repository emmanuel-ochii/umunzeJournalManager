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
            'journal' => 'nullable|mimes:pdf|max:1999',
            'institution' => 'required',
            'institution_email' => 'required',
            'affiliation' => 'required',
            'country' => 'required',
            'category' => 'required',
            'author' => 'required',
            'featured_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'doi' => 'required',
            'issn' => 'required',
            ]);

            // $path = $request->file('image')->store('public/media/journals/img');

            // $journal = new Journal;
            // $journal->author_name = $request->author_name;
            // $journal->author_email = $request->author_email;
            // $journal->title = $request->title;
            // $journal->abstract = $request->abstract;
            // $journal->journal = $request->journal;
            // $journal->institution = $request->institution;
            // $journal->institution_email = $request->institution_email;
            // $journal->affiliation = $request->affiliation;
            // $journal->country = $request->country;
            // $journal->author = $request->author;
            // $journal->featured_img = $path;
            // $journal->doi = $request->doi;
            // $journal->issn = $request->issn;
            // $journal->save();

            $input = $request->all();

            if ($featured_img = $request->file('featured_img')) {
                $destinationPath = 'uploads/journals/img/';
                $journalImg = date('YmdHis') . "." . $featured_img->getClientOriginalExtension();
                $featured_img->move($destinationPath, $journalImg);
                $input['featured_img'] = "$journalImg";
            }

            Journal::create($input);


            // return redirect()->route('user.listJournal')->with('success','Journal created successfully.');  This should be user when i have created individual user journal listing

            return redirect()->route('journals')->with('success','Journal created successfully.');

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
