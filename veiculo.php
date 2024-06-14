<?php
    class Veiculo{
        //propriedades da classe veiculo
        public $pneu;
        public $motor;
        public function velocidadeMax(){
            echo "velocidade Máxima é 100km/h";

        }

        //construtor da classe veiculo
        public function _construtir($motor,$pneu){
            $this->motor = $motor;
            $this->pneu = $pneu;
        } 

        //metodo para exibir as informações do veiculo
        public function exibirinformacoes(){
            echo"motor:",$this->motor,"<br>";
        } 

    }
?>
