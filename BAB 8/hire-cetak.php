<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_hire");
$html = '<center><h3>Data Hire Pegawai</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Role</th>
                <th>Jumlah</th>
                <th>Umur</th>
            </tr>';
$no = 1;
while ($pegawai = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $pegawai['butuh'] . "</td>
                <td>" . $pegawai['jumlah'] . "</td>
                <td>" . $pegawai['umur'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-pegawai.pdf');
?>
