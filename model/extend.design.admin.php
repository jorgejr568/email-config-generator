<?php

/**
 * Created by PhpStorm.
 * User: jorge-jr
 * Date: 20/03/16
 * Time: 15:46
 */
class designAdmin
{
    public function headers($frameworksNeeded){
        global $PARAMS;
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="<?= siteURL;?>headers/jquery/jquery.min.js"></script>
        <script type="text/javascript">
            var origin={
                "siteURL": "<?= siteURL;?>",
                "getSiteURL": function () {
                    return "<?= siteURL;?>";
                },
                "params": <?= json_encode($PARAMS);?>
            }
        </script>
        <?
        if(in_array('bootstrap',$frameworksNeeded)){
            echo "<link rel=\"stylesheet\" href=\"".siteURL."headers/bootstrap/css/bootstrap.min.css\"><script type=\"text/javascript\" src=\"".siteURL."headers/bootstrap/js/bootstrap.min.js\"></script><link href=\"".siteURL."headers/metisMenu/metisMenu.min.css\" rel=\"stylesheet\"><link href=\"".siteURL."headers/origin/css/sb-admin-2.css\" rel=\"stylesheet\"><script src=\"".siteURL."headers/metisMenu/metisMenu.min.js\"></script>";
        }
        if(in_array('select2',$frameworksNeeded)){
            echo "<link rel=\"stylesheet\" href=\"".siteURL."headers/select2/css/select2.min.css\"><script type=\"text/javascript\" src=\"".siteURL."headers/select2/js/select2.min.js\"></script><script type=\"text/javascript\" src=\"".siteURL."headers/select2/js/language/pt-BR.js\"></script>";
        }
        if(in_array('datatables',$frameworksNeeded)){
            echo "<link rel=\"stylesheet\" href=\"".siteURL."headers/datatables/dataTables.bootstrap.min.css\"><script type=\"text/javascript\" src=\"".siteURL."headers/datatables/jquery.dataTables.min.js\"></script>
        <script type=\"text/javascript\" src=\"".siteURL."headers/datatables/dataTables.bootstrap.min.js\"></script>";
        }
        if(in_array('font-awesome',$frameworksNeeded)){
            echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">";
        }
        if(in_array('sweetalert',$frameworksNeeded)){
            echo "<link rel=\"stylesheet\" href=\"".siteURL."headers/sweetalert/sweetalert.css\"><script type=\"text/javascript\" src=\"".siteURL."headers/sweetalert/sweetalert.min.js\"></script>";
        }
        if(in_array('jquery-mask',$frameworksNeeded)){
            echo "<script type=\"text/javascript\" src=\"".siteURL."headers/jquery/jquery-mask.js\"></script>";
        }
        if(file_exists(PATH."view/headers/origin/".$PARAMS[0].DIRECTORY_SEPARATOR.$PARAMS[1].".js")){
            echo "<script type='text/javascript' src='".siteURL."headers/origin/".$PARAMS[0].DIRECTORY_SEPARATOR.$PARAMS[1].".js'></script>";
        }
        if(file_exists(PATH."view/headers/origin/".$PARAMS[0].DIRECTORY_SEPARATOR.$PARAMS[1].".css")){
            echo "<link rel='stylesheet' href='".siteURL."headers/origin/".$PARAMS[0].DIRECTORY_SEPARATOR.$PARAMS[1].".css' ".PATH."view/headers/origin/".$PARAMS[0].DIRECTORY_SEPARATOR.$PARAMS[1].".css".">";
        }

        echo "<script type=\"text/javascript\" src=\"".siteURL."headers/origin/js/script.js\"></script>";
        echo "<link rel='stylesheet' href='".siteURL."headers/origin/css/style.css'>";
    }
    public function menu(){
        ?>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0" id="navBar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand principal-link" href="admin">ADMIN - Biblioteca</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Procurar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="admin"><i class="fa fa-dashboard fa-fw"></i> Principal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Alunos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/cadastrar.aluno">Cadastrar aluno</a>
                                </li>
                                <li>
                                    <a href="admin/gerenciar.alunos">Gerenciar alunos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Livros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/cadastrar.livro">Cadastrar livro</a>
                                </li>
                                <li>
                                    <a href="admin/gerenciar.livros">Gerenciar livros</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file fa-fw"></i> Categorias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin/cadastrar.categoria">Cadastrar categoria</a>
                                </li>
                                <li>
                                    <a href="admin/gerenciar.categorias">Gerenciar categorias</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?
    }
    public function breadcrumb(){
        echo "<ul class=\"breadcrumb\">";
        $link=null;
        $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
        foreach($crumbs as $i => $crumb){
            if(!empty($crumb)){

                $selected=(count($crumbs)-1)==$i?true:false;
                if($selected){
                    echo "<li class='active'>".strtoupper(str_replace(array(".php","_","."),array(""," "," "),$crumb))."</li>";
                }
                else {
                    echo "<li>" . strtoupper(str_replace(array(".php", "_", "."), array("", " ", " "), $crumb)) . "</li>";
                }
            }
        }
        echo "</ul>";
    }

}