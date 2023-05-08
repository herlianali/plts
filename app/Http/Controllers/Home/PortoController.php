<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Services\MaterialService;
use Illuminate\Http\Request;
use PDF;

class PortoController extends Controller
{
    protected $materialService;
    public function __construct(MaterialService $materialService)
    {
        $this->materialService = $materialService;
        // view()->share([
        //     'material' => $materialService->material(),
        // ]);
    }

    public function index()
    {
        return view('app.portfolio.index');
    }

    public function langganan(Request $request)
    {
        $materials = $this->materialService->searchMaterial($request);
        return view('app.portfolio.langganan', compact('materials'));
    }

    public function langganan_proses(Request $request)
    {
        parse_str($request->data, $datas);
        $material = $this->materialService->getOne($datas['kode_golongan']);
        $jumlah = round(((int)$material->luas_atap/100*$datas['daya'])/450);
        $kapasitas = $jumlah*450;
        $kapasitas_plts = $kapasitas/1000;
        $penghematan = (double)$material->rp_per_kwh*4.5*30*$kapasitas_plts;
        if ($kapasitas_plts > 100) {
            $tarif_pv_nex = 9900;
        }elseif ($kapasitas_plts > 10) {
            $tarif_pv_nex = 10000;
        }elseif ($kapasitas_plts > 1.999999){
            $tarif_pv_nex = 11000;
        }else{
            $tarif_pv_nex = 14000;
        }
        $tarif_pv_pju = $tarif_pv_nex*(1+16/100);
        $total_invest_client = $kapasitas*$tarif_pv_pju;
        $data = [
            'nama' => $datas['nama'],
            'plts' => $datas['plts'],
            'qty' => $jumlah,
            'golongan_tarif' => $material->golongan_tarif,
            'daya' => number_format($datas['daya'],2,",","."),
            'rp_per_kwh' => number_format($material->rp_per_kwh,2,",","."),
            'kapasitas' => str_replace(",",".",number_format($kapasitas)),
            'total_invest_client' => str_replace(",",".",number_format(round($total_invest_client))),
            'kapasitas_plts' => str_replace(".",",",$kapasitas_plts),
            'penghematan' => str_replace(",",".",number_format(round($penghematan))),
            'bep' => str_replace(".",",",round($total_invest_client/$penghematan/12,2)),
            'penghematan_25_thn' => str_replace(",",".",number_format(round($penghematan*12*25)))
        ];
        return $data;
    }

    // // public function unduh(Request $request)
    // public function unduh()
    // {
    //     // $datas = $this->langganan_proses($request);

    //     // return view('app.portfolio.unduh', compact('datas'));
    //     $pdf = PDF::loadView('app.portfolio.unduh')->setOptions(['defaultFont' => 'sans-serif']);
    //     return $pdf->download('proposal.pdf');
    // }

}
