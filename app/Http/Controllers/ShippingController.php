<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;
use Svg\Tag\Rect;

class ShippingController extends Controller
{
    private $shipping,$shippings;
    public function index()
    {
        return view('admin.shipping.index');
    }

    public function create(Request $request)
    {
        $this->shipping = Shipping::newShipping($request);
        return redirect()->back()->with('message', 'shipping info create successfully.');
    }

    public function manage()
    {
        $this->shippings = Shipping::all();
        return view('admin.shipping.manage',['shippings'=>$this->shippings]);
    }

    public function edit($id)
    {
        $this->shipping = Shipping::find($id);
        return view('admin.shipping.edit', [
            'shipping'       => $this->shipping,
                       
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->shipping = Shipping::updateShipping($request, $id);

        
        return redirect('/shipping/manage')->with('message', 'Shipping info update successfully.');
    }

    public function delete($id)
    {
        Shipping::deleteShipping($id);
        
        return redirect('/shipping/manage')->with('message', 'Shipping info delete successfully.');
    }
}
