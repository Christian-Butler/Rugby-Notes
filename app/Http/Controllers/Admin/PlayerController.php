<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $players = Player::where('user_id', Auth::id())->latest('updated_at')->paginate(10);


       $user = Auth::user();
       $user->authorizeRoles('admin');

       $players = Player::paginate(10);

       return view('admin.books.index')->width('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|max:100',
            'player_number' =>'required'
        ]);

        $img = $request->file('img');
        $extension = $img->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '_' . $request->input('title'). '.'. $extension;

        $path = $img->storeAs('public/images', $filename);

        Player::create([
            // Ensure you have the use statement for
            
           'user_id' => Auth::id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'player_number' => $request->player_number,
            'img' => $filename
            
        ]);

        

        return to_route('players.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = Player::where('id', $id)->firstOrFail();
        $user = Auth::user();
        $user->authorizeRoles('admin');
        return view('admin.players.show')->with('player', $player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::where('id', $id)->firstOrFail();
        $user = Auth::user();
        $user->authorizeRoles('admin';)
        return view('admin.players.edit')->with('player', $player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //dd($request);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|max:100',
            'player_number' =>'required'
        ]);

        $player->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'player_number' => $request->player_number,
            'img'=> $request->img
        ]);

        return to_route('players.show', $player);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        // $player = Player::where('id',$id)->firstOrFail();

        $player->delete();
        $user = Auth::user();
        $user->authorizeRoles('admin';)
        return to_route('admin.players.index');
    }
}
