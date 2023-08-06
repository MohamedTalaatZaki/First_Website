<?php

namespace Database\Seeders;

use App\Models\IncomeTax;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomeTaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('income_taxes')->truncate();
        $incomeTax = IncomeTax::create([
            'name_ar' => 'قانون رقم 2023',
            'name_en' => 'law no 2023',
            'personal_exemption' => 9000,
        ]);
        //first layer
        $layer1 = $incomeTax->incomeTaxLayer()->create([
            'layer_type_id' => 2,
            'max' => 600000,
            'min' => 0,
            'net_min' => 0,
            'net_max' => 472875,
        ]);
        
        $layer1->incomeTaxLayerSlice()->createMany([
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer1->id,
                'discount_type' => 'one_time',
                'from' => 0,
                'to' => 15000,
                'rate' => 0,
                'discount' => 0,
                'ratio' => 0,
                'max_tax_value' => 0,
                'slice_net_value' =>15000,
                'minimum_net' => 0,
                'maximum_net' =>15000,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer1->id,
                'discount_type' => 'one_time',
                'from' => 15000,
                'to' => 30000,
                'rate' => 2.5,
                'discount' => 0,
                'ratio' => 2.5641025641026,
                'max_tax_value' => 375,
                'slice_net_value' => 29625,
                'minimum_net' => 15000,
                'maximum_net' => 29625,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer1->id,
                'discount_type' => 'one_time',
                'from' => 30000,
                'to' => 45000,
                'rate' => 10,
                'discount' => 0,
                'ratio' => 11.111111111111,
                'max_tax_value' => 1500,
                'slice_net_value' => 43125,
                'minimum_net' => 29625,
                'maximum_net' => 43125,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer1->id,
                'discount_type' => 'one_time',
                'from' => 45000,
                'to' => 60000,
                'rate' => 15,
                'discount' => 0,
                'ratio' => 17.647058823529,
                'max_tax_value' => 2250,
                'slice_net_value' => 56250,
                'minimum_net' => 43125,
                'maximum_net' => 55875,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer1->id,
                'discount_type' => 'one_time',
                'from' => 60000,
                'to' => 200000,
                'rate' => 20,
                'discount' => 0,
                'ratio' => 25,
                'max_tax_value' => 28000,
                'slice_net_value' => 169750,
                'minimum_net' => 55875,
                'maximum_net' => 167875,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer1->id,
                'discount_type' => 'one_time',
                'from' => 200000,
                'to' => 400000,
                'rate' => 22.5,
                'discount' => 0,
                'ratio' => 29.032258064516,
                'max_tax_value' => 45000,
                'slice_net_value' => 327000,
                'minimum_net' => 167875,
                'maximum_net' => 322875,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer1->id,
                'discount_type' => 'one_time',
                'from' => 400000,
                'to' => 600000,
                'rate' => 25,
                'discount' => 0,
                'ratio' => 33.333333333333,
                'max_tax_value' => 50000,
                'slice_net_value' => 505000,
                'minimum_net' => 322875,
                'maximum_net' => 472875,
            ]
        ]);
        //second layer
        $layer2 = $incomeTax->incomeTaxLayer()->create([
            'layer_type_id' => 2,
            'max' => 700000,
            'min' => 600000,
            'net_min' => 472875,
            'net_max' => 547500,
        ]);
        $layer2->incomeTaxLayerSlice()->createMany([
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer2->id,
                'discount_type' => 'one_time',
                'from' => 0,
                'to' => 30000,
                'rate' => 2.5,
                'discount' => 0,
                'ratio' => 2.5641025641026,
                'max_tax_value' => 750,
                'slice_net_value' => 29650,
                'minimum_net' => 0,
                'maximum_net' => 29650,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer2->id,
                'discount_type' => 'one_time',
                'from' => 30000,
                'to' => 45000,
                'rate' => 10,
                'discount' => 0,
                'ratio' => 11.111111111111,
                'max_tax_value' => 1500,
                'slice_net_value' => 42750,
                'minimum_net' => 29650,
                'maximum_net' => 42750,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer2->id,
                'discount_type' => 'one_time',
                'from' => 45000,
                'to' => 60000,
                'rate' => 15,
                'discount' => 0,
                'ratio' => 17.647058823529,
                'max_tax_value' => 2250,
                'slice_net_value' => 56250,
                'minimum_net' => 42750,
                'maximum_net' => 55500,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer2->id,
                'discount_type' => 'one_time',
                'from' => 60000,
                'to' => 200000,
                'rate' => 20,
                'discount' => 0,
                'ratio' => 25,
                'max_tax_value' => 28000,
                'slice_net_value' => 169750,
                'minimum_net' => 55500,
                'maximum_net' => 167500,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer2->id,
                'discount_type' => 'one_time',
                'from' => 200000,
                'to' => 400000,
                'rate' => 22.5,
                'discount' => 0,
                'ratio' => 29.032258064516,
                'max_tax_value' => 45000,
                'slice_net_value' => 327000,
                'minimum_net' => 167500,
                'maximum_net' => 322500,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer2->id,
                'discount_type' => 'one_time',
                'from' => 400000,
                'to' => 700000,
                'rate' => 25,
                'discount' => 0,
                'ratio' => 33.333333333333,
                'max_tax_value' => 75000,
                'slice_net_value' => 580000,
                'minimum_net' => 322500,
                'maximum_net' => 547500,
            ]
        ]);

        //third layer
        $layer3 = $incomeTax->incomeTaxLayer()->create([
            'layer_type_id' => 2,
            'max' => 800000,
            'min' => 700000,
            'net_min' => 547500,
            'net_max' => 620250,
        ]);
        $layer3->incomeTaxLayerSlice()->createMany([
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer3->id,
                'discount_type' => 'one_time',
                'from' => 0,
                'to' => 45000,
                'rate' => 10,
                'discount' => 0,
                'ratio' => 11.111111111111,
                'max_tax_value' => 4500,
                'slice_net_value' => 40500,
                'minimum_net' => 0,
                'maximum_net' => 40500,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer3->id,
                'discount_type' => 'one_time',
                'from' => 45000,
                'to' => 60000,
                'rate' => 15,
                'discount' => 0,
                'ratio' => 17.647058823529,
                'max_tax_value' => 2250,
                'slice_net_value' => 53250,
                'minimum_net' => 40500,
                'maximum_net' => 53250,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer3->id,
                'discount_type' => 'one_time',
                'from' => 60000,
                'to' => 200000,
                'rate' => 20,
                'discount' => 0,
                'ratio' => 25,
                'max_tax_value' => 28000,
                'slice_net_value' => 169750,
                'minimum_net' => 53250,
                'maximum_net' => 165250,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer3->id,
                'discount_type' => 'one_time',
                'from' => 200000,
                'to' => 400000,
                'rate' => 22.5,
                'discount' => 0,
                'ratio' => 29.032258064516,
                'max_tax_value' => 45000,
                'slice_net_value' => 327000,
                'minimum_net' => 165250,
                'maximum_net' => 320250,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer3->id,
                'discount_type' => 'one_time',
                'from' => 400000,
                'to' => 800000,
                'rate' => 25,
                'discount' => 0,
                'ratio' => 33.333333333333,
                'max_tax_value' => 100000,
                'slice_net_value' => 655000,
                'minimum_net' => 320250,
                'maximum_net' => 620250,
            ]
        ]);
        //fourth layer
        $layer4 = $incomeTax->incomeTaxLayer()->create([
            'layer_type_id' => 2,
            'max' => 900000,
            'min' => 800000,
            'net_min' => 620250,
            'net_max' => 693000,
        ]);
        $layer4->incomeTaxLayerSlice()->createMany([
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer4->id,
                'discount_type' => 'one_time',
                'from' => 0,
                'to' => 60000,
                'rate' => 15,
                'discount' => 0,
                'ratio' => 17.647058823529,
                'max_tax_value' => 9000,
                'slice_net_value' => 51000,
                'minimum_net' => 0,
                'maximum_net' => 51000,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer4->id,
                'discount_type' => 'one_time',
                'from' => 60000,
                'to' => 200000,
                'rate' => 20,
                'discount' => 0,
                'ratio' => 25,
                'max_tax_value' => 28000,
                'slice_net_value' => 163000,
                'minimum_net' => 51000,
                'maximum_net' => 163000,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer4->id,
                'discount_type' => 'one_time',
                'from' => 200000,
                'to' => 400000,
                'rate' => 22.5,
                'discount' => 0,
                'ratio' => 29.032258064516,
                'max_tax_value' => 45000,
                'slice_net_value' => 327000,
                'minimum_net' => 163000,
                'maximum_net' => 318000,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer4->id,
                'discount_type' => 'one_time',
                'from' => 400000,
                'to' => 900000,
                'rate' => 25,
                'discount' => 0,
                'ratio' => 33.333333333333,
                'max_tax_value' => 125000,
                'slice_net_value' => 730000,
                'minimum_net' => 318000,
                'maximum_net' => 693000,
            ]
       ] );
        //fifth layer
        $layer5 = $incomeTax->incomeTaxLayer()->create([
            'layer_type_id' => 2,
            'max' => 1000000,
            'min' => 900000,
            'net_min' => 693000,
            'net_max' => 765000,
        ]);
        $layer5->incomeTaxLayerSlice()->createMany([
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer5->id,
                'discount_type' => 'one_time',
                'from' => 0,
                'to' => 200000,
                'rate' => 20,
                'discount' => 0,
                'ratio' => 25,
                'max_tax_value' => 40000,
                'slice_net_value' => 160000,
                'minimum_net' => 0,
                'maximum_net' => 160000,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer5->id,
                'discount_type' => 'one_time',
                'from' => 200000,
                'to' => 400000,
                'rate' => 22.5,
                'discount' => 0,
                'ratio' => 29.032258064516,
                'max_tax_value' => 45000,
                'slice_net_value' => 315000,
                'minimum_net' => 160000,
                'maximum_net' => 315000,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer5->id,
                'discount_type' => 'one_time',
                'from' => 400000,
                'to' => 1000000,
                'rate' => 25,
                'discount' => 0,
                'ratio' => 33.333333333333,
                'max_tax_value' => 150000,
                'slice_net_value' => 805000,
                'minimum_net' => 315000,
                'maximum_net' => 765000,
            ]
       ] );
        //sixth layer
        $layer6 = $incomeTax->incomeTaxLayer()->create([
            'layer_type_id' => 2,
            'max' => 99999999999,
            'min' => 1000000,
            'net_min' => 765000,
            'net_max' => 75000009999.25,
        ]);
        $layer6->incomeTaxLayerSlice()->createMany([
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer6->id,
                'discount_type' => 'one_time',
                'from' => 0,
                'to' => 400000,
                'rate' => 22.5,
                'discount' => 0,
                'ratio' => 29.032258064516,
                'max_tax_value' => 90000,
                'slice_net_value' => 310000,
                'minimum_net' => 160000,
                'maximum_net' => 310000,
            ],
            [
                'income_tax_id' => $incomeTax->id,
                'income_tax_layer_id' => $layer6->id,
                'discount_type' => 'one_time',
                'from' => 400000,
                'to' => 99999999999,
                'rate' => 25,
                'discount' => 0,
                'ratio' => 33.333333333333,
                'max_tax_value' => 24999899999.75,
                'slice_net_value' => 75000009999.25,
                'minimum_net' => 310000,
                'maximum_net' => 75000009999.25,
            ]
        ]);

    }
}