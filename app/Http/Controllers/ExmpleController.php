<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exmple;
use App\Product;
class ExmpleController extends Controller
{
    public function index(Request $request)
        {

         $exmple=Exmple::with('product')->orderBy('id')->get();
         

        return view('backend.exmple.index', compact('exmple'));
    }

    public function create()
    {
        return view('backend.exmple.create');
    }

    public function store(Request $request)
    {

        $data=array(
            'name' =>$request->name,
            'title' =>$request->title,
             'date' =>$request->date,
            'description' =>$request->description,
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),

        );
$id=Exmple::insertGetId($data);
         $product=$request->pname;
         $price=$request->price;


         for($i=0;$i<count($product);$i++)
         {
 $pro=array(
            'name' =>$product[$i],
            'price' =>$price[$i],
             'exmple_id' =>$id,
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' =>date('Y-m-d H:i:s'),

        );

 Product::insert($pro);
         }



      
        return redirect('/exmple/create');
    }

    public function edit($id)
    {

     $data=Exmple::find($id);

        return view('backend.exmple.edit', compact('data'));

}

public function show($id)
{
    $data=Exmple::where('id','=',$id)->get();

        return view('backend.exmple.edit', compact('data'));
}

public function view($id)
{
    $exm=Exmple::where('id', '=', $id)->get();
    $product=Product::where('exmple_id', '=', $id)->get();
    return view('backend.exmple.view', compact('exm','product'));
}


public function update(Request $request)
    {

        $data=array(
            'name' =>$request->name,
            'title' =>$request->title,
             'date' =>$request->date,
            'description' =>$request->description,

        );
 

    Exmple::where('id', '=',$request->id)->update($data);
   Product::where('exmple_id','=',$request->id)->delete();
    for($i=0;$i<count($request->pname);$i++)
    {
        $pro=array(
            'name' =>$request->pname[$i],
            'price' =>$request->price[$i],
             'exmple_id' =>$request->id,

        );

        Product::insert($pro);
    }

        return redirect('/exmple');

    }

     public function delete($id)
    {
        Exmple::where('id','=',$id)->delete();

        return redirect('/exmple');

    }


    public function array()
    {
        return view('backend.exmple.array');
    }



}
