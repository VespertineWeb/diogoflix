<?php

namespace App\Src\Utils;

class Utils {


    public static function moeda($valor) {
        return str_replace(',', '.', str_replace('.', '', $valor));
    }

    static function moeda2($valor = 0, $digitos = 2, $moeda = '$') {
        return $moeda . ' ' . number_format(round($valor, $digitos), $digitos, '.', '.');
    }

    static function moeda3($valor) {
        return number_format($valor, 2, '', '.');
    }

    static function dizima($valor, $casas = 8) {
        printf("%0.{$casas}f", $valor);
    }

    static function moedaBrasil($valor = 0) {
        return '$ ' . number_format(round($valor, 2), 2, ',', '.');
    }

    static function dizima8($valor, $casas = 8, $tamanho = 2, $sep1 = '.', $sep2 = '') {
        return number_format(round($valor, $casas), $tamanho, $sep1, $sep2);
    }

    static function toDizima8($valor) {
        return $valor / 100000000;
    }

    static function decorrido($data) {
        $libera = strtotime($data);
        $now = strtotime("now");

        $tempo = $libera - $now;

        $dias = (int) (($tempo / (24 * 60 * 60)));
        $horas = (int) ($tempo / (60 * 60));
        $minutos = (int) (($tempo - ($horas * 60 * 60)) / 60);
        $segundos = ($tempo - ($horas * 60 * 60) - ($minutos * 60));

        echo $dias . ' Dias, ' . $horas . ' Horas: ' . $minutos . ' Minutos, ' . $segundos;
    }

    public static function idade($dataNasc) {

        list($dia, $mes, $ano) = explode('-', $dataNasc);
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);
        return floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    }
    public static function data($data) {
        $data = str_replace('/', '-', $data);
        $data = explode('-', $data);
        $data = array_reverse($data);
        $data = implode('-', $data);
        return $data;
    }

    public static function data2($data) {
        $data = str_replace('-', '/', $data);
        $data = explode('/', $data);
        $data = array_reverse($data);
        $data = implode('/', $data);
        return $data;
    }

    public static function data3($data) {
        $dh = explode(' ', $data);
        $data = str_replace('-', '/', $dh[0]);
        $data = explode('/', $data);
        $data = array_reverse($data);
        $data = implode('/', $data);
        return $data . ' - ' . $dh[1];
    }
    public static function estados() {
        return array(
            "" => "Estado!", "AC" => "AC", "AL" => "AL", "AM" => "AM", "AP" => "AP", "BA" => "BA", "CE" => "CE", "DF" => "DF", "ES" => "ES", "GO" => "GO",
            "MA" => "MA", "MT" => "MT", "MS" => "MS", "MG" => "MG", "PA" => "PA", "PB" => "PB", "PR" => "PR", "PE" => "PE", "PI" => "PI", "RJ" => "RJ",
            "RN" => "RN", "RO" => "RO", "RS" => "RS", "RR" => "RR", "SC" => "SC", "SE" => "SE", "SP" => "SP", "TO" => "TO"
        );
    }
    public static function mascara($val, $mask) {
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if (isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }

    public static function estadoCivil() {
        return array(
            "" => "",
            "SOLTEIRO(A)" => "SOLTEIRO(A) ",
            "CASADO(A)" => "CASADO(A)",
            "DIVORCIADO(A)" => "DIVORCIADO(A)",
            "VI??VO(A)" => "VI??VO(A)",
            "SEPARADO(A)" => "SEPARADO(A)",
            "UNI??O EST??VEL" => "UNI??O EST??VEL"
        );
    }

    static function getIdade($data = '') {

        // Separa em dia, m??s e ano
        list($dia, $mes, $ano) = explode('/', $data);

        // Descobre que dia ?? hoje e retorna a unix timestamp
        $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
        // Descobre a unix timestamp da data de nascimento do fulano
        $nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

        // Depois apenas fazemos o c??lculo j?? citado :)
        $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);

        return $idade;
    }

    static function getNameMonthByDate($data) {
        switch (date('m', strtotime($data))) {
            case "01":
                $mes = 'Janeiro';
                break;
            case "02":
                $mes = 'Fevereiro';
                break;
            case "03":
                $mes = 'Mar??o';
                break;
            case "04":
                $mes = 'Abril';
                break;
            case "05":
                $mes = 'Maio';
                break;
            case "06":
                $mes = 'Junho';
                break;
            case "07":
                $mes = 'Julho';
                break;
            case "08":
                $mes = 'Agosto';
                break;
            case "09":
                $mes = 'Setembro';
                break;
            case "10":
                $mes = 'Outubro';
                break;
            case "11":
                $mes = 'Novembro';
                break;
            case "12":
                $mes = 'Dezembro';
                break;
        }

        return $mes;
    }

    static function getNameMonthByIndex($index) {
        switch ($index) {
            case "01":
                $mes = 'Janeiro';
                break;
            case "02":
                $mes = 'Fevereiro';
                break;
            case "03":
                $mes = 'Mar??o';
                break;
            case "04":
                $mes = 'Abril';
                break;
            case "05":
                $mes = 'Maio';
                break;
            case "06":
                $mes = 'Junho';
                break;
            case "07":
                $mes = 'Julho';
                break;
            case "08":
                $mes = 'Agosto';
                break;
            case "09":
                $mes = 'Setembro';
                break;
            case "10":
                $mes = 'Outubro';
                break;
            case "11":
                $mes = 'Novembro';
                break;
            case "12":
                $mes = 'Dezembro';
                break;
        }

        return $mes;
    }


    function perna($str) {
        if (mb_strtolower($str) == 'e') {
            return 'Esquerda';
        } elseif (mb_strtolower($str) == 'd') {
            return 'Direita';
        }
    }

    public function decimal($valor, $digitos = 8) {
        return number_format(round($valor, $digitos), $digitos, '.', '');
    }

    public function buscarCEP($cep) {
        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $ch = curl_init();

        // define url
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // executa o post
        $json = curl_exec($ch);
        $resultado = json_decode($json, true);

        curl_close($ch);
        return $resultado;
    }

    function mensagens() {
        return array(
            'required' => 'O campo <strong><i>{field}</i></strong> ?? Obrigat??rio',
            'valid_email' => 'O campo <strong><i>{field}</i></strong> nao ?? um e-mail v??lido',
            'is_unique' => 'Este <strong><i>{field}</i></strong> j?? est?? cadastrado',
            'xss_clean' => 'erro xss',
            'min_length' => 'o campo <i>{field}</i> deve ter no m??nimo {param} caracteres',
        );
    }

    function utf8Fix($msg) {
        $accents = array("??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??", "??");
        $utf8 = array("????", "?? ", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "????", "?????", "?????", "????", "?????", "?????", "????", "????", "?????", "????", "????", "????", "????", "?????", "?????", "?????", "?????", "?????", "????", "?????", "?????", "????", "?????", "???");
        $fix = str_replace($utf8, $accents, $msg);
        return $fix;
    }


    static function soNumeros($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    public function numOnly() {
        //echo "oninput=\"this.value = this.value.replace(/[^0-9,]/g, '').replace(/(\..*)\./g, '$1');\"";
        echo "oninput=\"this.value = this.value.replace(/[^0-9.,]/g, '').replace(/(\..*)\./g, '$1').replace(',','.');\"";
    }




    public function setBaseUrl() {
        $parametros = $this->ci->parametrosmodel->getByid(1);
        $this->ci->config->set_item('base_url', $parametros->par_baseUrl);
    }

    public function statusPag() {
        return array(
            '1' => 'Aguardando pagamento', //: o comprador iniciou a transa????o, mas at?? o momento o PagSeguro n??o recebeu nenhuma informa????o sobre o pagamento.
            '2' => 'Em an??lise', //: o comprador optou por pagar com um cart??o de cr??dito e o PagSeguro est?? analisando o risco da transa????o.
            '3' => 'Paga', //: a transa????o foi paga pelo comprador e o PagSeguro j?? recebeu uma confirma????o da institui????o financeira respons??vel pelo processamento.
            '4' => 'Dispon??vel', //: a transa????o foi paga e chegou ao final de seu prazo de libera????o sem ter sido retornada e sem que haja nenhuma disputa aberta.
            '5' => 'Em disputa', //: o comprador, dentro do prazo de libera????o da transa????o, abriu uma disputa.
            '6' => 'Devolvida', //: o valor da transa????o foi devolvido para o comprador.
            '7' => 'Cancelada', //: a transa????o foi cancelada sem ter sido finalizada.
            '8' => 'Debitado', //: o valor da transa????o foi devolvido para o comprador.
            '9' => 'Reten????o tempor??ria', //: o comprador contestou o pagamento junto ?? operadora do cart??o de cr??dito ou abriu uma demanda judicial ou administrativa (Procon).
        );
    }

    public function categoriasVideos() {
        $categorias = array(
            'VENDAS' => 'VENDAS',
            'MULTINIVEL' => 'MULTINIVEL',
            'LIDERANCA' => 'LIDERAN??A',
            'PRODUTOS' => 'PRODUTOS',
        );
        return $categorias;
    }

    public function divideParcelas($valor, $parcelas) {

        $valorParcelas = round($valor / $parcelas);

        //echo $valorParcelas . ' - ';
        //echo ($valorParcelas * $parcelas) - $valor;

        $arrayParcelas = array();
        for ($i = 1; $i <= $parcelas; $i++) {
            $valorParcela = round($valor / $i);
            $arrayParcelas[$i] = $i . ' X DE ' . 'R$ ' . number_format($valorParcela, 2, ',', '.');
        }

        //print_r($arrayParcelas);
        return $arrayParcelas;
    }

    public function divideParcelas2($valor, $parcelas) {

        $valorParcelas = round($valor / $parcelas);

        //echo $valorParcelas . ' - ';
        //echo ($valorParcelas * $parcelas) - $valor;

        $arrayParcelas = array();
        for ($i = 1; $i <= $parcelas; $i++) {
            $valorParcela = round($valor / $i, 2);
            $arrayParcelas[$i] = number_format($valorParcela, 2, '.', '');
        }

        //print_r($arrayParcelas);
        return $arrayParcelas;
    }


    public function upperText($texto) {
        $texto = mb_strtoupper($texto);


        return $texto;
    }

    public function mascaras() {
        include 'Util-mask.php';
    }

    public function modal() {
        include 'Util-modal.php';
    }


    public function remove_accent($str) {
        $a = array('??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??', '??');
        $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
        return str_replace($a, $b, $str);
    }

    function encode_url($string) {
        return strtr($string, array('+' => '.', '=' => '-', '/' => '~'));
    }

    function decode_url($string) {
        return strtr($string, array('.' => '+', '-' => '=', '~' => '/'));
    }

    public function milhar($valor) {
        return number_format($valor, 0, '', '.');
    }
}
