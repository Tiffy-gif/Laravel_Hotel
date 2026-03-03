<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Contact;
use App\Notifications\SendEmailNotification;
class AdminController extends Controller
{
    public function index()
    {

        if (Auth::id()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                $room = Room::all();
                $gallary = Gallery::all();
                return view('home.index', compact('room','gallary'));
            } else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        $room = Room::all();
        $gallary = Gallery::all();
        return view('home.index', compact('room', 'gallary'));
    }


    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {

        $data = new Room();

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }


    public function view_room()
    {
        $data = Room::all();
        return view('admin.view_room', compact('data'));
    }

    public function room_delete($id)
    {

        $data = Room::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function room_update($id)
    {
        $data = Room::find($id);

        return view('admin.update_room', compact('data'));
    }


    public function edit_room(Request $request, $id)
    {
        $data =  Room::find($id);
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }


    public function bookings()
    {

        $data = Booking::all();
        return view('admin.bookings', compact('data'));
    }


    public function booking_delete($id)
    {

        $data = Booking::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function approve_book($id)
    {

        $booking = Booking::find($id);

        $booking->status = 'approve';

        $booking->save();

        return redirect()->back();
    }


    public function rejected_book($id)
    {

        $booking = Booking::find($id);

        $booking->status = 'rejected';

        $booking->save();

        return redirect()->back();
    }

    public function view_gallary()
    {
        $gallary = Gallery::all();
        return view('admin.gallary', compact('gallary'));
    }


    public function uplaod_gallary(Request $request)
    {

        $data = new Gallery();
        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('gallary', $imagename);

            $data->image = $imagename;
            $data->save();
        }

        return redirect()->back();
    }

    public function delete_gallary($id)
    {

        $gallary = Gallery::find($id);
        $gallary->delete();

        return redirect()->back();
    }

    public function all_message(){

    $data = Contact::all();
        return view('admin.all_message',compact('data'));
    }


    public function send_mail(Request $request, $id){

        $data = Contact::find($id);
        return view('admin.send_mail',compact('data'));
    }

    public function mail($id){


        $data = Contact::find($id);
        
        $details =[


        ];


    }
}
