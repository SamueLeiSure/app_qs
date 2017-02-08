<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hotel;
use App\Look;
use App\Cloth;

class ListController extends Controller
{
	public function hotel()
	{
		return view('lists.hotellist')->withHotels(Hotel::all());
	}

	public function hotelshow($id)
	{
		return view('lists.hotelshow')->withHotel(Hotel::find($id));
	}

	public function look()
	{
		return view('lists.looklist')->withLooks(Look::all());
	}

	public function lookshow($id)
	{
		return view('lists.lookshow')->withLook(Look::find($id));
	}

	public function cloth()
	{
		return view('lists.clothlist')->withCloths(Cloth::all());
	}

	public function clothshow($id)
	{
		return view('lists.clothshow')->withCloth(Cloth::find($id));
	}
}
