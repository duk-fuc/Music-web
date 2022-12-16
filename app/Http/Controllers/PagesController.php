<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;
use App\Album;
use App\Event;
use App\Musicdown;
use App\User;
use Mail;
use Illuminate\Support\Facades\Auth;
use App\Newsletter;
class PagesController extends Controller
{

    //Welcome Page
    public function index(){
        $albums = Album::orderBy('id', 'DESC')->take(6)->get();
        $musics = Music::orderBy('id', 'DESC')->take(6)->get();
        $events = Event::orderBy('id', 'DESC')->take(6)->get();
        $latest = Music::all()->last();
        return view('welcome', compact('albums', 'musics', 'events', 'latest'));
    }


    //Music
    public function music(){
        $songs = Music::paginate('15');

        return view('music.index', compact('songs'));
    }

    public function showmusic($slug){
        $song = Music::where('slug', $slug)->firstOrFail();
        //Hints
        $song->views+=1;
        $song->save();
        $musics = Music::orderBy('id', 'DESC')->take(5)->where('id', '!=', $song->id)->get();
        return view('music.show', compact('song', 'musics'));
    }


    //Album
    public function album(){
        $albums = Album::paginate('15');
        return view('album.index', compact('albums'));
    }

    public function showalbum($id){
        $album = Album::where('slug', $id)->firstOrFail();
        return view('album.show', compact('album'));
    }


    //Event
    public function events(){
        $events = Event::paginate(15);
        return view('event.index', compact('events'));
    }

    public function contact(){
        return view('contact');
    }

    public function sendmail(Request $request)
    {
        $this->validate($request, [
            'subject'=>'required|min:3|string',
            'name'=>'required|min:3|string|max:50',
            'message'=>'required|min:3|string',
            'from'=>'required|email|max:200|min:2',
        ]);
        $subject = $request->subject;
        $message = $request->message;
        $from =$request->from;
        $name = $request->name;
        $data = ['subject'=>$subject, 'msg'=>$message, 'from'=>$from, 'name'=>$name];

        //Send Mail
        Mail::send('mails.contact', ['data' => $data], function ($m) use ($data) {
            $m->from($data['from'], $data['name']);
            $m->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))->subject($data['subject']);
        });
        return 'success';
    }


    //Subscribe to newsletter
    public function newsletter_subcribe(Request $request){
        $this->validate($request, [
            'email'=>'required|min:7|max:100|email:rfc,dns,strict,spoof'
        ]);
        $check=Newsletter::where('email', $request->email)->get();
        if(count($check) > 0){
            return ['status'=>'error', 'message'=>'You are already subcribed!'];
        }
        else
        {
            $subscribe = new Newsletter;
            $subscribe->email = $request->email;
            $subscribe->save();
            return ['status'=>'success', 'message'=>'You have successfully to my newsletter'];
        }

    }
    public function find(Request $request)
    {
        
        $songs = Music::orwhere('title','like', '%'.$request->keywords.'%')->orwhere('content','like', '%'.$request->keywords.'%')->get();
        return view('music.find', compact('songs'));
    }
    public function savemusic($id){
        $song = Music::where('id', $id)->firstOrFail();
        return view('music.down', compact('song'));
    }
    public function download($id)
    {
        $song = Music::where('id', $id)->firstOrFail();
        $filename = $song->song;
        $path = public_path('songs/'.$filename);
        if(!empty($filename))
        {
            if (Auth::check()) 
          {
                $musicdown = new Musicdown();
                $musicdown->user_id = Auth::user()->id;
                $musicdown->music_id = $id;
                $musicdown->save();
          }
          return response()->download($path);
        }

    }
    public function listmusic($id)
    {
        $list = Musicdown::orderBy('id', 'DESC')->where('user_id', $id)->get();
        return view('user.listmusic', compact('list'));
    }

}
