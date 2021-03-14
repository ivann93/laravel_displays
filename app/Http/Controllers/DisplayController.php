<?php

namespace App\Http\Controllers;

use App\Models\Display;
use App\Models\Reseller;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(Request $request) {
        $resellers = Reseller::all();
        $displays = Display::all();
        return view('index', compact('resellers', 'displays'));
    }

    public function create() {
        $resellers = Reseller::all();
        return view('new.display', compact('resellers'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => ['string', 'required'],
            'reseller' => ['required', 'numeric'],
            'picture' => ['file', 'required', 'image'],
            'serial_number' => ['required', 'numeric'],
            'type' => ['required'],

        ]);
        $reseller = Reseller::findOrFail($data['reseller']);
        $display = new Display();
        $display->name = $data['name'];
        $display->serial_number = $data['serial_number'];
        $display->type = $data['type'];
        $file = $request->file('picture')->store('uploads', 'public');
        $display->file_path = explode("/", $file)[1];
        $reseller->displays()->save($display);
        session()->flash("status", "success");
        session()->flash("title", "Success!");
        session()->flash('message', "The display was created successfully!");
        return redirect(route('displays.index'));
    }

    public function show($id)
    {
        
        $display = Display::whereId($id)->first();
        if($display) {
            return view('show',compact('display'));
        } else {
            abort(404);
        }

    }

    public function destroy($id)
    {
        $get = Display::find($id);
        if($get) {
            Display::find($id)->delete();
            session()->flash("status", "success");
            session()->flash("title", "Success!");
            session()->flash('message', "The display was deleted successfully!");
            return redirect(route('displays.index'));
        } else {
            abort(404);
        }

    }

}
