<?php tr8n_begin_block_with_options(array("source" => "navigation")) ?>

<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><strong>Welp</strong></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#"><?php tre("About Us") ?></a></li>
                <li><a href="#"><?php tre("Search") ?></a></li>
                <li><a href="#"><?php tre("Write a Review") ?></a></li>
                <li><a href="#"><?php tre("Find Friends") ?></a></li>
                <li><a href="#"><?php tre("Help") ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php tre("More {caret}", array("caret" => '<b class="caret"></b>')) ?></a>

                    <ul class="dropdown-menu">
                        <li><a href="#"><?php tre("Log in") ?></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><?php tre("Sign Up") ?></a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</div>

<?php tr8n_finish_block_with_options() ?>