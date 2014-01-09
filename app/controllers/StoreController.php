<?php

class StoreController extends BaseController {

	private $store;
	private $item;

	public function __construct(Store $store, Item $item)
	{
		$this->store = $store;
		$this->item = $item;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$items = $this->item->getItemList(16);
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