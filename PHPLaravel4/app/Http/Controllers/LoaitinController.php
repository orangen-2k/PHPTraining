<?php

namespace App\Http\Controllers;

use App\Loaitin;
use App\Theloai;
use Illuminate\Http\Request;

class LoaitinController extends Controller
{
    //
    public function getshow(){
        $type_of_news = Loaitin::all();
        return view('admin.loaitin.show',['Type_of_news'=>$type_of_news]);
    }

    public function getadd(){
        $category = Theloai::all();
        return view('admin.loaitin.add',['Category'=>$category]);
    }

    public function postadd(Request $request){
        $this->validate($request,
            [
                'Name'=>'required|min:1|max:100|unique:loaitin,ten',
                'Theloai'=>'required'
            ],
            [
                'Name.required'=>'Bạn chưa nhập tên loại tin',
                'Name.min'=>'Tên loại tin phải có từ 1-100 ký tự',
                'Name.max'=>'Tên loại tin phải có từ 1-100 ký tự',
                'Name.unique'=>'Tên loại tin đã tồn tại',
                'Theloai.required'=>'Bạn chưa chọn thể loại',
            ]
        );
        $type_of_news = new Loaitin;
        $type_of_news->ten = $request->Name;
        $type_of_news->tenkhongdau = changeTitle($request->Name);
        $type_of_news->idtheloai = $request->Theloai;
        $type_of_news->id_theloai = $request->Theloai;
        $type_of_news->save();
        return redirect()->route('show.type_of_news')->with('Notification','Thêm loại tin '."[ $type_of_news->ten ]".' thành công');
    }

    public function getupdate($id){
        $category = Theloai::all();
        $type_of_news = Loaitin::find($id);
        return view('admin.loaitin.update',['Type_of_news'=>$type_of_news,'Category'=>$category]);
    }

    public function postupdate(Request $request, $id){
        $this->validate($request,
            [
                'Name'=>'required|min:1|max:100|unique:loaitin,ten',
                'Theloai'=>'required'
            ],
            [
                'Name.required'=>'Bạn chưa nhập tên loại tin',
                'Name.min'=>'Tên loại tin phải có từ 1-100 ký tự',
                'Name.max'=>'Tên loại tin phải có từ 1-100 ký tự',
                'Name.unique'=>'Tên loại tin đã tồn tại',
                'Theloai.required'=>'Bạn chưa chọn thể loại',
            ]
        );
        $type_of_news = Loaitin::find($id);
        $type_of_news->ten = $request->Name;
        $type_of_news->tenkhongdau =  changeTitle($request->Name);
        $type_of_news->idtheloai = $request->Theloai;
        $type_of_news->id_theloai = $request->Theloai;
        $type_of_news->save();
        return redirect()->route('show.type_of_news')->with('Notification','Sửa thể loại '."[ $type_of_news->ten ]".' thành công');
    }

    public function getdelete($id){
        $type_of_news = Loaitin::find($id);
        $type_of_news->delete();
        return redirect()->route('show.type_of_news')->with('Notification','Xóa loại tin '."[ $type_of_news->ten ]".' thành công');
    }
}
