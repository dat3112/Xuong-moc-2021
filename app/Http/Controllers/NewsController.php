<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=News::latest()->paginate(10);
        $data->links();
        return view('admin.news.index',['dat'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = News::all();
        return view('admin.News.create',['dat'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            // khoi tao model
            $news = new News();
            $news->title = $request->input('title');
            $news->slug = Str::slug($request->input('title'));

            if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

                // get file
                $file = $request->file('image');
                //get ten
                $filename = time().'_'.$file->getClientOriginalName();
                // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                //duong dan upload
                $path_upload = 'upload/news/';
                //upload file
                $request->file('image')->move($path_upload,$filename);

                $news->image = $path_upload.$filename;
            }

            $news->summary = $request->input('summary');
            $news->description = $request->input('description');
            $news->position = $request->input('position');

            $hot = 0;
            if ($request->has('hot')) {
                $hot = $request->input('hot');
            }
            $news->hot = $hot;

            $is_active = 0;
            if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
                $is_active = $request->input('is_active');
            }
            $news->is_active = $is_active;


            $news->save();

            return redirect()->route('news.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
