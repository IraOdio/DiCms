<?php


namespace App\Http\Controllers\PublicVisibility\Web;


use App\Http\Controllers\Abstracted\WebController;
use Illuminate\View\View;

class RightRoleController extends WebController
{
    public function showRightRoleView() : View
    {
        return view('public.lk.right-role.right-role-master');
    }
    public function showRightRolePostView() : View
    {

    }
}
