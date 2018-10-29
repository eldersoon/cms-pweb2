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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('jquery.bxslider.css') ?>
    <?= $this->Html->css('dropify.css') ?>
    <?= $this->Html->css('dashboard.css') ?>
    <?= $this->Html->css('dropify.ttf') ?> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

    <nav id="navbar" class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
       
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">CMS pWEB</a>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap"><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login'], array('escape' => false, 'class' => 'nav-link')); ?></li>
        </ul>   
   </nav>

    <div id="form" class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
        <div class="panel">
            <h2 class="text-center">Registrar novo usuário</h2>
                <?= $this->Form->create() ?>
                <?= $this->Form->control('name') ?>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('password', array('type' => 'password')) ?>
                <?= $this->Form->button('Registrar', array('class' => 'button')) ?>
                <?= $this->Form->end() ?>
        </div>
    </div>
</div>





    <?= $this->Html->script('jquery-slim.min.js') ?>
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('dropify.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery.bxslider.js') ?>
    <?= $this->Html->script('basics.js') ?>
    <?= $this->Html->script('feather.min.js') ?>

</body>
</html>
