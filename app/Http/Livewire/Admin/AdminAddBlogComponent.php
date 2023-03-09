<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Blogs;
use Carbon\Carbon;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $content;
    public $blog_category;
    public $blog_tags;
    public $image;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title, '-');
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug' => 'required',
            'blog_category' => 'required',
            'blog_tags' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'content' => 'required',
        ]);
    }
    public function createBlog()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'blog_category' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'blog_tags' => 'required',
            'content' => 'required',
        ]);

        $blog = new Blogs();
        $blog->title = $this->title;
        $blog->slug = $this->slug;
        $blog->blog_category = $this->blog_category;
        $blog->blog_tags = $this->blog_tags;
        $blog->content = $this->content;


        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('blogs',$imageName);
        $blog->image = $imageName;

        $blog->save();
        
        alert()->success('Thank You', 'Your blog saved successfully');

        return redirect()->route('/admin/blogs');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-blog-component')->layout('layouts.app');
    }
}
