<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\faq;

class FaqController extends Controller
{
    public function adminFaq()
    {
        $faqs = faq::all();
        return view('admin.faq', compact('faqs'));
    }
    public function addFaq()
    {
        return view('admin.add_faq');
    }
    public function faqSingle($id)
    {
        $faq = faq::where('id', $id)->first();
        return view('admin.faq_single', compact('faq','reviews'));
    }
    public function createFaq(Request $request)
    {
        $faqs = new faq([
            "question" =>$request->question,
            "answer" =>$request->answer,
            
        ]);
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->save();

        alert()->success('Thank You', 'Your faq saved successfully');
        
        return redirect('/admin/faq');
    }
    public function editFaq($id)
    {
        $faq = faq::where('id', $id)->first();
        return view('admin.edit_faq', compact('faq'));
    }
    public function update($id,Request $request)
    {
        
        $faqs = faq::find($id);
        $faqs->question = $request->question;
        $faqs->answer = $request->answer;
        $faqs->save();

        alert()->success('Thanks', 'faqs updated successfully');

        return redirect('/admin/faq');
    }

    public function destroy(faq $faqs)
    {
        $faqs->delete();
        alert()->success('Thanks','faqs deleted successfully!');

        return redirect('/admin/faq');
    }
}
