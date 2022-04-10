<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Accessory;

use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        $total_clients = count(User::get());
        $new_clients   = count(User::where('created_at', '>=' , $start)
                                   ->where('created_at', '<=' , $end)->get());

        $total_orders = count(Order::get());
        $new_orders   = count(Order::where('created_at', '>=' , $start)
                                   ->where('created_at', '<=' , $end)->get());


        $accessories = Accessory::get();

        $data = [
            'start'         => $start,
            'end'           => $end ,
            'date'           => date('m/d/Y'),
            'total_clients'  => $total_clients,
            'new_clients'    => $new_clients,
            'total_orders'   => $total_orders ,
            'new_orders'      => $new_orders,
            'accessories'    => $accessories

        ];
          
        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('report.pdf');
    }

}