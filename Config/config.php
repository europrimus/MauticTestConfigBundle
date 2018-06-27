<?php
return array(
  'name'        => 'Test Config',
  'description' => 'Testing configuration
---
Testing configuration storage and read<br>
Fork it on <a href="https://github.com/europrimus/MauticTestConfigBundle">github</a>',
  'author'      => 'Didier COURTY',
  'version'     => '1.1',
// The parameters that could be edited by config
  'parameters' => array(
    'TestConfig_bool' => false,
    'TestConfig_string1' => "",
    'TestConfig_string2' => "",
  ),

// registering the forms
  'services' => [
    'integrations' =>[
      'mautic.integration.testconfig' => [
        //'class' => MauticPlugin\MauticTestConfigBundle\EventListener\ConfigSubscriber::class,
        //'class' => 'MauticPlugin\MauticTestConfigBundle\EventListener\ConfigSubscriber',
        'class' => 'MauticPlugin\MauticTestConfigBundle\Integration\TestConfigIntegration',
      ],
    ],
  ],
);
