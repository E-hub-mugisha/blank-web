<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function adminBlogs()
    {
        $blogs = Blogs::all();
        return view('admin.blogs', compact('blogs'));
    }
    public function addBlog()
    {
        return view('admin.add_blog');
    }
    public function blogSingle($slug)
    {
        $blog = Blogs::where('slug', $slug)->first();
        return view('admin.blog-single', compact('blog'));
    }
    public function createBlog(Request $request)
    {
        $blogs = new Blogs([
            "title" =>$request->title,
            "slug" =>$request->slug,
            "blog_tags" =>$request->blog_tags,
            "blog_category" =>$request->blog_category,
            "short_description" => $request->short_description,
            "content" =>$request->content,
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            
        ]);
        $file = $request->image;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->image->move('assets/img/blog', $filename);
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->blog_tags = $request->blog_tags;
        $blogs->blog_category = $request->blog_category;
        $blogs->short_description = $request->short_description;
        $blogs->content = $request->content;
        $blogs->image = $filename;
        $blogs->save();

        alert()->success('Thank You', 'Your request has been successfully submitted. we`ll get back to you soon. Thank you!');
        
        return redirect()->back();
    }
    public function editBlog($id)
    {
        $blog = Blogs::where('id', $id)->first();
        return view('admin.edit_blog', compact('blog'));
    }
    public function update($id,Request $request)
    {
        
        $blogs = Blogs::find($id);
        $file = $request->image;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->image->move('assets/img/blog', $filename);
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->blog_tags = $request->blog_tags;
        $blogs->blog_category = $request->blog_category;
        $blogs->short_description = $request->short_description;
        $blogs->content = $request->content;
        $blogs->image = $filename;
        $blogs->save();

        alert()->success('Thanks', 'Blog updated successfully');

        return redirect('/admin/blogs');
    }

    public function destroy(Blogs $blog)
    {
        $blog->delete();
        alert()->success('Thanks','blog deleted successfully!');

        return redirect('/admin/blogs');
    }
}
