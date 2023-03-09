<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function adminTestimonials()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials', compact('testimonials'));
    }
    public function addTestimonial()
    {
        return view('admin.add_testimonial');
    }
    public function testimonialSingle($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        $reviews = Testimonial::all();
        return view('admin.testimonial_single', compact('testimonial','reviews'));
    }
    public function createTestimonial(Request $request)
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
        
        return redirect('/admin/testimonials');
    }
    public function editTestimonial($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        return view('admin.edit_testimonial', compact('testimonial'));
    }
    public function update($id,Request $request)
    {
        
        $testimonials = Testimonial::find($id);
        $testimonials->title = $request->title;
        $testimonials->names = $request->names;
        $testimonials->review = $request->review;
        $testimonials->save();

        alert()->success('Thanks', 'testimonials updated successfully');

        return redirect('/admin/testimonials');
    }

    public function destroy(Testimonial $testimonials)
    {
        $testimonials->delete();
        alert()->success('Thanks','testimonials deleted successfully!');

        return redirect('/admin/testimonials');
    }
}
