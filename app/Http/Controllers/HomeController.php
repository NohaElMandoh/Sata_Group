<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Event;
use App\Models\Letter;
use App\Models\Objective;
use App\Models\Project;
use App\Models\Section;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $about_section = Section::where('position', 'home-about')->first();
        $home_intro_section = Section::where('position', 'home-intro')->first();
        $home_screens_section = Section::where('position', 'home-screens')->first();
        $home_letters_section = Section::where('position', 'home-letters')->first();
        $home_services_section = Section::where('position', 'home-services')->first();

        $projects = Project::all();
        $services = Service::all();
        $letters = Letter::orderBy('order', 'desc')->get();

        return view('front.home', compact('sliders', 'about_section', 'home_intro_section', 'home_screens_section', 'home_letters_section','home_services_section', 'projects', 'services', 'letters'));
    }
    public function letter(Request $request)
    {
        $id = $request->id;

        $letter = Letter::find($id);

        return view('front.letter', compact('letter'));
    }
    public function about_us(Request $request)
    {

        $about_page = Section::where('position', 'about_page')->first();

        $about_page_objectives = Objective::where('status',1)->get();

        return view('front.about_us', compact('about_page', 'about_page_objectives'));
    }
    public function project(Request $request)
    {
        $id = $request->id;

        $project = Project::find($id);

        return view('front.project', compact('project'));
    }
    public function contact_us(Request $request)
    {
        
        $contact_us_page = Section::where('position', 'contact_us_page')->first();

        return view('front.contact_us',compact('contact_us_page'));
    }

    public function events(Request $request)
    {
        $events = Event::all();

        $events_page = Section::where('position', 'events-page')->first();

        return view('front.events', compact('events','events_page'));
    }
    public function event(Request $request)
    {

        $id = $request->id;

        $event = Event::find($id);

        return view('front.event', compact('event'));
    }
    public function contactUs_post(Request $request)
    {

        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|max:255',
          

        ],[
            'f_name.required'=>__('messages.f_name_required'),
            'email.required'=> __('messages.email_required'),
           

        ]);
      

        $input = $request->all();

        $saved = Contact::create($input);

        if ($saved) {

            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
    
    public function privacy()
    {

        
        $privacy_page = Section::where('position', 'privacy-page')->first();

        return view('front.privacy',compact('privacy_page'));
    }
}
