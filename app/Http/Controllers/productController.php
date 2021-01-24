<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\product;
use App\Product_images;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=product::latest()->paginate(10);
        $data->links();
        return view('admin.product.index',['dat'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = product::all();
        $category= category::all();
        $brand = brand::all();
        return view('admin.product.create',['dat'=>$data, 'category' =>$category,  'brand'=>$brand]);
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
            $product = new product();
            $product->name = $request->input('name');
            $product->slug = Str::slug($request->input('name'));


            if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

                // get file
                $file = $request->file('image');
                //get ten
                $filename = time().'_'.$file->getClientOriginalName();
                // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                //duong dan upload
                $path_upload = 'upload/product/';
                //upload file
                $request->file('image')->move($path_upload,$filename);

                $product->image = $path_upload.$filename;
            }



            $product->stock = $request->input('stock');
            $product->price = $request->input('price');
            $product->sale = $request->input('sale');
            $product->position = $request->input('position');

            $is_hot = 0;
            if ($request->has('is_hot')) {   //ktr is_hot có ton tai ko?
                $is_hot = $request->input('is_hot');
            }
            $product->is_hot = $is_hot;

            $product->category_id = $request->input('category_id');
            $product->brand_id = $request->input('brand_id');
            $product->description = $request->input('description');

            $is_active = 0;
            if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
                $is_active = $request->input('is_active');
            }
            $product->is_active = $is_active;


            $product->save();

            if($request->hasFile('images')) {   //kiem tra xem file imagecos được chọn hay ko
                foreach ($request->images as $singleImage) {
                    $productImages = new Product_images();
                    $productImages->position = 1;
                    $productImages->is_active = 1;

                    // get file
                    $file = $singleImage;
                    //get ten
                    $filename = time() . '_' . $file->getClientOriginalName();
                    // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
                    //duong dan upload
                    $path_upload = 'upload/productImages/';
                    //upload file
                    $file->move($path_upload, $filename);
                    $productImages->image = $path_upload . $filename;
                    $productImages->product_id = $product->id;
                    $productImages->save();
                }
            }

            return redirect()->route('product.index');
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

        $category= category::all();
        $vendor = vendor::all();
        $brand = brand::all();
        $product = product::findorFail($id);
        return view('admin.product.show', ['dat' =>$product, 'category' =>$category, 'vendor' =>$vendor, 'brand'=>$brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= category::all();
        $brand = brand::all();
        $data = product::all();
        $product = product::findorFail($id);   //lấy dữ liệu từ 1 id
        return view('admin.product.edit',['dat'=>$product,
            'product' =>$data,
            'brand'=>$brand,
            'category'=>$category]);

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
        $product = product::findorFail($id);
        $product->name = $request->input('name');
        $product->slug = Str::slug($request->input('name'));

        if($request->hasFile('new_image')) {   //kiem tra xem file imagecos được chọn hay ko
            // xoa file cu
            @unlink(public_path($product->image));
            // get file moi
            $file = $request->file('new_image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/product/';
            //upload file
            $request->file('new_image')->move($path_upload,$filename);

            $product->image = $path_upload.$filename;
        }

        $product->stock = $request->input('stock');
        $product->price = $request->input('stock');
        $product->sale = $request->input('sale');


        $product->position = $request->input('position');


        $is_hot = 0;
        if ($request->has('is_hot')) {   //ktr is_hot có ton tai ko?
            $is_hot = $request->input('is_hot');
        }
        $product->is_hot = $is_hot;

        $product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');
        $product->description = $request->input('description');

        $is_active = 0;
        if ($request->has('is_active')) {   //ktr is_active có ton tai ko?
            $is_active = $request->input('is_active');
        }
        $product->is_active = $is_active;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = product::destroy($id);
        return  redirect()->route('product.index')->with('msg','Du lieu xoa thanh cong');
    }

    public function search(Request $request){

        $keyword = $request -> input('tu-khoa');
        $slug = str::slug($keyword);
        $product = product::where([
            ['name', 'like', '%' . $keyword . '%'],
            ['is_active','=',1]
        ])->orWhere([
            ['slug', 'like', '%' . $slug. '%'],
            ['is_active','=',1]
        ])->paginate(5);

        return view('admin.product.search',[
            'product' => $product,
            'keyword' => $keyword ? $keyword : ''
        ]);

    }
}
