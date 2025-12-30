<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Post;
use App\Models\Category;
use App\Models\Subcate;

class PostController extends Controller
{
    public function insert()
    {
        $data = [
            'category' => Category::all(),
        ];
        return view('post.insert-post', $data);
    }

    public function getAjaxsubcate($subcate_id)
    {
        $subcate = Subcate::where('category', $subcate_id)->get();
        return json_encode($subcate);
    }

    public function postArticle(Request $request)
    {
        $request->validate([
                'title' => 'required',
                'content' => 'required',
                'category' => 'required',
                'status' => 'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ], [
                'title.required' => 'Title is required',
                'content.required' => 'Content is required',
                'category.required' => 'Category type is required',
                'status.required' => 'Status is required',
                'photo.required' => 'Photo is required',
            ]);

        $months = ['','មករា','កុម្ភៈ','មិនា','មេសា','ឧសភា','មិថុនា','កក្កដា','សីហា','កញ្ញា','តុលា','វិច្ឆិកា','ធ្នូ'];
        $days = ['','០១','០២','០៣','០៤','០៥','០៦','០៧','០៨','០៩','១០','១១','១២','១៣','១៤','១៥','១៦','១៧','១៨','១៩','២០','២១','២២','២៣','២៤','២៥','២៦','២៧','២៨','២៩','៣០','៣១'];
        $years = ['០','១','២','៣','៤','៥','៦','៧','៨','៩'];

        $mm = $months[(int) date("m")];
        $dd = $days[(int) date("d")];
        $yy = $years[substr(date("Y"),0,1)].
              $years[substr(date("Y"),1,1)].
              $years[substr(date("Y"),2,1)].
              $years[substr(date("Y"),3,1)];

        if ($request->hasFile('photo')) {
            $dir = 'assets/uploads/';
            $extension = strtolower($request->file('photo')->getClientOriginalExtension());
            $fileName = date('mdYHis') . uniqid() . '.' . $extension;
            $request->file('photo')->move($dir, $fileName);
        }

        $post = new Post();
        $post->title = $request['title'];
        if($request->has('slide') === true){
            $post->slide = "1";
        }else{
            $post->slide = "0";
        }
        $post->category = $request['category'];
        $post->subcate = $request['subcate_id'];
        $post->date_kh = 'ថ្ងៃទី'.$dd.' ខែ'.$mm.' ឆ្នាំ'.$yy;
        $post->time = $request['time'];
        $post->time_slide = Str::limit($request['time'], 5, '');
        $post->day = $request['day'];
        $post->status = $request['status'];
        $post->content = $request['content'];
        $post->user_id = Auth::user()->id;
        $post->photo = $fileName;

        $post->save();

        Toastr::success('Post has been successfully created');
        return back();
    }

    public function imagesUpload(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file',
        ]);

        $path = $request->file('file')->store('assets/images-uploads', 'uploads');
        return ['location' => Storage::disk('uploads')->url($path)];
    }
}
