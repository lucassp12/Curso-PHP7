<?php

$hieranquias = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados' =>array(
			//inicio Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)//temino gerente de vendas
				)
			
		),//termino diretor comercial
		//inico diretor financeiro
		array(
			'nome_cargo'=>'Diretor financeiro',
			'subordinados'=>array(
				// inicio de gerente de contas a pagar
				array(
					'nome_cargo'=>'Gerente de Contas a Pagar',
					'subordinados'=>array(
						//inicio de supervisor de pagamentos
						array(
							'nome_cargo'=>'Supervisor de Pagamentos'
						)//termino de supervisor de pagamentos



					)

				),//termino gerente de contas a pagar
				//inicio Gerente de compras
				array(
					'nome_cargo'=>'Gerente de compras',
					'subordinados'=>array(
						//inicio supervisor de suprimentos
						array(
							'nome_cargo'=>'Supervisor de suprimentos'

						)//terminio supervisor de suprimentos


					)


				),//termino gerente de compras

			)

		),// termino diretor financeiro

		)	
	)
);

function exibe($cargos){

	$html = '<ul>';

		foreach ($cargos as $cargo) {
					
				$html .='<li>';

				$html .= $cargo['nome_cargo'];

				if(isset($cargo['subordinados']) && count($cargo['subordinados'])> 0){
					$html .=exibe($cargo['subordinados']);
				} 

				$html .='</li>';

			}	


	$html .= '</ul>';

	return $html;

}

echo exibe($hieranquias);
?>