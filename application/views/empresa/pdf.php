<?php 
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetTitle($title);
	$pdf->SetHeaderMargin(30);
	$pdf->SetTopMargin(20);
	$pdf->setFooterMargin(20);
	$pdf->SetAutoPageBreak(true);
	$pdf->SetAuthor('System Codeigniter');
	$pdf->SetDisplayMode('real', 'default');

	$pdf->AddPage();

	$html = '<h1>Relatório Empresas</h1>
				<table>
					<thead>
						<tr>
							<th><b>Empresa</b></th>
							<th><b>CNPJ</b></th>
						</tr>
					</thead>
					<tbody>';

			foreach($table as $line) {
			    $html .= '<tr>
			        <td>' . $line->nome . '</td>
			        <td>' . $line->cnpj . '</td>
			    </tr>';
			}

			$html .= '</tbody>
				</table>';

	$pdf->writeHTML($html, true, false, true, false, '');

	$pdf->Output('Relatorio-Empresa.pdf', 'I');
?>
