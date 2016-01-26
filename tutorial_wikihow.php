<div class="alert alert-warning fade in"><a data-dismiss="alert" class="close">&times;</a>Para saber
    como criar um tutorial, clique neste <a href="#" data-toggle="modal" data-target="#modelo_tutorial" style="color: #444;text-decoration: none">link</a></div>
<div class="modal fade in" id="modelo_tutorial" role="dialog" >
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Como criar um tutorial:</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th colspan="2" style="text-align: center">Funções/Variáveis pré definidas</th>
                    </tr>
                    <tr>
                        <th style="text-align: center">Nome</th>
                        <th style="text-align: center">Função</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>$email</td>
                        <td>Tem o valor do e-mail digitado pelo usuário</td>
                    </tr>
                    <tr>
                        <td>$email_explode[0]</td>
                        <td>Tem o valor do conteúdo antes do @ da variável $email</td>
                    </tr>

                    <tr>
                        <td>$email_explode[1]</td>
                        <td>Tem o valor do conteúdo após o @ da variável $email</td>
                    </tr>

                    <tr>
                        <td>IMG($url)</td>
                        <td>O sistema usa o lightbox. Para que não seja necessário escrever a sintaxe toda vez que utilizar uma imagem, foi criada esta função. $url é a URL da imagem.</td>
                    </tr>
                    <tr>
                        <td>$nome_conta</td>
                        <td>Contém o provavél nome da conta escolhido pelo usuário.</td>
                    </tr>
                    <tr>
                        <td>$i</td>
                        <td>Contém o valor de 1 para o controle das imagens temporárias.</td>
                    </tr>
                    <tr>
                        <td>PATH</td>
                        <td>Constante que aponta para a pasta <?php echo FTPPATH;?>tutoriais/Nome do Tutorial/</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th colspan="2" style="text-align: center">Funções para escrita em imagens</th>
                    </tr>
                    <tr>
                        <th style="text-align: center">Nome</th>
                        <th style="text-align: center">Função</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>$imagem=imagecreatefrompng('Img1.png');</td>
                        <td>Cria uma imagem baseada no png Img1.png e a introduz na variável $imagem</td>
                    </tr>
                    <tr>
                        <td>$preto=imagecolorallocate($imagem,0,0,0);</td>
                        <td>Introduz a cor preto na variavel $preto. Segue os padrões RGB. Precisa dizer a qual imagem está se referindo. No meu caso, é a $imagem.</td>
                    </tr>

                    <tr>
                        <td>imagepng($imagem,PATH.'image_temp'.$i.'.png');</td>
                        <td>Salva a imagem image_temp'.$i.'.png no diretório  <?php echo FTPPATH;?>tutoriais/Nome do Tutorial</td>
                    </tr>

                    <tr>
                        <td>imagedestroy($imagem)</td>
                        <td>Destroe a imagem. Sempre utilize essa função após gerar uma imagem para economia de espaço na memória.</td>
                    </tr>
                    <tr>
                        <td>IMG(PATH."image_temp$i.png");</td>
                        <td>Mostrar a imagem recém criada utilizando lightbox.</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th colspan="2" style="text-align: center">Status de tutoriais</th>
                    </tr>
                    <tr>
                        <th style="text-align: center">Nome</th>
                        <th style="text-align: center">Representação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>OK</td>
                        <td>O tutorial está em funcionamento e pode ser editado a qualquer momento.</td>
                    </tr>
                    <tr>
                        <td>VERIFICANDO</td>
                        <td>O tutorial está em funcionamento e foi editado. Está aguardando a administração verificar.</td>
                    </tr>

                    <tr>
                        <td>ERRO</td>
                        <td>O tutorial não está em funcionamento. Deve ser verificado por um dos administradores o mais rápido possível.</td>
                    </tr>

                    <tr>
                        <td>A VERIFICAR</td>
                        <td>O tutorial foi incluído e aguarda a liberação da administração.</td>
                    </tr>
                    <tr>
                        <td>REMOVER</td>
                        <td>Este tutorial e todos os seus arquivos serão removidos as 6 horas do dia em questão. Caso já tenha passado deste período, a exclusão ocorrerá no próximo dia.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <input type="button" value="Fechar" data-dismiss="modal" class="btn btn-danger">
            </div>
        </div>
    </div>
</div>