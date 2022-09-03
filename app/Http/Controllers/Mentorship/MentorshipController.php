<?php

namespace App\Http\Controllers\Mentorship;

use App\Http\Controllers\Controller;
use App\Models\Mentorship\Document;
use App\Models\Mentorship\Mentorship;
use App\Models\Mentorship\MentorshipMethod;
use App\Models\Mentorship\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class MentorshipController extends Controller
{
   public function index()
   {
      $mentorships = Mentorship::with(['documents','mentorshipMethods','teams'])->get();
      $documents   = Document::get();
      $mentorshipMethods     =MentorshipMethod::get();
      $teams      = Team::get();
      return view('admin.mentorship.index', [
         'mentorships' =>  $mentorships,
         'documents'   =>  $documents,
         'mentorshipMethods' => $mentorshipMethods,
         'teams'        => $teams
      ]);
   }

   public function create()
   {
      $documents = Document::all();
      $teams = Team::all();
      $mentorshipMethods   = MentorshipMethod::all();
      return view('admin.mentorship.create', [
         'documents' => $documents,
         'teams'     => $teams,
         'mentorshipMethods'   => $mentorshipMethods
      ]);
   }

   public function store(Request $request)
   {
      $input = $request->validate([
         'title'         =>  'required|max:150|min:5',
         'participant'   =>  'required',
         'description'   =>  'required',
         // 'goal'   =>  'required',
         'document'      => 'required',
         'method'      => 'required',
         'team'      => 'required',
         'video_link'   =>  'required',
         'featured'   =>  'required',
         'image'         =>  'required|mimes:jpeg,png,jpg,gif,svg',
         'schedule'         =>  'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

    
      
       if ($image = $request->file('image')) {
            $destinationPath = 'public/images/mentorship/image';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
         if ($image = $request->file('schedule')) {
            $destinationPath = 'public/images/mentorship/schedule';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['schedule'] = "$profileImage";
        }
        
      $mentorship = Mentorship::create([
         'title'         =>  $request->title,
         'slug'          => Str::slug($request->title),
         'participant'   => $request->participant,
         'description'   =>  $request->description,
         'goal'   =>  $request->goal,
         // 'document'      => 'required',
         'video_link'   =>  $request->video_link,
         'featured'   =>  $request->featured,
          'image'         => $input['image'],
          'schedule'         => $input['schedule'],
      ]);
      

      $mentorship->documents()->attach($input['document'], ['mentorship_id' => $mentorship->id]);
      $mentorship->mentorshipMethods()->attach($input['method'], ['mentorship_id' => $mentorship->id]);
      $mentorship->teams()->attach($input['team'], ['mentorship_id' => $mentorship->id]);

      $mentorship->save();
      return redirect()->route('admin.mentorship')->with('success', 'You have successfully created a mentorship.');
   }

   public function show(Request $request)
   {
      $list_mentorship = Mentorship::all();
      $mentorship      = Mentorship::with('documents', 'alumnae')->where('slug', $request->slug)->first();
      $documents    = Document::orderBy('slug')->get();
      $data           = array(
         'list_mentorship' => $list_mentorship,
         'mentorship' => $mentorship,
         'documents' => $documents,
      );

      return view('admin.mentorship.show')->with($data);
   }

   public function edit(Request $request)
   {
      $mentorship = Mentorship::find($request->id);
      $documents   = Document::all();
      $mentorshipMethods = MentorshipMethod::all();
      $teams = Team::all();
      return view('admin.mentorship.edit', [
         'mentorship' => $mentorship,
         'documents' => $documents,
         'mentorshipMethods' => $mentorshipMethods,
         'teams' => $teams
      ]);
   }

   public function update(Request $request, $id)
   {
      $request->validate([
         'title'         =>  'required|max:150|min:5',
         'participant'   =>  'required',
         'description'   =>  'required',
         'goal'   =>  'required',
         'video_link'   =>  'required',
         'featured'   =>  'required',
      ]);

      $mentorship = Mentorship::find($id);
      if ($mentorship) {
         $mentorship->title = $request->title;
         $mentorship->slug   = Str::slug($request->title);
         $mentorship->participant = $request->participant;
         $mentorship->description = $request->description;
         $mentorship->goal = $request->goal;
         $mentorship->video_link = $request->video_link;
         $mentorship->featured = $request->featured;
          if ($request->hasFile('image')) {
                $this->deletMentorshipImage($mentorship);
                 if ($image = $request->file('image')) {
                    $destinationPath = 'public/images/mentorship/image';
                    $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); 
                    $image->move($destinationPath, $profileImage);
                    $mentorship['image'] = "$profileImage";
                }
            }
          if ($request->hasFile('schedule')) {
                $this->deletMentorshipSchedule($mentorship);
                 if ($image = $request->file('schedule')) {
                    $destinationPath = 'public/images/mentorship/schedule/';
                    $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); 
                    $image->move($destinationPath, $profileImage);
                    $mentorship['schedule'] = "$profileImage";
                }
            }

         $mentorship->documents()->sync($request->document);
         $mentorship->mentorshipMethods()->sync($request->method);
         $mentorship->teams()->sync($request->team);
         $mentorship->save();
         return redirect()->route('admin.mentorship')->with('success', 'You have successfully update a mentorship.');
      }
      return back()->withError('Invalid mentorship.');
   }

   public function destroy(Request $request)
   {
      $mentorship = Mentorship::find($request->id);
      if ($mentorship) {
         $this->deletMentorshipImage($mentorship);
         $this->deletMentorshipSchedule($mentorship);
         $mentorship->delete();
         return redirect()->route('admin.mentorship')->with('success', 'You have successfully delete a mentorship.');
      }
      return back()->withError('Invalid mentorship.');
   }

   private function deletMentorshipImage($mentorship)
   {
  
    if( $mentorship->image ){
            $imgDestroy = 'public/images/mentorship/image/'.$mentorship->image;
            // if ( file_exists($imgDestroy) ) unlink($imgDestroy);
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
   }

   private function deletMentorshipSchedule($mentorship)
   {
       if( $mentorship->schedule ){
            $imgDestroy = 'public/images/mentorship/schedule/'.$mentorship->schedule;
            // if ( file_exists($imgDestroy) ) unlink($imgDestroy);
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
   }


}
