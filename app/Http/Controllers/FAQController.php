<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all(); 
        return view('FAQ.index',['faqs' => $faqs]);
    }

    public function addFAQForm(){
        return view('FAQ.add');
    }

    public function add(Request $request){
        $faq = new FAQ();
        $faq->question = $request->question;
        $faq->reponse = $request->reponse;
        $faq->save();
        return redirect()->route('FAQs');
    }

    public function updateFAQForm($id){
        $faq = FAQ::find($id);
        return view('FAQ.update',[ 'faq' => $faq]);
    }

    public function update(Request $request){
        $faq = FAQ::find($request->id);
        $faq->question = $request->question;
        $faq->reponse = $request->reponse;
        $faq->save();
        return redirect()->route('FAQs');
    }

    public function delete($id){
        $faq = FAQ::find($id);
        $faq->delete();
        return redirect()->route('FAQs');
    }
}
