<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
  public function index() {
      return view('user.index');
  }
  public function video2() {
    $data['videos'] = Camera::latest()->get();
    return view('video2',$data);
  }
    public function profile()
    {
        return view('user.profile');
    }
    // this function saves the media into the database
    public function saveMedia(Request $req) {
        $file = $req->file;
        $filename = $file->hashName();
        $file->move(public_path().'/dcim/',$filename);
        Camera::create([
            'file' => $filename,
            'category'=> $req->category,
            'path' => 'dcim/'.$filename
        ]);
        return 'file created';
    }

    //this function fetch the media from the database.
    public function fetchMedia() {
        $all = Camera::latest()->get();
      
        return $all;
    }
 
    
}
