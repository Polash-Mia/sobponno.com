<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    // public function index(){
    //     return view('admin.home.index');
    // }

    private $todayOrder,$todayDelivared,$todayPayment,$totalCustomer,
    $totalOrder,$totalProduct,$totalComplate,$totalCancel,$totalProcessing,
    $totalPendingPayment,$totalPendingDelivery,$totalRenevue;
    public function index()
   {
    
  $this->todayOrder=Order::whereDate('created_at', '=', date('Y-m-d'))->count();
  $this->todayDelivared=Order::where('delivery_status','Complete')->whereDate('created_at', '=', date('Y-m-d'))->count();
      $this->todayPayment=Order::where('payment_status','Complete')->whereDate('created_at', '=', date('Y-m-d'))->count();
  
     $this->totalCustomer= Customer::count();
      $this->totalOrder= Order::count();
      $this->totalProduct= Product::count();
      $this->totalComplate= Order::where('order_status','Complete')->count();
      $this->totalCancel= Order::where('order_status','Cancel')->count();
      $this->totalProcessing= Order::where('order_status','Processing')->count();
      $this->totalPendingPayment= Order::where('payment_status','Pending')->count();
      $this->totalPendingDelivery= Order::where('delivery_status','Pending')->count();
      $this->totalRenevue= Order::where('payment_status','Complete')->sum('payment_amount');

      return view('admin.home.index',[
      'totalCustomer'   =>$this->totalCustomer,
      'totalOrder'      =>$this->totalOrder,
      'totalProduct'    =>$this->totalProduct,
      'todayOrder'      =>$this->todayOrder,
      'todayDelivared'  =>$this->todayDelivared,
      'todayPayment'    =>$this->todayPayment,
      'totalComplate'    =>$this->totalComplate,
      'totalCancel'     =>$this->totalCancel,
      'totalProcessing'     =>$this->totalProcessing,
      'totalPendingPayment'     =>$this->totalPendingPayment,
      'totalPendingDelivery'     =>$this->totalPendingDelivery,
      'totalRenevue'     =>$this->totalRenevue,
   ]);
   
   }

   public function edit(){
    return view('admin.updatepass.index');
   }
   public function update(Request $request){
    $request->validate([
        'password'=>'required|confirmed|string',
    ]);

    $user=User::find(Auth::id());
    $user->name=$request->name;
    $user->password=Hash::make($request->password);
    $user->save();

    return redirect()->back()->with('success','Profile successfully updated');
   }
}
