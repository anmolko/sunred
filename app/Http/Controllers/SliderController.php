<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $sliders = Slider::all();
        return view('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'heading'           => $request->input('heading'),
            'subheading'        => $request->input('subheading'),
            'button'            => $request->input('button'),
            'link'              => $request->input('link'),
            'status'            => $request->input('status'),
            'created_by'        => Auth::user()->id,
        ];

        if(!empty($request->file('image'))){
            $image        = $request->file('image');
            $name         = uniqid().'_'.$image->getClientOriginalName();
            $thumb        = 'thumb_'.$name;
            $path         = base_path().'/public/images/sliders/';
            $thumb_path   = base_path().'/public/images/sliders/thumb/';
            $moved        = Image::make($image->getRealPath())->fit(1920, 1080)->orientate()->save($path.$name);
            $thumb        = Image::make($image->getRealPath())->resize(100, 100)->orientate()->save($thumb_path.$thumb);
            if ($moved && $thumb){
                $data['image']= $name;
            }
        }

        $slider = Slider::create($data);
        if($slider){
            Session::flash('success','Slider Created Successfully');
        }
        else{
            Session::flash('error','Something went wrong. Slider cannot be created');
        }
        return redirect()->back();
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
        $edit   = Slider::find($id);
        return response()->json($edit);
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
        $slider                   =  Slider::find($id);
        $slider->heading          =  $request->input('heading');
        $slider->subheading       =  $request->input('subheading');
        $slider->button           =  $request->input('button');
        $slider->link             =  $request->input('link');
        $slider->status           =  $request->input('status');
        $oldimage                 =  $slider->image;
        $thumbimage               = 'thumb_'.$slider->image;

        if (!empty($request->file('image'))){
            $image               =  $request->file('image');
            $name1               = uniqid().'_'.$image->getClientOriginalName();
            $thumb               = 'thumb_'.$name1;
            $path                = base_path().'/public/images/sliders/';
            $thumb_path          = base_path().'/public/images/sliders/thumb/';
            $moved               = Image::make($image->getRealPath())->resize(1920, 1080)->orientate()->save($path.$name1);
            $thumb               = Image::make($image->getRealPath())->resize(100, 100)->orientate()->save($thumb_path.$thumb);
            if ($moved && $thumb){
                $slider->image = $name1;
                if (!empty($oldimage) && file_exists(public_path().'/images/sliders/'.$oldimage)){
                    @unlink(public_path().'/images/sliders/'.$oldimage);
                }
                if (!empty($thumbimage) && file_exists(public_path().'/images/sliders/thumb/'.$thumbimage)){
                    @unlink(public_path().'/images/sliders/thumb/'.$thumbimage);
                }
            }
        }
        $status = $slider->update();
        if($status){
            Session::flash('success','Slider was updated Successfully');
        }
        else{
            Session::flash('error','Something Went Wrong. Slider could not be Updated');
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteslider       = Slider::find($id);
        $rid                = $deleteslider->id;
        $image              = $deleteslider->image;
        $thumbimage         = "thumb_".$deleteslider->image;
        if (!empty($image) && file_exists(public_path().'/images/sliders/'.$image)){
            @unlink(public_path().'/images/sliders/'.$image);
        }
        if (!empty($thumbimage) && file_exists(public_path().'/images/sliders/thumb/'.$thumbimage)){
            @unlink(public_path().'/images/sliders/thumb/'.$thumbimage);
        }
        $remove          = $deleteslider->delete();
        if($remove){
            $status ='success';
            return response()->json(['status'=>$status,'message'=>'Slider has been removed successfully!']);
        } else{
            $status ='error';
            return response()->json(['status'=>$status,'message'=>'Slider could not be removed. Try Again later !']);
        }
    }

    public function updateStatus(Request $request, $id){
        $slider          = Slider::find($id);
        $slider->status  = $request->status;
        $status          = $slider->update();
        if($status){
            $confirmed = "yes";
        }
        else{
            $confirmed = "no";
        }
        return response()->json($confirmed);
    }
}
