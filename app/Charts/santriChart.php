<?php

namespace App\Charts;

use App\Models\Santri;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class santriChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $jk_santri = Santri::get();
        $data = [
            $jk_santri->where('jk_santri', 1)->count(),
            $jk_santri->where('jk_santri', 2)->count(), 
        ];
        $label = [
            'Ikhwan',
            'Akhwat',
        ];
        return $this->chart->pieChart()
            ->setTitle('Jenis Kelamin')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
