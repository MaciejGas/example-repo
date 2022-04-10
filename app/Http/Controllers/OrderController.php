<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Event;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(OrderRepository $orderRepo)
    {
        $orders = $orderRepo->get_active_orders();
        $all_orders = count($orderRepo->all_orders());
        $week_orders = count($orderRepo->orders_last_week());
        $month_orders = count($orderRepo->orders_last_month());

        return view('a_panel.orders.orders', ["ordersList"=>$orders ,
                                                "allorders"=>$all_orders , 
                                                "weekorders"=>$week_orders ,
                                                "monthorders"=>$month_orders]);
    }

    public function get_single(OrderRepository $orderRepo, $id)
    {
        $order = $orderRepo->find($id);

        return view('a_panel.orders.orders_profile', ["order"=>$order]);
    }

    public function edit(OrderRepository $orderRepo, $id)
    {
        $order = $orderRepo->find($id);

        return view('a_panel.orders.orders_edit', ["order" => $order]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'width'=> 'required',
            'height'=> 'required',
            'place'=> 'required',
            'color'=> 'required',
            'description'=> 'required'
        ]);

        $new_order = new Order;
        $new_order->client_id = Auth::id();
        $new_order->width = $request->input('width');
        $new_order->height = $request->input('height');
        $new_order->place = $request->input('place');
        $new_order->color = $request->input('color');
        $new_order->description = $request->input('description');
        $new_order->status = 'active';

        $new_order->save();

        return back()->with('success','Twoje zgłoszenie zostało wysłane!');

    }

    public function confirm(OrderRepository $orderRepo, Request $request)
    {
        $request->validate([
            'width'=> 'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'height'=> 'required',
            'place'=> 'required',
            'color'=> 'required',
            'title'=> 'required',
            'description'=> 'required'
        ]);

        $event = new Event;
        $event->title = $request->input('title');
        $event->start = $request->input('date_start');
        $event->end = $request->input('date_end');
        $event->client_id = $request->input('client');
        $event->width = $request->input('width');
        $event->height = $request->input('height');
        $event->place = $request->input('place');
        $event->color = $request->input('color');
        $event->description = $request->input('description');

        $order = $orderRepo->find($request->input('id'));
        $order->status = 'unactive';

        $order->save();
        $event->save();

        return back()->with('success','Zapisano');

    }

    public function delete(OrderRepository $orderRepo, $id)
    {
        $event = $orderRepo->delete($id);

        return back()->with('success','Usunięto poprawnie');

    }

}
