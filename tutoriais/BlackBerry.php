<p>Acesse o endereço a seguir e consulte as informações de configurações do aparelho de acordo com o seu modelo: <a rel="nofollow" target="_blank" class="external free" href="http://br.blackberry.com/services/internet/email.jsp#tab_tab_email_setup">http://br.blackberry.com/services/internet/email.jsp#tab_tab_email_setup</a>.
</p><p><br />
</p>
<h4> <span class="mw-headline" id="Seguem_as_configura.C3.A7.C3.B5es_que_geralmente_s.C3.A3o_necess.C3.A1rias:">Seguem as configurações que geralmente são necessárias:</span></h4>
<pre>
Endereço de e-mail no formato: <b><?php echo $email;?></b>

Servidor de entrada: <b>mbox.<?php echo $email_explode[1];?></b>

Servidor de saída: <b>smtp.<?php echo $email_explode[1];?></b>

Nome da conta no formato: <b><?php echo $email_explode[0].'='.$email_explode[1];?></b>

Senha: <b>senha do seu e-mail</b>
</pre>
<p><br />
O nome da conta de e-mail sempre é no formato: "usuario<strong>=</strong>seuwebsite.com". Por exemplo, se a sua conta de e-mail é: "<?php echo $email;?>", sua conta de e-mail a ser configurada será: "<?php echo $email_explode[0].'='.$email_explode[1];?>".
</p><p>Observe que é similar ao endereço de e-mail, porém com o sinal de igualdade ( <strong>=</strong> ) no lugar do sinal arroba ( <strong>@</strong> ).
</p><p>Caso exista alguma dúvida adicional quanto à configuração do serviço de e-mails neste celular, favor entre em contato com sua operadora de telefonia celular.
</p>

