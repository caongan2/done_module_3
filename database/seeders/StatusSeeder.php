<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->status = 'Hoạt động';
        $status->save();

        $status = new Status();
        $status->status = 'Ngừng hoạt động';
        $status->save();
    }
}
