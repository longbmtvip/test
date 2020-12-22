<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(userSeeder::class);

    }
}
//pass longp353:123456 name:Long
class userSeeder extends Seeder{
	public function run()
	{
		 $data=[


[
  'email'=>'hoangpm@gmail.com',

 'name'=>'Phạm Minh Hoàng',
 'password'=>bcrypt('hoangpm'),
 'quyen'=>'1',


],
[
  'email'=>'sonct@gmail.com',

 'name'=>'Cao Thanh Sơn',
 'password'=>bcrypt('sonct'),
 'quyen'=>'1',
],
[
  'email'=>'hoandq@gmail.com',
 'name'=>'Đặng Quốc Hoàn',
 'password'=>bcrypt('hoandq'),
 'quyen'=>'1',
],
[
  'email'=>'sanghd@gmail.com',
 'name'=>'Hoàng Đình Sáng',
 'password'=>bcrypt('sanghd'),
 'quyen'=>'1',
],
[
  'email'=>'phucbh@gmail.com',
 'name'=>'Bùi Hữu Phúc',
 'password'=>bcrypt('phucbh'),
 'quyen'=>'1',
],
[
  'email'=>'phongnq@gmail.com',
 'name'=>'Nguyễn Quốc Phong',
 'password'=>bcrypt('phongnq'),
 'quyen'=>'1',
],
[
  'email'=>'sonnx@gmail.com',
 'name'=>'Nguyễn Xuân Sơn',
 'password'=>bcrypt('sonnx'),
 'quyen'=>'1',
],
[
  'email'=>'longhq@gmail.com',
 'name'=>'Hồ Quang Long',
 'password'=>bcrypt('longhq'),
 'quyen'=>'1',
],
[
  'email'=>'linhttt@gmail.com',
 'name'=>'Trần Thị Thương Linh',
 'password'=>bcrypt('linhttt'),
 'quyen'=>'1',
],


        ];
        DB::table('user_custom')->insert($data);

	}
}
