<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use App\Models\Direction;
use App\Models\Exhibit;

class ExhibitionComposer
{
    public function compose(View $view)
    {
        // Получение данных из моделей
        $directions = Direction::all();
        $exhibits = Exhibit::all();

        // Передача данных во view
        $view->with('directions', $directions)
            ->with('exhibits', $exhibits);
    }
}

