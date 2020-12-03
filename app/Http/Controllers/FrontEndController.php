<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Specialties;
use Illuminate\Support\Facades\App;


class FrontEndController extends Controller
{
    public function home(){


        $articles = [
            (object) [
                'title' => 'WHO chỉ trích y tế một số nước như hàng không giá rẻ 1',
                'url' => 'https://vnexpress.net/who-chi-trich-y-te-mot-so-nuoc-nhu-hang-khong-gia-re-4199552.html'
            ],
            (object) [
                'title' => 'WHO chỉ trích y tế một số nước như hàng không giá rẻ 2',
                'url' => 'https://vnexpress.net/who-chi-trich-y-te-mot-so-nuoc-nhu-hang-khong-gia-re-4199552.html'
            ],
            (object) [
                'title' => 'WHO chỉ trích y tế một số nước như hàng không giá rẻ 3',
                'url' => 'https://vnexpress.net/who-chi-trich-y-te-mot-so-nuoc-nhu-hang-khong-gia-re-4199552.html'
            ],
            (object) [
                'title' => 'WHO chỉ trích y tế một số nước như hàng không giá rẻ 4',
                'url' => 'https://vnexpress.net/who-chi-trich-y-te-mot-so-nuoc-nhu-hang-khong-gia-re-4199552.html'
            ]

        ];

        $articlesWithImages = [
            (object) [
                'title' => 'Kế hoạch sống khỏe 30 ngày của một HLV thể hình',
                'content' => ' Bốn điểm chính trong kế hoạch khỏe mạnh thể chất và tinh thần của HLV Joe Wicks gồm ăn uống, tập thể dục, đặt mục tiêu và giấc ngủ tốt. ',
                'url' => 'https://vnexpress.net/ke-hoach-song-khoe-30-ngay-cua-mot-hlv-the-hinh-4199126.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/11/30/35943712-8972973-image-m-116-1-8886-1169-1606712269.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=LKoQVyH3F21yVsjqdqQkqQ'
            ],
            (object) [
                'title' => 'Kế hoạch sống khỏe 30 ngày của một HLV thể hình',
                'content' => ' Bốn điểm chính trong kế hoạch khỏe mạnh thể chất và tinh thần của HLV Joe Wicks gồm ăn uống, tập thể dục, đặt mục tiêu và giấc ngủ tốt. ',
                'url' => 'https://vnexpress.net/ke-hoach-song-khoe-30-ngay-cua-mot-hlv-the-hinh-4199126.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/11/30/35943712-8972973-image-m-116-1-8886-1169-1606712269.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=LKoQVyH3F21yVsjqdqQkqQ'
            ],
            (object) [
                'title' => 'Kế hoạch sống khỏe 30 ngày của một HLV thể hình',
                'content' => ' Bốn điểm chính trong kế hoạch khỏe mạnh thể chất và tinh thần của HLV Joe Wicks gồm ăn uống, tập thể dục, đặt mục tiêu và giấc ngủ tốt. ',
                'url' => 'https://vnexpress.net/ke-hoach-song-khoe-30-ngay-cua-mot-hlv-the-hinh-4199126.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/11/30/35943712-8972973-image-m-116-1-8886-1169-1606712269.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=LKoQVyH3F21yVsjqdqQkqQ'
            ],
            (object) [
                'title' => 'Kế hoạch sống khỏe 30 ngày của một HLV thể hình',
                'content' => ' Bốn điểm chính trong kế hoạch khỏe mạnh thể chất và tinh thần của HLV Joe Wicks gồm ăn uống, tập thể dục, đặt mục tiêu và giấc ngủ tốt. ',
                'url' => 'https://vnexpress.net/ke-hoach-song-khoe-30-ngay-cua-mot-hlv-the-hinh-4199126.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/11/30/35943712-8972973-image-m-116-1-8886-1169-1606712269.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=LKoQVyH3F21yVsjqdqQkqQ'
            ],
        ];
        $gioithieukhoa = Post::all()->where('tag_id','=','4');

        $gioithieuchung = Post::all()->where('tag_id','=','10');
        $dichvuyte = Post::all()->where('tag_id','=','15');
        $Hotrokhachhang = Post::all()->where('tag_id','=','16');
        return view('pages.home')->with(['Hotrokhachhang'=>$Hotrokhachhang,'gioithieukhoa'=>$gioithieukhoa,'gioithieuchung'=>$gioithieuchung,'dichvuyte'=>$dichvuyte,
            'articles' => $articles,
            'articlesWithImages' => $articlesWithImages]);
    }

    public function show($id){
        $post = Post::find($id);
        $lsTag = Tag::all();
        $gioithieukhoa = Post::all()->where('tag_id','=','4');

        $gioithieuchung = Post::all()->where('tag_id','=','10');
        $dichvuyte = Post::all()->where('tag_id','=','15');
        $Hotrokhachhang = Post::all()->where('tag_id','=','16');
        return view('pages.post')->with(['Hotrokhachhang'=>$Hotrokhachhang,'gioithieukhoa'=>$gioithieukhoa,'gioithieuchung'=>$gioithieuchung,'dichvuyte'=>$dichvuyte,'post'=>$post,'lsTag'=>$lsTag]);
    }
    public function showListPost($tagName)
    {
        $tag=Tag::find(21);
        $lsPost = Tag::find(21)->post();
        $gioithieukhoa = Post::all()->where('tag_id','=','4');

        $gioithieuchung = Post::all()->where('tag_id','=','10');
        $dichvuyte = Post::all()->where('tag_id','=','15');
        $Hotrokhachhang = Post::all()->where('tag_id','=','16');
            return view('pages.lsPost')->with(['Hotrokhachhang'=>$Hotrokhachhang,'gioithieukhoa'=>$gioithieukhoa,'gioithieuchung'=>$gioithieuchung,'dichvuyte'=>$dichvuyte,'lspost'=>$lsPost,'tag'=>$tag]);
    }
}
