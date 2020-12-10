<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Specialties;
use Illuminate\Support\Facades\App;


class FrontEndController extends Controller
{
    public function home()
    {


        $articles = [
            (object)[
                'title' => 'WHO chỉ trích y tế một số nước như hàng không giá rẻ',
                'url' => 'https://vnexpress.net/who-chi-trich-y-te-mot-so-nuoc-nhu-hang-khong-gia-re-4199552.html'
            ],
            (object)[
                'title' => 'Covid-19: Số ca nhiễm lên 1.385',
                'url' => 'https://vnexpress.net/tin-tuc-covid-19-moi-nhat-hom-nay-4071803.html'
            ],
            (object)[
                'title' => 'Người thử vaccine Covid-19 Việt Nam được bảo hiểm rủi ro',
                'url' => 'https://vnexpress.net/nguoi-thu-vaccine-covid-19-viet-nam-duoc-bao-hiem-rui-ro-4204320.html'
            ],
            (object)[
                'title' => 'Vaccine Covid-19 Việt Nam dưới 500.000 đồng một liều',
                'url' => 'https://vnexpress.net/vaccine-covid-19-viet-nam-duoi-500-000-dong-mot-lieu-4203268.html'
            ]

        ];

        $articlesWithImages = [
            (object)[
                'title' => 'Kế hoạch sống khỏe 30 ngày của một HLV thể hình',
                'content' => ' Bốn điểm chính trong kế hoạch khỏe mạnh thể chất và tinh thần của HLV Joe Wicks gồm ăn uống, tập thể dục, đặt mục tiêu và giấc ngủ tốt. ',
                'url' => 'https://vnexpress.net/ke-hoach-song-khoe-30-ngay-cua-mot-hlv-the-hinh-4199126.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/11/30/35943712-8972973-image-m-116-1-8886-1169-1606712269.jpg?w=220&h=132&q=100&dpr=1&fit=crop&s=LKoQVyH3F21yVsjqdqQkqQ'
            ],
            (object)[
                'title' => 'Bài tập nhanh buổi sáng cho người lười',
                'content' => 'Chuỗi 15 động tác khởi động ngày mới đơn giản, hiệu quả, không cần tạ hay đến phòng tập vẫn giúp cơ thể dẻo dai mỗi ngày.',
                'url' => 'https://vnexpress.net/bai-tap-nhanh-buoi-sang-cho-nguoi-luoi-4203407.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/12/08/AnhchupManhinh20201208luc16345-2347-1964-1607421863.png?w=300&h=180&q=100&dpr=1&fit=crop&s=0lhcelb-ouCtJPn1ySujSA'
            ],
            (object)[
                'title' => 'Động tác đi bằng tay cho bụng thon gọn',
                'content' => ' Huấn luyện viên Trang Lê hướng dẫn động tác plank, đi bằng tay, gập người, nâng tạ đơn giúp tiêu mỡ, thon gọn phần vai, bắp tay, lưng, bụng. ',
                'url' => 'https://vnexpress.net/dong-tac-di-bang-tay-cho-bung-thon-gon-4202003.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/12/05/AnhchupManhinh20201205luc18093-7697-6667-1607167501.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=ffu0y3J4lYNTG-6vG8sf4g'
            ],
            (object)[
                'title' => 'Một năm lột xác thành cô nàng cơ bắp',
                'content' => ' 9 giờ sáng trong phòng tập thể hình, Quỳnh, 24 tuổi, hít một hơi thật sâu, chân đứng tấn, dõng dạc hét "lên" rồi gồng mình nhấc bổng tạ nặng 80 kg, bằng mức tạ nam giới.',
                'url' => 'https://vnexpress.net/mot-nam-lot-xac-thanh-co-nang-co-bap-4127191.html',
                'img' => 'https://i1-suckhoe.vnecdn.net/2020/07/08/IMG45162copy-1594215929-2200-1594217102.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=EbFiAd9tOqXL49QGbWdTyQ'
            ],
        ];
        $gioithieukhoa = Post::all()->where('tag_id', '=', '4');

        $gioithieuchung = Post::all()->where('tag_id', '=', '10');
        $dichvuyte = Post::all()->where('tag_id', '=', '15');
        $Hotrokhachhang = Post::all()->where('tag_id', '=', '16');
        return view('pages.home')->with(['Hotrokhachhang' => $Hotrokhachhang, 'gioithieukhoa' => $gioithieukhoa, 'gioithieuchung' => $gioithieuchung, 'dichvuyte' => $dichvuyte,
            'articles' => $articles,
            'articlesWithImages' => $articlesWithImages]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        $lsTag = Tag::all();
        $gioithieukhoa = Post::all()->where('tag_id', '=', '4');

        $gioithieuchung = Post::all()->where('tag_id', '=', '10');
        $dichvuyte = Post::all()->where('tag_id', '=', '15');
        $Hotrokhachhang = Post::all()->where('tag_id', '=', '16');
        return view('pages.post')->with(['Hotrokhachhang' => $Hotrokhachhang, 'gioithieukhoa' => $gioithieukhoa, 'gioithieuchung' => $gioithieuchung, 'dichvuyte' => $dichvuyte, 'post' => $post, 'lsTag' => $lsTag]);
    }

    public function showListPost($id)
    {
        $tag = Tag::find($id);
        $lsPost = Post::where('tag_id','=',$id)->paginate(8);
        $gioithieukhoa = Post::all()->where('tag_id', '=', '4');
        $gioithieuchung = Post::all()->where('tag_id', '=', '10');
        $dichvuyte = Post::all()->where('tag_id', '=', '15');
        $Hotrokhachhang = Post::all()->where('tag_id', '=', '16');
        return view('pages.lsPost')->with(['Hotrokhachhang' => $Hotrokhachhang, 'gioithieukhoa' => $gioithieukhoa, 'gioithieuchung' => $gioithieuchung, 'dichvuyte' => $dichvuyte, 'lsPost' => $lsPost, 'tag' => $tag]);
    }

    public function search(Request $request){
        $search = $request->s;
        $lsPost = Post::where('title','like',"%".$search."%")->orWhere('body','like',"%".$search."%")->paginate(6);
        $count = count(Post::where('title','like',"%".$search."%")->orWhere('body','like',"%".$search."%")->get());
        $gioithieukhoa = Post::all()->where('tag_id', '=', '4');
        $gioithieuchung = Post::all()->where('tag_id', '=', '10');
        $dichvuyte = Post::all()->where('tag_id', '=', '15');
        $Hotrokhachhang = Post::all()->where('tag_id', '=', '16');

        return view('pages.searchResult')->with(['Hotrokhachhang' => $Hotrokhachhang, 'gioithieukhoa' => $gioithieukhoa, 'gioithieuchung' => $gioithieuchung, 'dichvuyte' => $dichvuyte, 'lsPost' => $lsPost, 'search'=>$search,'count'=>$count]);
    }

    public function contact(){
        $gioithieukhoa = Post::all()->where('tag_id', '=', '4');
        $gioithieuchung = Post::all()->where('tag_id', '=', '10');
        $dichvuyte = Post::all()->where('tag_id', '=', '15');
        $Hotrokhachhang = Post::all()->where('tag_id', '=', '16');
        return view('pages.contact')->with(['Hotrokhachhang' => $Hotrokhachhang, 'gioithieukhoa' => $gioithieukhoa, 'gioithieuchung' => $gioithieuchung, 'dichvuyte' => $dichvuyte]);
    }

//    public function showListDoctor()
//    {
//        $lsDoctor = Doctor::all();
//        $tag = Tag::find(21);
//        $lsPost = Tag::find(21)->post();
//        $gioithieukhoa = Post::all()->where('tag_id', '=', '4');
//
//        $gioithieuchung = Post::all()->where('tag_id', '=', '10');
//        $dichvuyte = Post::all()->where('tag_id', '=', '15');
//        $Hotrokhachhang = Post::all()->where('tag_id', '=', '16');
//
//        return view('pages.doctors',
//            [
//                'lsDoctor' => $lsDoctor,
//                'gioithieukhoa' => $gioithieukhoa,
//                'gioithieuchung' => $gioithieuchung,
//                'dichvuyte' => $dichvuyte,
//                'lspost' => $lsPost,
//                'tag' => $tag,
//                'Hotrokhachhang' => $Hotrokhachhang
//            ]
//        );
//    }
}
