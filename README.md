# MauticTestConfigBundle
Plugin for Mautic.org for testing configuration setting

## use
- Go to admin->plugin
- click on the TestConfig
- in the modal, you can enter 2 strings thet are saved in configuration

## retriving data  
add this code in a controller (not tested elsewhere)

    // config from integration
    /** @var  MauticPlugin\MauticWeezeventBundle\Integration\WeezeventIntegration $TestConfig */
    $TestConfig = $this->factory->getHelper('integration')->getIntegrationObject('TestConfig');

    //retriving all keys
    /** @var Array $keys */
    $keys = $TestConfig->getKeys();

    // mapping
    /** @var Array $mapping */
    $mapping=$TestConfig->getIntegrationSettings()->getFeatureSettings()["leadFields"];

    /** @var Array $fieldsInfo */
    $fieldsInfo = $TestConfig->getFormLeadFields();
