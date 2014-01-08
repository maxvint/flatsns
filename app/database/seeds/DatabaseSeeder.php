<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ItemTableSeeder');
	}

}

/*
class GoodTableSeeder extends Seeder {

		public function run()
		{
				DB::table('goods')->delete();
				// $list = array('Cubify Cube - 3D 打印机噢', 'bobble 水壶 - 手动挤一挤，让水不断经过', 'Vektor - 超薄望远镜', 'Broadlink Wi-Fi智能插座 - 智能家居必备', 'Philips The Airfryer - 用空气炸薯条', 'Withings Wifi 体重计 - 体重自动上传云端', 'GGMM iLight Bracket支架灯 - 多角度可', 'Play Video Memo - 录下你的留言', 'KOHLER Moxie - 蓝牙音箱淋浴喷头', 'Abrasus – Triangle Commuter Bag - 设', 'Herman Miller Embody - 12年才设计出', 'GoPro HERO3+ Black Edition - 运动拍');


				Good::create([
						'title' => 'Cubify Cube - 3D 打印机噢',
						'content' => 'ajjfdjfjdfjdfj'
				]);
		}

}
*/