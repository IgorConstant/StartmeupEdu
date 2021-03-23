<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    function formataDataBr($data=NULL){

        if($data){
            
            $data_funcao = explode("-", $data);

            //Retorna dia, mes e ano no padrão do calendário brasileiro.
            return $data_funcao[2] .'/'. $data_funcao[1] .'/'. $data_funcao[0];
        }
    }

    function formataMoeda($valor=NULL){
        if ($valor){

            //Helper para validar o formato da Moeda em padrão brasileiro.
           return 'R$'. number_format($valor, 2, ',', '.');
        }
    }
?>