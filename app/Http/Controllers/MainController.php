<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function ordersPage(){

        if (Input::has('search')):
            $results = Input::get('search');

            $orders = Order::where('name', 'like', $results)
                ->orWhere('email', 'like', $results)
                ->orWhere('height', $results)
                ->orWhere('weight', $results)
                ->orWhere('age', $results)
                ->get();
        else:
            $orders = Order::with('images')->paginate(3);;
        endif;

        return view('orders', compact('orders'));
    }
    public function save(Request $request){
        $rules = [
            'name' => 'required|alpha',
            'height' => 'required|integer|between:50,300',
            'age' => 'required|integer|between:1,99',
            'weight' => 'required|integer|between:10,200',
            'email' => 'required|email|unique:orders'
        ];
        $photos = count($request->input('photos'));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'required|image|max:2000';
        }
        $this->validate($request,$rules);


        $order = new Order();
        $order->name = $request->input('name');
        $order->height = $request->input('height');
        $order->age = $request->input('age');
        $order->weight = $request->input('weight');
        $order->email = $request->input('email');
        $order->save();

        $this->uploadPhotos($request, $order);

        return back()->with('success', 'Sėkmingai užsisakėte asmeninę sporto progrąmą!');

    }

    protected function uploadPhotos($request, $order){
        if ($request->hasFile('photos')):
            foreach ($request->photos as $photo):
                $path = $photo->store('uploads');
                $image = new Gallery();
                $image->order_id = $order->id;
                $image->image = $path;
                $image->save();
            endforeach;
        endif;
    }
}
