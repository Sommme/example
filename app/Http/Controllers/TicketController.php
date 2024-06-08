<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function buy_ticket(Request $request)
    {
        $user = Auth::user();
        $exhibition_id = $request->input('exhibition_id');
        $quantity = $request->input('quantity');

        $ticket = Ticket::firstOrCreate(
            ['user_id' => $user->id, 'exhibition_id' => $exhibition_id],
            ['quantity' => 0]
        );

        $ticket->quantity += $quantity;
        $ticket->save();

        return redirect()->back()->with('success', 'Билеты успешно куплены!');
    }

}
