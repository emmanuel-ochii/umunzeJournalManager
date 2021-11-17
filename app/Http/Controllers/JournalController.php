<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Journal;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;

class JournalController extends Controller
{

    public function index()
    {
        $journals = Journal::latest()->paginate(3);
        return view('listJournal', compact('journals'));
        // return view('listJournal',compact('journals'))->with('i', (request()->input('page', 1) - 1) * 3);

    }

    public function create()
    {
        $categories = Category::all();
        $users = User::all();

        return view('user.uploadJournal', ['categories' => $categories, 'users' => $users]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'author_name' => 'required',
            'author_email' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'journal' => 'nullable|mimes:pdf|max:9999',
            'institution' => 'required',
            'institution_email' => 'required',
            'affiliation' => 'required',
            'country' => 'required',
            'category' => 'required',
            'uploaded_by' => 'required',
            'featured_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'doi' => 'required',
            'issn' => 'required',
            // 'user_id' => ['user']['id'],
            // 'user_id' => Auth::user()->id,
        ]);

        // $path = $request->file('image')->store('public/media/journals/img');

        // $input = $request->all();

        // if ($featured_img = $request->file('featured_img')) {
        //     $destinationPath = 'uploads/journals/img/';
        //     $journalImg = date('YmdHis') . "." . $featured_img->getClientOriginalExtension();
        //     $featured_img->move($destinationPath, $journalImg);
        //     $input['featured_img'] = "$journalImg";
        // }

        // if ($journal = $request->file('journal')) {
        //     $destinationPath = 'uploads/journals/pdf/';
        //     $journalPdf = date('YmdHis') . "." . $journal->getClientOriginalExtension();
        //     $journal->move($destinationPath, $journalPdf);
        //     $input['journal'] = "$journalPdf";
        // }

        // Journal::create($input);

        if ($featured_img = $request->file('featured_img')) {
            $destinationPath = 'uploads/journals/img/';
            $journalImg = date('YmdHis') . "." . $featured_img->getClientOriginalExtension();
            $featured_img->move($destinationPath, $journalImg);
            $input['featured_img'] = "$journalImg";
        }

        // if ($journal = $request->file('journal')) {
        //     $destinationPath = 'uploads/journals/pdf/';
        //     $journalPdf = date('YmdHis') . "." . $journal->getClientOriginalExtension();
        //     $journal->move($destinationPath, $journalPdf);
        //     $input['journal'] = "$journalPdf";
        // }

        $journal = new Journal;
        $journal->author_name = $request->author_name;
        $journal->author_email = Auth::user()->email;
        $journal->title = $request->title;
        $journal->abstract = $request->abstract;
        // $journal->journal = $request->journal;

        $file = $request->journal;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->journal->move('uploads/journals/pdf', $filename);
        $journal->Journal = $filename;

        $journal->institution = $request->institution;
        $journal->institution_email = $request->institution_email;
        $journal->affiliation = $request->affiliation;
        $journal->country = $request->country;
        $journal->status = 1;
        $journal->category = $request->category;
        $journal->uploaded_by = $request->uploaded_by;
        $journal->featured_img = $journalImg;
        $journal->doi = $request->doi;
        $journal->issn = $request->issn;
        // $journal->user_id =  $request->user()->id;
        $journal->user_id = Auth::user()->id;
        $journal->save();



        // return redirect()->route('user.listJournal')->with('success','Journal created successfully.');  This should be user when i have created individual user journal listing

        return redirect()->route('user.listJournal')->with('success', 'Journal created successfully.');
    }

    public function show(Journal $journal)
    {
        return view('viewJournal', compact('journal'));
    }

    public function showSingleJournal(Request $request, $slug, $id)
    {

        $journal = Journal::find($id);

        return view('viewJournal', ['journal' => $journal]);
    }

    public function storeComment(Request $request, $slug, $id)
    {
        $request->validate([
            'comment'=>'required'
        ]);

        $comment = new Comment;
        $comment->user_id = $request->user()->id;
        $comment->journal_id = $id;
        $comment->user_email = $request->user()->email ;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect('journal/'.$slug.'/'.$id)->with('success', 'Comment has been submitted.');
    }

    public function download(Request $request, $journal)
    {
        return response()->download(public_path('uploads/journals/pdf/' . $journal));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
