<blockquote>
<?php
#!/usr/local/bin/php
session_start();
require_once 'fun.php';
$fun=new fun();
if($fun->verificarUserSaida()) {
    $fun->headers();
    $fun->conectaMysqli();
    $fun->getDefines();
    $res = $fun->executaSQL("SELECT nome FROM SYS_tutoriais");
    $comando = '';

    for ($i = 0; $i < mysqli_num_rows($res); $i++) {
        $linha = mysqli_fetch_array($res);
        if ($i == (mysqli_num_rows($res) - 1)) {
            $comando .= 'rm -Rf ~/' . FTPPATH . 'tutoriais' . DIRECTORY_SEPARATOR . '"' . $linha[0] . '"' . DIRECTORY_SEPARATOR . 'image_temp*';


        } else {
            $comando .= 'rm -Rf ~/' . FTPPATH . 'tutoriais' . DIRECTORY_SEPARATOR . '"' . $linha[0] . '"' . DIRECTORY_SEPARATOR . 'image_temp* && ';

        }
    }
    echo $comando;
    $file=fopen('tutoriais/exclude_temp.sh', 'w+');
    fwrite($file,$comando);
    fclose($file);

}
else{
    $fun->saiDaqui();
}

?>
</blockquote>

