<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    }

    private function province_seeder() 
    {
        $m_province = array(
            array('province_name' => 'ACEH', 'province_name_en' => 'ACEH', 'province_code' => '11'),
            array('province_name' => 'SUMATERA UTARA', 'province_name_en' => 'NORTH SUMATERA', 'province_code' => '12'),
            array('province_name' => 'SUMATERA BARAT', 'province_name_en' => 'WEST SUMATERA', 'province_code' => '13'),
            array('province_name' => 'RIAU', 'province_name_en' => 'RIAU', 'province_code' => '14'),
            array('province_name' => 'JAMBI', 'province_name_en' => 'JAMBI', 'province_code' => '15'),
            array('province_name' => 'SUMATERA SELATAN', 'province_name_en' => 'SOUTH SUMATERA', 'province_code' => '16'),
            array('province_name' => 'BENGKULU', 'province_name_en' => 'BENGKULU', 'province_code' => '17'),
            array('province_name' => 'LAMPUNG', 'province_name_en' => 'LAMPUNG', 'province_code' => '18'),
            array('province_name' => 'KEPULAUAN BANGKA BELITUNG', 'province_name_en' => 'BANGKA BELITUNG ISLANDS', 'province_code' => '19'),
            array('province_name' => 'KEPULAUAN RIAU', 'province_name_en' => 'RIAU ISLANDS', 'province_code' => '21'),
            array('province_name' => 'DAERAH KHUSUS IBUKOTA JAKARTA', 'province_name_en' => 'SPECIAL CAPITAL REGION OF JAKARTA', 'province_code' => '31'),
            array('province_name' => 'JAWA BARAT', 'province_name_en' => 'WEST JAVA', 'province_code' => '32'),
            array('province_name' => 'JAWA TENGAH', 'province_name_en' => 'CENTRAL JAVA', 'province_code' => '33'),
            array('province_name' => 'DAERAH ISTIMEWA YOGYAKARTA', 'province_name_en' => 'SEPCIAL REGION OF YOGYAKARTA', 'province_code' => '34'),
            array('province_name' => 'JAWA TIMUR', 'province_name_en' => 'EAST JAVA', 'province_code' => '35'),
            array('province_name' => 'BANTEN', 'province_name_en' => 'BANTEN', 'province_code' => '36'),
            array('province_name' => 'BALI', 'province_name_en' => 'BALI', 'province_code' => '51'),
            array('province_name' => 'NUSA TENGGARA BARAT', 'province_name_en' => 'WEST NUSA TENGGARA', 'province_code' => '52'),
            array('province_name' => 'NUSA TENGGARA TIMUR', 'province_name_en' => 'EAST NUSA TENGGARA', 'province_code' => '53'),
            array('province_name' => 'KALIMANTAN BARAT', 'province_name_en' => 'WEST KALIMANTAN', 'province_code' => '61'),
            array('province_name' => 'KALIMANTAN TENGAH', 'province_name_en' => 'CENTRAL KALIMANTAN', 'province_code' => '62'),
            array('province_name' => 'KALIMANTAN SELATAN', 'province_name_en' => 'SOUTH KALIMANTAN', 'province_code' => '63'),
            array('province_name' => 'KALIMANTAN TIMUR', 'province_name_en' => 'EAST KALIMANTAN', 'province_code' => '64'),
            array('province_name' => 'KALIMANTAN UTARA', 'province_name_en' => 'NORTH KALIMANTAN', 'province_code' => '65'),
            array('province_name' => 'SULAWESI UTARA', 'province_name_en' => 'NORTH SULAWESI', 'province_code' => '71'),
            array('province_name' => 'SULAWESI TENGAH', 'province_name_en' => 'CENTRAL SULAWESI', 'province_code' => '72'),
            array('province_name' => 'SULAWESI SELATAN', 'province_name_en' => 'SOUTH SULAWESI', 'province_code' => '73'),
            array('province_name' => 'SULAWESI TENGGARA', 'province_name_en' => 'SOUTHEAST SULAWESI', 'province_code' => '74'),
            array('province_name' => 'GORONTALO', 'province_name_en' => 'GORONTALO', 'province_code' => '75'),
            array('province_name' => 'SULAWESI BARAT', 'province_name_en' => 'WEST SULAWESI', 'province_code' => '76'),
            array('province_name' => 'MALUKU', 'province_name_en' => 'MALUKU', 'province_code' => '81'),
            array('province_name' => 'MALUKU UTARA', 'province_name_en' => 'NORTH MALUKU', 'province_code' => '82'),
            array('province_name' => 'PAPUA', 'province_name_en' => 'PAPUA', 'province_code' => '91'),
            array('province_name' => 'PAPUA BARAT', 'province_name_en' => 'WEST PAPUA', 'province_code' => '92')
        );

        DB::table('m_provinces')->insert($m_province);
    }
}
