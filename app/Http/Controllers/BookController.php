<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    function laythongtintheloai()
    {
        $the_loai_sach = Category::all();
        return view("qlsach.the_loai",compact("the_loai_sach"));
    }
    function laythongtinsach()
    {
        $sach = Book::select("tieu_de","tac_gia")
                ->where("nha_xuat_ban","Văn Học")
                ->where("gia_ban",">=",50000)
                ->where("gia_ban","<=",90000)->get();
        return view("qlsach.thong_tin_sach",compact("sach"));
    }
    function nhapdulieu()
    {
        return view("qlsach.nhap_du_lieu");
    }
    function luudulieu(Request $request)
    {
        $ids=$request->input("id"); //["5","6"]
        $ten_the_loais=$request->input("ten_the_loai"); //["Viễn tưởng","Truyện dài tập"]
        
        $data=[];
        foreach($ids as $key => $value)
        {
            $data[] = ["id"=>$value,"ten_the_loai"=>$ten_the_loais[$key]];
        }
        DB::table("the_loai"->insert($data));
        echo "Thêm thành công";
    }
}