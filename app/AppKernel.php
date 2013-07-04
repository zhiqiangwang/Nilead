<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            //  Nilead
            new Nilead\BreadcrumbsBundle\NileadBreadcrumbsBundle(),
            new Nilead\CartBundle\NileadCartBundle(),
            new Nilead\ContactBundle\NileadContactBundle(),
            new Nilead\InventoryBundle\NileadInventoryBundle(),
            // new Nilead\LoaderBundle\NileadLoaderBundle(),
            new Nilead\MenuBundle\NileadMenuBundle(),
            new Nilead\NotificationsBundle\NileadNotificationsBundle(),
            new Nilead\PaymentsBundle\NileadPaymentsBundle(),
            new Nilead\PricingBundle\NileadPricingBundle(),
            new Nilead\ProductBundle\NileadProductBundle(),
            new Nilead\ResourceBundle\NileadResourceBundle(),
            new Nilead\SalesBundle\NileadSalesBundle(),
            new Nilead\SearchBundle\NileadSearchBundle(),
            new Nilead\ShipmentsBundle\NileadShipmentsBundle(),
            new Nilead\TaxonomiesBundle\NileadTaxonomiesBundle(),
            new Nilead\ThemingBundle\NileadThemingBundle(),
            new Nilead\UtilityBundle\NileadUtilityBundle(),
            new Nilead\WebBundle\NileadWebBundle(),
            new Nilead\CoreBundle\NileadCoreBundle(),


            //  Core
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),


            //  3rd Party
            new FOS\UserBundle\FOSUserBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new JMS\TranslationBundle\JMSTranslationBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Liip\DoctrineCacheBundle\LiipDoctrineCacheBundle(),
            new Liip\ImagineBundle\LiipImagineBundle(),
            new Liip\ThemeBundle\LiipThemeBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new WhiteOctober\PagerfantaBundle\WhiteOctoberPagerfantaBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Nilead\SandboxBundle\NileadSandboxBundle();

            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
