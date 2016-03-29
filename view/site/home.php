<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <form onsubmit="return false;" name="formGenerateTutorial" class="form-horizontal">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-3"><label for="tutorialSelector" class="control-label">Selecione o tutorial</label></div>
                    <div class="col-md-9 tooltip-toggle" title="Selecione um tutorial" data-placement="bottom">
                        <select name="tutorialSelector" class="form-control select2" id="tutorialSelector" >
                            <option></option>
                            <?
                            require_once PATH."model/class.tutorial.php";
                            $tClass=new tutorial();

                                if ($dClass->isMobile()) {
                                    $tutoriais=$tClass->getPublishedTutoriais();
                                    foreach($tutoriais as $tutorial):
                                        $selected=$tutorial['id_tutorial']==$_GET['tutorial']?'selected':false;
                                        echo "<option value='".$tutorial['id_tutorial']."' $selected>".$tutorial['nome']."</option>";
                                    endforeach;

                                } else {
                                    $grupos = $tClass->getTutorialGroups();
                                    foreach($grupos as $grupo) {
                                        echo "<optgroup label='" . $grupo['nome'] . "'>";
                                        $tutoriais = $tClass->getTutoriaisFromOneGroup($grupo['id_grupo']);
                                        foreach ($tutoriais as $tutorial) {
                                            $selected=$tutorial['id_tutorial']==$_GET['tutorial']?'selected':false;
                                            echo "<option value='" . $tutorial['id_tutorial'] . "' $selected>" . $tutorial['nome'] . "</option>";
                                        }
                                    }

                                    }

                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-3"><label for="emailField" class="control-label">Informe o endereço de e-mail</label></div>
                    <div class="col-md-9 tooltip-toggle" title="Digite seu endereço de e-mail" data-placement="bottom">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <input name="emailField" class="form-control" id="emailField" type="text" value="<?= $_GET['email'];?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 not-padding-as-normal">
                <div class="form-group">
                    <div class="col-md-12">
                        <button class="btn btn-success btn-generate btn-block" type="button"><i class="fa fa-cogs"></i> Gerar tutorial</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12 hidden" id="tutorialBox"></div>
</div>
<link rel="stylesheet" href="<?= siteURL;?>headers/lightbox/lightbox.css">
<script src="<?= siteURL;?>headers/lightbox/lightbox.min.js"></script>
<?php
if(!empty($_GET['email']) && !empty($_GET['tutorial'])){
    ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.btn-generate').click();
        })
    </script>
    <?
}
?>