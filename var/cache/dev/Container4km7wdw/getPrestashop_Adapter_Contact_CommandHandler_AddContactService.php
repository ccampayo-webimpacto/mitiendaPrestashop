<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.contact.command_handler.add_contact' shared service.

return $this->services['prestashop.adapter.contact.command_handler.add_contact'] = new \PrestaShop\PrestaShop\Adapter\Contact\CommandHandler\AddContactHandler(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
