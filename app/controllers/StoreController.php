<?php

class StoreController extends BaseController {

<<<<<<< HEAD
	public function __construct(Store $store, Item $item)
	{

	}

=======
>>>>>>> a8102a6a0aaba109521e4721c02b44c435f0862e
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
<<<<<<< HEAD
		$items = Item::all();
		return View::make('store.index', compact('items'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getItem($id)
	{
		$item = Item::find($id);
		return View::make('store.item', compact('item'));
=======
		return View::make('store.index');
>>>>>>> a8102a6a0aaba109521e4721c02b44c435f0862e
	}


}