<?php

class StoreController extends BaseController {


	public function __construct(Store $store, Item $item)
	{

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
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
	}


}