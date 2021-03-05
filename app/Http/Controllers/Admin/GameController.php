<?php

namespace App\Http\Controllers\Admin;

use App\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $all = Game::latest('id')->where('game_status', 1)->cursor();
        return view('admin.game.index', compact('all'));
    }


    public function create() {
        return view('admin.game.create');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'game_title' => 'required',            
        ], [
            'game_title.required' => 'please enter game title',
        ]);

        $data = $request->all();

        $data['game_photo1'] = null;
        $data['game_photo2'] = null;
        $data['game_launchdate'] = Carbon::parse($request->game_launchdate)->format('Y-m-d');

        if($request->hasFile('game_photo1'))  {
            $data['game_photo1'] = $request->game_photo1->store('');
        }
        if($request->hasFile('game_photo2'))  {
            $data['game_photo2'] = $request->game_photo2->store('');
        }


        $gameCreate = Game::create($data);


        if($gameCreate) {
            Session::flash('success', 'Successfully Created!');
            return redirect()->route('admin.games.index');            
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.games.index');            
        }
    }

    public function show(Game $game)
    {
        //
    }


    public function edit(Game $game) {
        return view('admin.game.edit', compact('game'));
    }


    public function update(Request $request, Game $game) {
        $this->validate($request, [
            'game_title' => 'required',            
        ], [
            'game_title.required' => 'please enter game title',
        ]);

        // return $request->all();
        if($request->has('game_title') && $game->game_title != $request->game_title) {
            $game->game_title = $request->game_title;
        }

        if($request->has('game_subtitle') && $game->game_subtitle != $request->game_subtitle) {
            $game->game_subtitle = $request->game_subtitle;
        }

        if($request->has('game_company') && $game->game_company != $request->game_company) {
            $game->game_company = $request->game_company;
        }

        if($request->has('game_button') && $game->game_button != $request->game_button) {
            $game->game_button = $request->game_button;
        }

        if($request->has('game_url') && $game->game_url != $request->game_url) {
            $game->game_url = $request->game_url;
        }

        if($request->has('game_description1') && $game->game_description1 != $request->game_description1) {
            $game->game_description1 = $request->game_description1;
        }

        if($request->has('game_description2') && $game->game_description2 != $request->game_description2) {
            $game->game_description2 = $request->game_description2;
        }

        if($request->has('game_description3') && $game->game_description3 != $request->game_description3) {
            $game->game_description3 = $request->game_description3;
        }

        if($request->has('game_description4') && $game->game_description4 != $request->game_description4) {
            $game->game_description4 = $request->game_description4;
        }

        if($request->has('game_note1') && $game->game_note1 != $request->game_note1) {
            $game->game_note1 = $request->game_note1;
        }

        if($request->has('game_note2') && $game->game_note2 != $request->game_note2) {
            $game->game_note2 = $request->game_note2;
        }

        if($request->has('game_note3') && $game->game_note3 != $request->game_note3) {
            $game->game_note3 = $request->game_note3;
        }

        if($request->has('game_note4') && $game->game_note4 != $request->game_note4) {
            $game->game_note4 = $request->game_note4;
        }

        if($request->has('game_feature_title1') && $game->game_feature_title1 != $request->game_feature_title1) {
            $game->game_feature_title1 = $request->game_feature_title1;
        }

        if($request->has('game_feature_title2') && $game->game_feature_title2 != $request->game_feature_title2) {
            $game->game_feature_title2 = $request->game_feature_title2;
        }

        if($request->has('game_feature_title3') && $game->game_feature_title3 != $request->game_feature_title3) {
            $game->game_feature_title3 = $request->game_feature_title3;
        }

        if($request->has('game_feature_title4') && $game->game_feature_title4 != $request->game_feature_title4) {
            $game->game_feature_title4 = $request->game_feature_title4;
        }

        if($request->has('game_feature_subtitle1') && $game->game_feature_subtitle1 != $request->game_feature_subtitle1) {
            $game->game_feature_subtitle1 = $request->game_feature_subtitle1;
        }

        if($request->has('game_feature_subtitle2') && $game->game_feature_subtitle2 != $request->game_feature_subtitle2) {
            $game->game_feature_subtitle2 = $request->game_feature_subtitle2;
        }

        if($request->has('game_feature_subtitle3') && $game->game_feature_subtitle3 != $request->game_feature_subtitle3) {
            $game->game_feature_subtitle3 = $request->game_feature_subtitle3;
        }

        if($request->has('game_feature_subtitle4') && $game->game_feature_subtitle4 != $request->game_feature_subtitle4) {
            $game->game_feature_subtitle4 = $request->game_feature_subtitle4;
        }

        // if($request->has('game_launchdate') && $game->game_launchdate != $request->game_launchdate) {
        //     // $game->game_launchdate = $request->game_launchdate;
        //     $game->game_launchdate = Carbon::parse($request->game_launchdate)->format('Y-m-d');
        // }

        if($request->game_launchdate == null) {
            $game->game_launchdate = $game->game_launchdate;
        }else {
            $game->game_launchdate = Carbon::parse($request->game_launchdate)->format('Y-m-d');
        }


        if($request->hasFile('game_photo1')) {
            if(Storage::exists($game->game_photo1)) {
                Storage::delete($game->game_photo1);
            }

            $game->game_photo1 = $request->game_photo1->store('');
        }

        if($request->hasFile('game_photo2')) {
            if(Storage::exists($game->game_photo2)) {
                Storage::delete($game->game_photo2);
            }

            $game->game_photo2 = $request->game_photo2->store('');
        }

        $gameSave = $game->save();


        if($gameSave) {
            Session::flash('success', 'Successfully Updated!');
            return redirect()->route('admin.games.index');
        }else {
            Session::flash('success', 'An Error Occurred!');
            return redirect()->route('admin.games.index');
        }
    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Game::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.games.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.games.index');
        }
    }
}
