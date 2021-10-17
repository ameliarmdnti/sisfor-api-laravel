<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function index()
    {
        $response =  DB::table('books')->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $response
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author_name' => 'required',
            'price' => 'required',
            'isbn' => 'required',
            'category' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'author_name' => $request->author_name,
            'price' => $request->price,
            'isbn' => $request->isbn,
            'category' => $request->category,
            'created_at' => Carbon::now()
        ];

        $id = DB::table('books')->insertGetId($data);
        $dataId = ['id' => $id];

        return response()->json([
            'status' => 200,
            'message' => 'Book was store in database!',
            'data' => array_merge($dataId, $data)
        ], 200);
    }

    public function show($id)
    {
        $response = DB::table('books')->where('id', $id)->get();

        return response()->json([
            'status' => 200,
            'message' => 'OK',
            'data' => $response
        ], 200);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'author_name' => 'required',
            'price' => 'required',
            'isbn' => 'required',
            'category' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'author_name' => $request->author_name,
            'price' => $request->price,
            'isbn' => $request->isbn,
            'category' => $request->category,
            'updated_at' => Carbon::now()
        ];

        DB::table('books')->where('id', $id)->update($data);

        return response()->json([
            'status' => 200,
            'message' => 'Book was update!',
            'data' => $data
        ], 200);
    }

    public function destroy($id)
    {
        $response = DB::table('books')->where('id', $id)->get();
        DB::table('books')->where('id', $id)->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Book was delete from database!',
            'data' => $response
        ], 200);
    }
}
