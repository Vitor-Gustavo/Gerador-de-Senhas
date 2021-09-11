
<?php
    function gerarSenha($qtdcaracter = 10, $maiscula = true, $numero = true, $simbolos = false)
    {
        $letrasMin = str_shuffle('abcdefghijklmnopqrstuvwxyz');
        $letrasMai = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $num = (((date('Ymd') / 12) * 24) + mt_rand(500, 9999));
        $num .= ('1234567890');
        $specialCaracter = ('!@#$%*-');


        $retorna = '';
        $caracteres = '';


        $caracteres .=$letrasMin;
        if ($maiscula) $caracteres .= $letrasMai;
        if($numero) $caracteres .= $num;
        if($simbolos) $caracteres .= $specialCaracter;

        $len = strlen($caracteres);

        for ($i = 1; $i <=$qtdcaracter; $i++) {
            $random = mt_rand(1, $len);

            $retorna .= $caracteres[$random-1];
        }
        
        return $retorna;
        
    }       

    $pwd = gerarSenha(10);
    echo $pwd;
     ?><br /><?php
    ?><br /><?php
    $pwd = gerarSenha(16,true, false);
    echo $pwd;
    ?><br /><?php
    ?><br /><?php
    $pwd = gerarSenha(24,false, true);
    echo $pwd;

    $pwd = gerarSenha(10,true,true,true);
    echo $pwd;    
?>





