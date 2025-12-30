<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'slide' => Post::where('slide', '1')
                            ->where('status', '1')
                            ->Orderby('created_at', 'DESC')
                            ->limit(5)
                            ->get(),
                            
            'banner_slide' => Post::where('category','1')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->get(),

            'kh_home_top_1' => Post::where('subcate', '1')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'kh_home_top_2' => Post::where('subcate', '1')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),

            'th_home_top_1' => Post::where('subcate', '2')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'th_home_top_2' => Post::where('subcate', '2')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),

            'ch_home_top_1' => Post::where('subcate', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'ch_home_top_2' => Post::where('subcate', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),

            'pr_home' => Post::where('category', '1')
                                ->where('status', '1')
                                ->Orderby('created_at', 'DESC')
                                ->limit(6)
                                ->get(),

            'pro_home_top_1' => Post::where('category', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'pro_home_top_2' => Post::where('category', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),

            'ev_home_top_1' => Post::where('category', '4')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'ev_home_top_2' => Post::where('category', '4')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),
        ];
        return view('page.home', $data);
    }

    public function pr()
    {
        $data = [
            'pr' => Post::where('category', '1')
                        ->where('status', '1')
                        ->Orderby('created_at', 'DESC')
                        ->paginate(12),
        ];
        return view('page.pr', $data);
    }

    public function drama()
    {
        $data = [
            'kh_drama_top_2' => Post::where('subcate', '1')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->get(),

            'kh_drama_top_3' => Post::where('subcate', '1')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(3)
                                    ->skip(2)
                                    ->get(),

            'th_drama_top_1' => Post::where('subcate', '2')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'th_drama_top_2' => Post::where('subcate', '2')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),

            'ch_drama_top_1' => Post::where('subcate', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'ch_drama_top_2' => Post::where('subcate', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),
        ];
        return view('page.drama', $data);
    }

    public function khmer()
    {
        $data = [
            'drama_khmer' => Post::where('subcate', '1')
                            ->where('status', '1')
                            ->Orderby('created_at', 'DESC')
                            ->paginate(12),
        ];
        return view('page.khmer', $data);
    }

    public function thai()
    {
        $data = [
            'drama_thai' => Post::where('subcate', '2')
                        ->where('status', '1')
                        ->Orderby('created_at', 'DESC')
                        ->paginate(12),
        ];
        return view('page.thai', $data);
    }

    public function chinese()
    {
        $data = [
            'drama_chinese' => Post::where('subcate', '3')
                                ->where('status', '1')
                                ->Orderby('created_at', 'DESC')
                                ->paginate(12),
        ];
        return view('page.chinese', $data);
    }

    public function program()
    {
        $data = [
            'program' => Post::where('category', '3')
                            ->where('status', '1')
                            ->Orderby('created_at', 'DESC')
                            ->paginate(12),
        ];
        return view('page.program', $data);
    }

    public function events()
    {
        $data = [
            'events' => Post::where('category', '4')
                            ->where('status', '1')
                            ->Orderby('created_at', 'DESC')
                            ->paginate(12),
        ];
        return view('page.events', $data);
    }

    public function content($id)
    {
        $data = [
            'post' => Post::where('status', '1')
                        ->findOrFail($id),

            'slide' => Post::where('status', '1')
                            ->Orderby('created_at', 'DESC')
                            ->limit(10)
                            ->get(),

            'pr_con_top_1' => Post::where('category', '1')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'pr_con_top_2' => Post::where('category', '1')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),

            'drama_top_1' => Post::where('category', '2')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'drama_top_2' => Post::where('category', '2')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),

            'pro_top_1' => Post::where('category', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(1)
                                    ->get(),

            'pro_top_2' => Post::where('category', '3')
                                    ->where('status', '1')
                                    ->Orderby('created_at', 'DESC')
                                    ->limit(2)
                                    ->skip(1)
                                    ->get(),
        ];
        return view('page.content', $data);
    }

    public function live()
    {
        return view('page.live');
    }
}
