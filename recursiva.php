<?php

$hierarquia = array(
    array(
       'nome_cargo'=> 'CEO',
       'subordinados'=>array(
              array(
                'nome_cargo'=>'diretor comercial',
                 'subordinados'=> array(
                        array(

                           'nome_cargo'=> 'gerente de vendas'
                        )
                        
                 )
              ),

              array(
                 'nome_cargo'=>'diretor financeiro',
                 'subordinados'=> array(

                 	array(

                       'nome_cargo'=>'gerente de contas'
                 	)

                 )

              )

        )
   )
);


function mostraHierarquia($a){

	$html = '<ul>';

	$html .= '<ul>';

  return $html;
}


echo mostraHierarquia($hierarquia);