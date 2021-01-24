<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Partner::latest()->paginate(10);
        $data->links();
        return view('admin.Partner.index',['dat'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Partner::all();
        return view('admin.partner.create',['dat'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // khoi tao model
        $partner = new Partner();
        $partner->name = $request->input('name');
        $partner->slug = Str::slug($request->input('name'));

        if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

            // get file
            $file = $request->file('image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/partner/';
            //upload file
            $request->file('image')->move($path_upload,$filename);

            $partner->image = $path_upload.$filename;
        }
        $is_active = 0;
        if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
            $is_active = $request->input('is_active');
        }

        $partner->phone = $request->input('phone');
        $partner->address = $request->input('address');
        $partner->description = $request->input('description');
        $partner->email = $request->input('email');
        $partner->website = $request->input('website');


        $partner->is_active = $is_active;

        $partner->position = $request->input('position');

        $partner->save();

        return redirect()->route('partner.index');
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
