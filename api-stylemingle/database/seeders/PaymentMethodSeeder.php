<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $existingPaymentMethod = PaymentMethod::whereIn('name', ['visa', 'master_card', 'american_express', 'pay_pal'])->count();

        if($existingPaymentMethod === 0) {
            PaymentMethod::create(['name' => 'visa']);
            PaymentMethod::create(['name' => 'master_card']);
            PaymentMethod::create(['name' => 'american_express']);
            PaymentMethod::create(['name' => 'pay_pal']);
        }
    }
}
