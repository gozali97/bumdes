<?php

namespace App\Http\Controllers\Mentorship;

use App\Http\Controllers\Controller;
use App\Models\Mentorship\Team;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::orderBy('id', 'asc')->get();
        return view('admin.mentorship.team.index')->with('teams', $teams);
    }

    public function create()
    {
        return view('admin.mentorship.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         =>  'required',
            'institution'             => 'required',
            'description'          =>  'required',
            'image'                =>  'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // $team = new team;
        // $team->name = $request->name;
        // $team->institution = $request->institution;
        // $team->description = $request->description;
        // $team->image = $this->saveteamImage($team, $request);

        // $team->save();
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'public/images/mentorship/team';
            $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Team::create($input);
        return redirect()->route('admin.mentorship.team')->with('success','kamu berhasil menyimpan data team.');
    }

    public function edit(Request $request)
    {
        $team = team::find($request->id);
        return view('admin.mentorship.team.edit')->with('team', $team);

    }

    public function update(Request $request)
    {
        $request->validate([
            'name'         =>  'required|min:5',
            'institution'             => 'required',
            'description'          =>  'required',
            // 'image'                =>  'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $team = Team::find($request->id);
         if ($team) {
            $team->name = $request->name;
            $team->institution = $request->institution;
            $team->description = $request->description;
            if ($request->hasFile('image')) {
                $this->deletTeamImage($team);
                 if ($image = $request->file('image')) {
                    $destinationPath = 'public/images/mentorship/team';
                    $profileImage = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension(); 
                    $image->move($destinationPath, $profileImage);
                    $team['image'] = "$profileImage";
                }
            }
            $team->save();
            return redirect()->route('admin.mentorship.team')->with('success','kamu berhasil merubah data pemateri.');  
         }
         return back()->withError('Invalid team.');
    }

    public function destroy(Request $request)
    {
        $team = team::find($request->id);
        if ($team) {
            $this->deletTeamImage($team);
            $team->delete();
            return redirect()->route('admin.mentorship.team')->with('success','You have successfully delete a team.');  
        }
        return back()->withError('Invalid team.');
    }

    private function deletTeamImage($team){
        if( $team->image ){
            $imgDestroy = 'public/images/mentorship/team/'.$team->image;
            if (File::exists($imgDestroy)){
                File::delete($imgDestroy);
            }
        }
    }

    // private function saveteamImage($team, $request){
    //     $image = $request->file('image');
    //     $img = md5( $image->getClientOriginalName(). microtime() ).'.'.$image->getClientOriginalExtension();
    //     $location = public_path('images/mentorship/team/'.$img);
    //     // Image::make($image)->resize(360, 250)->save($location_thumb);
    //     Image::make($image)->save($location);
    //     return $img;
    // }
}
