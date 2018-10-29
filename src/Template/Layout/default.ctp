<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Benjamin Arrola
    </title>
    <?= $this->Html->meta('icon') ?>


    
    <?= $this->Html->css('style.css') ?> 
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('jquery.bxslider.css') ?>
    <?= $this->Html->css('dropify.css') ?>
    <?= $this->Html->css('dashboard.css') ?>
    <?= $this->Html->css('dropify.ttf') ?> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"> 


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <div id="alert">
            <?= $this->Flash->render() ?>
    </div>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
       
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href=""><?= $this->fetch('title') ?></a>
    
        <input class="form-control form-control-dark w-100" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap"><?= $this->Html->link('Sair', ['controller' => 'users', 'action' => 'logout'], array('escape' => false, 'class' => 'nav-link')); ?></li>
            </ul>
    </nav>

    <!--<?= $this->Html->tag('div'.$this->Flash->render(), '', array('id' => 'excep', 'class' => array('alert','alert-danger'))) ?>-->

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
            <ul class="nav flex-column">
                
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-users')).' Usuários', array('controller' => 'users', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link')); ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-newspaper')).' Notícias', array('controller' => 'news', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link') ); ?>
                </li>
                
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-images')).' Banners', array('controller' => 'banners', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link'));?>
                </li>

                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-info')).' Informações básicas', array('controller' => 'informations', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link'));?>
                
                </li>
                
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-image')).' Galeria de fotos', array('controller' => 'newsPhotos', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link'));?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-video')).' Galeria de vídeos', array('controller' => 'videos', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link'));?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-envelope')).' Fale conosco', array('controller' => 'messages', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link'));?>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../page/createpage.php">
                    <i class="fa fa-home"></i>
                    Páginas
                </a>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-question')).' FAQ', array('controller' => 'questions', 'action' => 'index'), array('escape' => false, 'class' => 'nav-link'));?>
                </li>
                
            </ul>
            </div>
            </nav>
        </div>
    </div>
    

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            
        
            <div class="container clearfix">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </main>        


    <footer>
    </footer>

    <?= $this->Html->script('jquery-slim.min.js') ?>
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('dropify.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery.bxslider.js') ?>
    <?= $this->Html->script('basics.js') ?>
    <?= $this->Html->script('feather.min.js') ?>

</body>
</html>
