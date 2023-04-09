<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Dompdf;
use App\Models\MTampil;


class Printsolo extends BaseController
{
    public function __construct()
    {
        $this->mahasiswa = new MTampil;
    }

    public function index()
    {
        $tampil = $this->mahasiswa->getData();
        $array = array(
            'hasil' => $tampil,
        );
        //var_dump($data);
        $tampil = view('V_pdfTabel',$array);

            $dompdf = new Dompdf();
            $dompdf->loadHtml($tampil);

                // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'potrait');

                // Render the HTML as PDF
            $dompdf->render();

                // Output the generated PDF to Browser
            $dompdf->stream('test',array("Attachment" => false));

    }
}
