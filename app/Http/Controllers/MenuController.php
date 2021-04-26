<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;
use Response;

class MenuController extends BaseController
{
    public function getMenuItems() {
        
		$menuitem=MenuItem::get();
		return Response::json($menuitem);
    }
}
