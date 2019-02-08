<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.resetting.controller' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ContainerAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Controller\\ResettingController.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Util\\TokenGeneratorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Util\\TokenGenerator.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Mailer\\MailerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Mailer\\NoopMailer.php';

$this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.resetting.form.factory']) ? $this->services['fos_user.resetting.form.factory'] : $this->load('getFosUser_Resetting_Form_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.token_generator']) ? $this->services['fos_user.util.token_generator'] : ($this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator())) && false ?: '_'}, ${($_ = isset($this->services['fos_user.mailer']) ? $this->services['fos_user.mailer'] : ($this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\NoopMailer())) && false ?: '_'}, 7200);

$instance->setContainer($this);

return $instance;
