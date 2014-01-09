<?php

class ItemTableSeeder extends DatabaseSeeder {

	public function run()
	{

		Item::truncate();
		$list = array(
			'1' => 'Cubify Cube - 3D 打印机噢',
			'2' => 'bobble 水壶 - 手动挤一挤，让水不断经过',
			'3' => 'Vektor - 超薄望远镜',
			'4' => 'Broadlink Wi-Fi智能插座 - 智能家居必备',
			'5' => 'Philips The Airfryer - 用空气炸薯条',
			'6' => 'Withings Wifi 体重计 - 体重自动上传云端',
			'7' => 'GGMM iLight Bracket支架灯 - 多角度可',
			'8' => 'Play Video Memo - 录下你的留言',
			'9' => 'KOHLER Moxie - 蓝牙音箱淋浴喷头',
			'10' => 'Abrasus – Triangle Commuter Bag - 设',
			'11' => 'Herman Miller Embody - 12年才设计出',
			'12' => 'GoPro HERO3+ Black Edition - 运动拍'
		);

		foreach ($list as $key => $value)
		{
			Item::create(array());
			Item::where('id', '=', $key)->update(array('title' => $value, 'content' => $value));
		}

	}
}