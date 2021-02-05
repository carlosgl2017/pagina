<?php

use Illuminate\Database\Seeder;
use App\ExtensionCi;
use PharIo\Manifest\Extension;

class ExtensionCiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExtensionCi::create([
            'nombre' => 'PT'
        ]);
        ExtensionCi::create([
            'nombre' => 'LP'
        ]);
        ExtensionCi::create([
            'nombre' => 'CB'
        ]);
        ExtensionCi::create([
            'nombre' => 'SC'
        ]);
        ExtensionCi::create([
            'nombre' => 'BN'
        ]);
        ExtensionCi::create([
            'nombre' => 'PA'
        ]);
        ExtensionCi::create([
            'nombre' => 'TJ'
        ]);
        ExtensionCi::create([
            'nombre' => 'CH'
        ]);
        ExtensionCi::create([
            'nombre' => 'OR'
        ]);
        ExtensionCi::create([
            'nombre' => ' '
        ]);
    }
}
