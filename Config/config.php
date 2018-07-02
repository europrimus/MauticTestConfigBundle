<?php
return array(
  'name'        => 'Test Config',
  'description' => 'Testing configuration
---
Testing configuration storage and read<br>
Fork it on <a href="https://github.com/europrimus/MauticTestConfigBundle">github</a>',
  'author'      => 'Didier COURTY',
  'version'     => '1.3',
// registering the forms
  'services' => [
    'integrations' =>[
      'mautic.integration.testconfig' => [
        'class' => 'MauticPlugin\MauticTestConfigBundle\Integration\TestConfigIntegration',
      ],
    ],
  ],
);
