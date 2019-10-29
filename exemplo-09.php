<?php
	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinado' => array(
				//Inicio: Diretor Coercial
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array(
						//Inicio: Gerente de vendas
						array(
							'nome_cargo' => 'Gerente de Vendas' 

						)	
						//Termino: Gernete de Vendas	
					)
				),
				// Termino: Diretor Comercial
				//Inicio: Direto financeiro
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						//Inicio: Gerente de Contas a Pagar
						array(
							'nome_cargo' => 'Gerente de Contas a Pagar',
							'subordinados' => array(
								//Inicio: Supervisor de Pagamentos
								array(

								)
								//Termino: Supervisor de Pagamentos
							)

						)
						//Termino: Gerente de Conteas a Pagar
					)
				)
				//Termino: Diretor Financeiro
			)
		);

	);


?>