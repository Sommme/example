<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TicketController extends Controller
{
    public function buy_ticket(Request $request)
    {
        $user = Auth::user();
        $exhibition_id = $request->input('exhibition_id');
        $quantity = $request->input('quantity');
        $exhibition_datetime = $request->input('exhibition_datetime');

        $ticket = Ticket::saveData(
            ['user_id' => $user->id, 'exhibition_id' => $exhibition_id,
            'quantity' => $quantity, 'exhibition_datetime' => $exhibition_datetime]
        );

        $ticket->quantity += $quantity;
        $ticket->save();

        return redirect()->back()->with('success', 'Билеты успешно куплены!');
    }

}
