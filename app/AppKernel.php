<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            //  Nilead
            new Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),
            new Nilead\UtilityBundle\NileadUtilityBundle(),
            new Nilead\WebBundle\NileadWebBundle(),
            new Liip\DoctrineCacheBundle\LiipDoctrineCacheBundle(),
            new Nilead\LoaderBundle\NileadLoaderBundle(),
            new Nilead\ThemingBundle\NileadThemingBundle(),
            new Nilead\ProductBundle\NileadProductBundle(),
            new Nilead\ShipmentsBundle\NileadShipmentsBundle(),
            new Nilead\PaymentsBundle\NileadPaymentsBundle(),
            new Nilead\ContactBundle\NileadContactBundle(),
            new Nilead\PricingBundle\NileadPricingBundle(),
            new Nilead\InventoryBundle\NileadInventoryBundle(),
            new Nilead\MenuBundle\NileadMenuBundle(),
            new Nilead\SalesBundle\NileadSalesBundle(),
            new Nilead\CoreBundle\NileadCoreBundle(),

            new Sylius\Bundle\TaxonomiesBundle\SyliusTaxonomiesBundle(),

            //  Core
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),


            //  3rd party
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new JMS\TranslationBundle\JMSTranslationBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new FOS\RestBundle\FOSRestBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            // new Gregwar\CaptchaBundle\GregwarCaptchaBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Liip\ThemeBundle\LiipThemeBundle()
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
//            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }
}
