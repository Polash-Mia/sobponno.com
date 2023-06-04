<?php

namespace App\Http\Controllers;

use App\Models\Couriers;
use Illuminate\Http\Request;

class CouriersController extends Controller
{
    private $couriers,$courier;
    public function index()
    {
        return view('admin.couriers.index');
    }

    public function create(Request $request)
    {
        $this->courier = Couriers::newCouriers($request);
        return redirect()->back()->with('message', 'Couriers info create successfully.');
    }

    public function manage()
    {
        $this->couriers = Couriers::all();
        return view('admin.couriers.manage',['couriers'=>$this->couriers]);
    }

    public function edit($id)
    {
        $this->courier = Couriers::find($id);
        return view('admin.couriers.edit', [
            'courier'       => $this->courier,
                       
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->courier = Couriers::updateCouriers($request, $id);

        
        return redirect('/couriers/manage')->with('message', 'couriers info update successfully.');
    }

    public function delete($id)
    {
        Couriers::deleteCouriers($id);
        
        return redirect('/couriers/manage')->with('message', 'couriers info delete successfully.');
    }
}
