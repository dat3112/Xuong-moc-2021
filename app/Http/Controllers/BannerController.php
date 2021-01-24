<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Banner::latest()->paginate(10);
        $data->links();
        return view('admin.banner.index',['dat'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Banner::all();
        return view('admin.Banner.create',['dat'=>$data]);
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
            $banner = new Banner();
            $banner->title = $request->input('title');
            $banner->slug = Str::slug($request->input('title'));

            if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

                // get file
                $file = $request->file('image');
                //get ten
                $filename = time().'_'.$file->getClientOriginalName();
                // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                //duong dan upload
                $path_upload = 'upload/banner/';
                //upload file
                $request->file('image')->move($path_upload,$filename);

                $banner->image = $path_upload.$filename;
            }

            $banner->page_image = $request->input('page_image');
            $banner->url = $request->input('url');
            $banner->target = $request->input('target');
            $banner->position = $request->input('position');


            $is_active = 0;
            if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
                $is_active = $request->input('is_active');
            }
            $banner->is_active = $is_active;


            $banner->save();

            return redirect()->route('banner.index');
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
        $banner = Banner::findorFail($id);   //lấy dữ liệu từ 1 id
        return view('admin.Banner.edit',['dat'=>$banner]);
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
