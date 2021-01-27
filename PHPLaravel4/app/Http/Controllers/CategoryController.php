<?php

namespace App\Http\Controllers;

use App\Theloai;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getshow(){
        $category = Theloai::all();
        return view('admin.category.show',['Category'=>$category]);
    }

    public function getadd(){
        return view('admin.category.add');
    }

    public function postadd(Request $request){
        $this->validate($request,
            [
                'Name'=>'required|min:3|max:100|unique:theloai,ten'
            ],
            [
                'Name.required'=>'Bạn chưa nhập tên thể loại',
                'Name.min'=>'Tên thể loại phải có từ 3-100 ký tự',
                'Name.max'=>'Tên thể loại phải có từ 3-100 ký tự',
                'Name.unique'=>'Tên thể loại đã tồn tại',
            ]
        );
        $category = new Theloai;
        $category->ten = $request->Name;
        $category->tenkhongdau = changeTitle($request->Name);
        $category->save();
//        return redirect()->route('add.category')->with('thongbao','Thêm thể loại thành công');
        return redirect()->route('show.category')->with('Notification','Thêm thể loại '."[ $category->ten ]".' thành công');
//        echo changeTitle($request->Ten);
//        echo $request->ten;
    }

    public function getupdate($id){
        $category = Theloai::find($id);
        return view('admin.category.update',['Category'=>$category]);
    }

    public function postupdate(Request $request, $id){
        $category = Theloai::find($id);
        $this->validate($request,
            [
                'Name'=>'required|unique:theloai,ten|min:3|max:100'
            ],
            [
                'Name.required'=>'Bạn chưa nhập tên thể loại',
                'Name.min'=>'Tên thể loại phải có từ 3-100 ký tự',
                'Name.max'=>'Tên thể loại phải có từ 3-100 ký tự',
                'Name.unique'=>'Tên thể loại đã tồn tại',
            ]
        );
        $category->ten = $request->Name;
        $category->tenkhongdau =  changeTitle($request->Name);
        $category->save();
//        return redirect()->route('update.category', ['id' => $id])->with('thongbao','Sửa thể loại thành công');
        return redirect()->route('show.category')->with('Notification','Sửa thể loại '."[ $category->ten ]".' thành công');
    }

    public function getdelete($id){
        $category = Theloai::find($id);
        $category->delete();
        return redirect()->route('show.category')->with('Notification','Xóa thể loại '."[ $category->ten ]".' thành công');
    }
}
