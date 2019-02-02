<?php 
	$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetTitle($title);
	$pdf->SetHeaderMargin(30);
	$pdf->SetTopMargin(20);
	$pdf->setFooterMargin(20);
	//$pdf->SetAutoPageBreak(true);
	$pdf->SetAuthor('System Codeigniter');
	$pdf->SetDisplayMode('real', 'default');

	$pdf->AddPage();

	$html = '<h1>Relatório Colaboradores</h1>
				<table>
					<thead>
						<tr>
							<th><b>Colaborador</b></th>
							<th><b>Email</b></th>
							<th><b>CPF</b></th>
							<th><b>Sexo</b></th>
						</tr>
					</thead>
					<tbody>';

			foreach($table as $line) {
			    $html .= '<tr>
			        <td>' . $line->nome . '</td>
			        <td>' . $line->email . '</td>
			        <td>' . $line->cpf . '</td>
			        <td>' . $line->sexo . '</td>
			    </tr>';
			}

			$html .= '</tbody>
				</table>';

	$pdf->writeHTML($html, true, false, true, false, '');

	$pdf->Output('Relatorio-Colaborador.pdf', 'I');
?>
