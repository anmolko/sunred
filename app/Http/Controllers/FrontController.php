<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Faq;
use App\Models\Setting;
use App\Models\Service;
use App\Mail\ContactDetail;

use App\Models\Testimonial;
use App\Models\User;
use App\Models\SectionElement;
use App\Models\Page;
use App\Models\PageSection;
use App\Notifications\NewCareerNotification;
use App\Notifications\NewServiceNotification;
use App\Notifications\OtherNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class FrontController extends Controller
{
    protected $contact = null;
    protected $setting = null;
    protected $blog = null;
    protected $bcategory = null;
    protected $faq = null;
    protected $service = null;
    protected $pojectPlan = null;
    protected $customer_package = null;
    protected $career = null;
    protected $apply_job = null;
    protected $our_work = null;
    protected $request_quote = null;
    protected $testimonial = null;
    protected $home_page = null;
    protected $page = null;
    protected $pagesection = null;


    public function __construct(PageSection $pagesection,Page $page,Testimonial $testimonial,Service $service,Setting $setting,BlogCategory $bcategory,Blog $blog)
    {
        $this->setting = $setting;
        $this->bcategory = $bcategory;
        $this->blog = $blog;
        $this->service = $service;
        $this->testimonial = $testimonial;
        $this->page = $page;
        $this->pagesection = $pagesection;
    }



    public function index()
    {
        $testimonials = $this->testimonial->take(7)->get(); 
        return view('welcome',compact('testimonials'));
    }


    public function privacy()
    {
        $page_detail = $this->page->with('sections')->where('slug','privacy-policy')->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sorted_sections        = array();
        $header_descp_elements = "";


        foreach ($page_section as $section){
            $sorted_sections[$section->id] = $section->section_slug;
            if ($section->section_slug == 'simple_header_and_description'){
                $header_descp_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
         
        }
        return view('frontend.pages.privacy',compact('header_descp_elements'));
    }

    public function terms()
    {
        
        $page_detail = $this->page->with('sections')->where('slug','terms-condition')->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sorted_sections        = array();
        $header_descp_elements = "";


        foreach ($page_section as $section){
            $sorted_sections[$section->id] = $section->section_slug;
            if ($section->section_slug == 'simple_header_and_description'){
                $header_descp_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
         
        }
        return view('frontend.pages.term',compact('header_descp_elements'));
    }


    

    public function faq()
    {
        $page_detail = $this->page->with('sections')->where('slug','faq')->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sorted_sections        = array();
        $accordian2_elements = "";
        $list_2        = "";


        foreach ($page_section as $section){
            $sorted_sections[$section->id] = $section->section_slug;
            if ($section->section_slug == 'accordion_section_2'){
                $list_2 = $section->list_number_2;
                $accordian2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
         
        }
        return view('frontend.pages.faq',compact('list_2','accordian2_elements'));
    }


    public function page($page)
    {
        $page_detail = $this->page->with('sections')->where('slug', $page)->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sections      = array();

        $list_2        = "";
        $list_3        = "";
        $process_num   = "";
        $basic_elements = "";
        $map_descp = "";
        $call1_elements = "";
        $call2_elements = "";
        $bgimage_elements = "";
        $flash_elements = "";
        $header_descp_elements = "";
        $video_descp_elements = "";
        $gallery_elements = "";
        $location_map = "";
        $gallery2_elements = "";
        $contact_info_elements = "";
        $accordian1_elements = "";
        $accordian2_elements = "";
        $slider_list_elements = "";
        $icon_title_elements = "";
        $process_elements = "";
        foreach ($page_section as $section){
            $sections[$section->id] = $section->section_slug;
            if($section->section_slug == 'basic_section'){
                $basic_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            } else if($section->section_slug == 'map_and_description'){
                $map_descp = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'call_to_action_1'){
                $call1_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'background_image_section'){
                $bgimage_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'flash_cards'){
                $flash_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'simple_header_and_description'){
                $header_descp_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'accordion_section_2'){
                $list_2 = $section->list_number_2;
                $accordian2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'gallery_section'){
                $gallery_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'gallery_section_2'){
                $gallery2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'slider_list'){
                $list_3      = $section->list_number_3;
                $slider_list_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }

            else if ($section->section_slug == 'small_box_description'){
                $process_num = $section->list_number_3;
                $process_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
        }

        return view('frontend.pages.dynamic_page',compact( 'page_detail','sections','process_num','process_elements','map_descp','icon_title_elements','location_map','video_descp_elements','list_2','list_3','basic_elements','call1_elements','gallery2_elements','bgimage_elements','call2_elements','flash_elements','gallery_elements','header_descp_elements','accordian1_elements','accordian2_elements','slider_list_elements','contact_info_elements'));

    }

    public function work(){
        $our_works = $this->our_work->get();
        return view('frontend.pages.work',compact('our_works'));
    }


    public function blogs(){
        $bcategories = $this->bcategory->get();
        $allPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->paginate(6);
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        return view('frontend.pages.blogs.index',compact('allPosts','latestPosts','bcategories'));
    }


    public function blogSingle($slug){

        $singleBlog = $this->blog->where('slug', $slug)->first();
        if (!$singleBlog) {
            return abort(404);
        }
        $catid = $singleBlog->blog_category_id;
        $bcategories = $this->bcategory->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        return view('frontend.pages.blogs.single',compact('singleBlog','bcategories','latestPosts'));
    }

    public function service(){
        $allservices = $this->service->get();
        return view('frontend.pages.services.index',compact('allservices'));
    }


     public function career(){
        $allcareers = $this->career->where('status','active')->get();
        return view('frontend.pages.careers.index',compact('allcareers'));
    }


    public function careerStore(Request $request)
    {

        $data = [
            'career_id'        => $request->input('career_id'),
            'name'        => $request->input('name'),
            'email'       => $request->input('email'),
            'phone'       => $request->input('phone'),
            'address'     => $request->input('address'),
            'message'     => $request->input('message'),
        ];
        if(!empty($request->file('attachcv'))){
            $image          = $request->file('attachcv');
            $name           = uniqid().'_'.$request->input('name').'_career_cv_'.$image->getClientOriginalName();
            $career_path    = public_path('/images/career');

            if (!is_dir($career_path)) {
                mkdir($career_path, 0777);
            }
            $path           = base_path().'/public/images/career/';
            $moved          = $image->move($path, $name);

            if ($moved){
                $data['attachcv']=$name;
            }
        }

        $status = $this->apply_job->create($data);

        // $theme_data = Setting::first();
        //     $mail_data = array(
        //         'fullname'        =>$request->input('name'),
        //         'message'        =>$request->input('msg'),
        //         'email'        =>$request->input('email'),
        //         'address'        =>$request->input('address'),
        //         'site_email'        =>ucwords($theme_data->email),
        //         'site_name'        =>ucwords($theme_data->website_name),
        //         'phone'        =>ucwords($theme_data->phone),
        //         'logo'        =>ucwords($theme_data->logo),
        //     );
//             Mail::to($theme_data->email)->send(new ContactDetail($mail_data));

            if($status){
                $confirmed = "success";
                $career    = Career::find($request->input('career_id'));
                foreach (User::where('user_type','admin')->get() as $user){
                    Notification::send($user, new NewCareerNotification($career,$status->id,$status->name));
                }
                return response()->json($confirmed);
            }
            else{
                $confirmed = "error";
                return response()->json($confirmed);
            }



    }

    public function contact()
    {
        return view('frontend.pages.contact');

    }



    
    public function contactStore(Request $request)
    {
        $theme_data = Setting::first();
            $data = array(
                'fullname'        =>$request->input('name'),
                'message'        =>$request->input('message'),
                'email'        =>$request->input('email'),
                'subject'        =>$request->input('subject'),
                'customer_phone'        =>$request->input('phone'),
                'address'        =>ucwords($theme_data->address),
                'site_email'        =>ucwords($theme_data->email),
                'site_name'        =>ucwords($theme_data->website_name),
                'phone'        =>ucwords($theme_data->phone),
                'logo'        =>ucwords($theme_data->logo),
            );
//             Mail::to('surajmzn75@gmail.com')->send(new ContactDetail($data));

            // Mail::to($theme_data->email)->send(new ContactDetail($data));

            Session::flash('success','Thank you for contacting us!');

        return redirect()->back();
    }
    public function careerSingle($slug){

        $singleCareer = $this->career->where('slug', $slug)->first();
        if (!$singleCareer) {
            return abort(404);
        }

        return view('frontend.pages.careers.single',compact('singleCareer'));
    }

    public function package(){
        $allpackages = $this->pojectPlan->get();
        return view('frontend.pages.package',compact('allpackages'));
    }

    public function packageStore(Request $request)
    {
        $data = [
            'project_plan_id'   => $request->input('project_plan_id'),
            'email'             => $request->input('email'),
            'phone'             => $request->input('phone'),
            'full_name'         => $request->input('full_name'),
        ];
        $status = $this->customer_package->create($data);

//         $theme_data = Setting::first();
//             $mail_data = array(
//                 'fullname'        =>$request->input('name'),
//                 'order_name'        =>$request->input('order_name'),
//                 'phone'        =>$request->input('phone'),
//                 'address'        =>ucwords($theme_data->address),
//                 'site_email'        =>ucwords($theme_data->email),
//                 'site_name'        =>ucwords($theme_data->website_name),
//                 'phone'        =>ucwords($theme_data->phone),
//                 'logo'        =>ucwords($theme_data->logo),
//             );
// //             Mail::to($theme_data->email)->send(new PackageDetail($mail_data));

            if($status){
                Session::flash('success','Thank you for ordering package. We will get back to you soon');
                $confirmed = "success";
                $plan      = ProjectPlan::find($request->input('project_plan_id'));
                foreach (User::where('user_type','admin')->get() as $user){
                    Notification::send($user, new OtherNotification('package',$plan->name,$plan->id,$status->full_name));
                }
                return redirect()->back();
            }
            else{
                Session::flash('error','Failed to order package');
                $confirmed = "error";
                return redirect()->back();
            }



    }

    public function serviceSingle($slug){

        $singleService = $this->service->where('slug', $slug)->first();
        if (!$singleService) {
            return abort(404);
        }
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        $latestServices = $this->service->orderBy('created_at', 'DESC')->take(5)->get();

        return view('frontend.pages.services.single',compact('singleService','latestPosts','latestServices'));
    }

    public function blogCategories($slug){
        $bcategory = $this->bcategory->where('slug', $slug)->first();
        $catid = $bcategory->id;
        $cat_name = $bcategory->name;
        $allPosts = $this->blog->where('blog_category_id', $catid)->where('status','publish')->orderBy('created_at', 'DESC')->paginate(6);
        $bcategories = $this->bcategory->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();
        return view('frontend.pages.blogs.category',compact('allPosts','cat_name','latestPosts','bcategories'));
    }



    public function searchBlog(Request $request)
    {
        $query = $request->s;
        $allPosts = $this->blog->where('title', 'LIKE', '%' . $query . '%')->where('status','publish')->orderBy('title', 'asc')->paginate(6);
        $bcategories = $this->bcategory->get();
        $latestPosts = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->take(3)->get();

        return view('frontend.pages.blogs.search',compact('allPosts','query','latestPosts','bcategories'));
    }





}
