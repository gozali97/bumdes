<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\CategoryProgram;
use App\Models\Program;
use App\Models\Training;
use App\Models\Testimonial;
use App\Models\Newslatter;
use App\Models\Mentorship\Mentorship;
use App\Models\Mentorship\Alumnae;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->get();
        $categoryPrograms = CategoryProgram::all();
        $response = Http::get('https://blog.bumdes.id/wp-json/wp/v2/posts');
        $articles = json_decode($response, true);
        $newslatters = Newslatter::latest()->take(1)->get();
        return view('homepage.index')->with(['banners' => $banners, 'articles' => $articles, 'categoryPrograms' => $categoryPrograms, 'newslatters' => $newslatters]);
    }
    
    public function training()
    {
        $trainings = Training::orderBy('id', 'asc')->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        $programs    = Program::all();

        return view('frontend.detail-program.pelatihan-bumdes', [
            'trainings' => $trainings,
            'testimonials' => $testimonials,
            'programs' => $programs
        ]);
    }
    
    public function mentorship()
    {
        $mentorships = Mentorship::all();
        $programs    = Program::all();
        $alumnaes = Alumnae::orderBy('id', 'desc')->get();
        return view('frontend.detail-program.pendampingan-bumdes', [
            'mentorships' => $mentorships,
            'programs'    => $programs,
            'alumnaes'    => $alumnaes
        ]);
        
    }
    
    public function service()
    {
        
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
        //
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
