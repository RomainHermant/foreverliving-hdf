<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FAQ;

class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $faqs = FAQ::all();
        return view('auth.admin.faq.index',['faqs' => $faqs]);
    }

    public function addFAQForm(){
        return view('auth.admin.faq.add');
    }

    public function add(Request $request){
        $faq = new FAQ();
        $faq->question = $request->question;
        $faq->reponse = $request->reponse;
        $faq->save();
        return redirect()->route('admin.faq');
    }

    public function updateFAQForm($id){
        $faq = FAQ::find($id);
        return view('auth.admin.faq.update',[ 'faq' => $faq]);
    }

    public function update(Request $request){
        $faq = FAQ::find($request->id);
        $faq->question = $request->question;
        $faq->reponse = $request->reponse;
        $faq->save();
        return redirect()->route('admin.faq');
    }

    public function delete($id){
        $faq = FAQ::find($id);
        $faq->delete();
        return redirect()->route('admin.faq');
    }
}
