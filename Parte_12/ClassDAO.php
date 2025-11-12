<?php

    // DAO (Data Access Object): Arquivo de Orientação a Objeto (Classes).

    // public: Função que permite ser realizada a herança entre Classes, comunicando camadas back-end e front-end.

    // private: Função restrita que não permite herança, fornece dados para funções publicas da mesma classe!

    // public static: Função que permite ser realizada a herança entre Classes, comunicando camadas back-end e front-end,
    // porem functions do tipo static, não altera sua forma de execução, mantendo um padrão!

    // private static: Função restrita que não permite herança, fornece dados para funcções publicas da mesma classe,
    // porem functions do tipo static, não altera sua forma de execução, mantendo um padrão!

    class ClassDAO{
        public function SomarExemplo($numero1, $numero2){
            if($numero1 == '' || $numero2 == ''){
                return 0;
            }else{
                $ret = $this->SomarValores($numero1, $numero2);

                return $ret;
            }
        }

        private function SomarValores($numero1, $numero2){
            $calculo = $numero1 + $numero2;

            return $calculo;
        }

        public function CalcularCombustivel($combustivel, $litros){
            if($combustivel == '' || $litros == ''){
                return 0;
            }else{
                if($combustivel == 1){
                    return $retorna = $this->Etanol($litros);
                }else if($combustivel == 2){
                    return $retorna = $this->Gasolina($litros);
                }else{
                    return $retorna = $this->Diesel($litros);
                }
            }
        }

        private function Etanol($litros){
            $etanol = $litros * 3.57;
            return $etanol;
        }

        private function Gasolina($litros){
            $gasolina = $litros * 5.39;
            return $gasolina;
        }

        private function Diesel($litros){
            $diesel = $litros * 5.85;
            return $diesel;
        }

        public function Conversor($tipo, $temperatura){
            if($tipo == '' || $temperatura == ''){
                return 0;
            }else{
                if($tipo == 1){
                    $msg = $this->Celsius($temperatura);
                }else if($tipo == 2){
                    $msg = $this->Fahrenheit($temperatura);
                }
                return $msg;
            }
        }

        private function Celsius($temperatura){
            $celsius = round((($temperatura * 9 / 5) + 32), 2);
            return $celsius;
        }

        private function Fahrenheit($temperatura){
            $fahrenheit = round((($temperatura - 32) * 5 / 9), 2);
            return $fahrenheit;
        }

        public function CalcularSalario($meses, $salario, $lucro, $perda){
            if($meses == '' || $salario == '' || $lucro == '' || $perda == ''){
                return 0;
            }else{
                $ganhos = $meses * $salario;
                $totalLucro = ($ganhos * $lucro) / 100;
                $totalPerda = ($ganhos * $perda) / 100;
                                
                $resultado = ($ganhos + $totalLucro) - $totalPerda;
                return number_format($resultado, 2, ',', '.');
            }
        }
    }