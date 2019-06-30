<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //顯示所有資料
    public function index()
    {
        return 'index:這是最新消息的首頁';
    }
    //新增一筆資料
    public function create()
    {
        return '新增一筆資料';
    }

    //儲存資料
    public function store(Request $request)
    {
        //
    }

    //顯示一筆資料
    public function show($id)
    {
        return '最新消息'.$id;
    }

    //編輯一筆資料
    public function edit($id)
    {
        //
    }

    //更新一筆資料
    public function update(Request $request, $id)
    {
        //
    }

    //刪除一筆資料
    public function destroy($id)
    {
        //
    }

    public function hello(){
        return view('hello');
    }

    public function show_id($id){
        //第一種傳變數進view的方法
        return view('hello')->with('id',$id);
        //第二種方法
        // return view('hello',compact('id',$id));
    }
}
