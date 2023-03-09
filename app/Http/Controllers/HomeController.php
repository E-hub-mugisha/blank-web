<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use App\Mail\newsMail;
use App\Models\Blogs;
use App\Models\faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use App\Models\Testimonial;
use App\Models\Partners;
use App\Mail\quoteMail;

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blogs::latest()->take(3)->get();
        $testimonials = Testimonial::all();
        $partners = Partners::all();
        return view('pages.home', compact('blogs','testimonials','partners'));
    }
    public function contact()
    {
        $faqs = faq::latest()->get();
        return view('pages.contact',compact('faqs'));
    }
    public function about()
    {
        $faqs = faq::latest()->get();
        return view('pages.about',compact('faqs'));
    }
    public function service()
    {
        $faqs = faq::latest()->get();
        return view('pages.services', compact('faqs'));
    }
    public function blog()
    {
        $blogs = Blogs::latest()->get();
        return view('pages.blogs', compact('blogs'));
    }
    public function blogDetail($slug)
    {
        $blog = Blogs::where('slug', $slug)->first();
        $r_blog = Blogs::latest()->take(3)->get();
        return view('pages.blog-detail', compact('blog','r_blog'));
    }
    public function sendContact(Request $request)
    {
        $mailData = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ];

        Mail::to('kabosierik@gmail.com')
            ->cc($mailData['email'])
            ->send(new contactMail($mailData));

        alert()->success('Thank You', 'Your request has been successfully submitted. we`ll get back to you soon. Thank you!');

        return redirect()->route('home');
    }
    public function sendMail(Request $request)
    {
        $newsData = [
            'email' => $request->get('email'),
        ];

        Mail::to('kabosierik@gmail.com')->send(new newsMail($newsData));

        alert()->success('Thank You', 'Your subscription has been sent successfully');

        return redirect()->back();
    }
    public function createReview(Request $request)
    {
        $testimonials = new Testimonial([
            "title" =>$request->title,
            "names" =>$request->names,
            "review" =>$request->review,
            
        ]);
        $testimonials->title = $request->title;
        $testimonials->names = $request->names;
        $testimonials->review = $request->review;
        $testimonials->save();

        alert()->success('Thank You', 'Your testimonial saved successfully');
        
        return redirect()->back();
    }
    public function getQuote()
    {
        $faqs = faq::latest()->get();
        return view('pages.get_quote',compact('faqs'));
    }
    public function sendQuote(Request $request)
    {
        $mailData = [
            'names' => $request->get('names'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'profile' => $request->get('profile'),
            'service' => $request->get('service'),
            'budget' => $request->get('budget'),
            'detail' => $request->get('detail')
        ];

        Mail::to('kabosierik@gmail.com')
            ->cc($mailData['email'])
            ->send(new quoteMail($mailData));

        alert()->success('Thank You', 'Your request has been successfully submitted. we`ll get back to you soon. Thank you!');

        return redirect()->route('home');
    }
}
