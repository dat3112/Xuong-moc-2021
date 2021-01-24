<?php

namespace App\Http\Controllers;
use App\category;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= category::latest()->paginate(5);
        $data->links();
        return view('admin.Category.index',['dat'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::all();
        return view('admin.category.create',['dat'=>$data]);
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
        $category = new category();
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));

        if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

            // get file
            $file = $request->file('image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/category/';
            //upload file
            $request->file('image')->move($path_upload,$filename);

            $category->image = $path_upload.$filename;
        }
        $is_active = 0;
        if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
            $is_active = $request->input('is_active');
        }
        $category->is_active = $is_active;

        $category->position = $request->input('position');

        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = category::findorFail($id);
        return view('admin.category.show', ['data' =>$category]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = category::all();
        $category = category::findorFail($id);   //lấy dữ liệu từ 1 id
        return view('admin.category.edit',[
            'dat'=>$category,
            'category'=>$data
        ]);
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
        $category = category::findorFail($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));

        if($request->hasFile('new_image')) {   //kiem tra xem file imagecos được chọn hay ko
            // xoa file cu
            @unlink(public_path($category->image));
            // get file moi
            $file = $request->file('new_image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/category/';
            //upload file
            $request->file('new_image')->move($path_upload,$filename);

            $category->image = $path_upload.$filename;
        }
        $is_active = 0;
        if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
            $is_active = $request->input('is_active');
        }
        $category->is_active = $is_active;

        $position=0;
        if ($request->has('position')){
            $position = $request->input('position');
        }
        $category->position = $position;

        $category->save();

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public  function destroy($id){
        $deleteData = Photo::destroy($id);
        return  redirect()->route('category.index')->with('msg','Du lieu xoa thanh cong');
    }

    public function search(Request $request){

        $keyword = $request -> input('tu-khoa');
        $slug = str::slug($keyword);
        $category = category::where([
            ['name', 'like', '%' . $keyword . '%'],
            ['is_active','=',1]
        ])->orWhere([
            ['slug', 'like', '%' . $slug. '%'],
            ['is_active','=',1]
        ])->paginate(5);

        return view('admin.category.search',[
            'category' => $category,
            'keyword' => $keyword ? $keyword : ''
        ]);

    }
}
