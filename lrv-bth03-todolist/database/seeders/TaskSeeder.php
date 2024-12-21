<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loanhvan')->insert([
            [
                'title' => 'Đi chợ mua rau',
                'description' => 'Mua rau muống, rau cải, cà chua, hành lá',
                'long_description' => 'Nhớ mua rau sạch, rau hữu cơ ở cửa hàng uy tín. Chú ý chọn rau tươi, không bị dập nát.',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hoàn thành báo cáo',
                'description' => 'Hoàn thành báo cáo cuối tháng',
                'long_description' => 'Báo cáo cần bao gồm các số liệu về doanh thu, chi phí, lợi nhuận. Phân tích các yếu tố ảnh hưởng đến kết quả kinh doanh.',
                'completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Học tiếng Anh',
                'description' => 'Học 30 từ vựng mới',
                'long_description' => 'null',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dọn nhà',
                'description' => 'Dọn dẹp vườn, nhà bếp',
                'long_description' => 'null',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Code 24h',
                'description' => 'Code không ngủ trong vòng 24h',
                'long_description' => 'Code tới ngỏm, học code web php(laravel)',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Làm bố .......... trong PUBG',
                'description' => 'Làm nhẹ nhàng 5 dã thú tại pochinki mới nghỉ',
                'long_description' => 'null',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
