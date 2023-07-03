<?php
/**
 * @package FishPig_WordPress_NoXmlSitemapIntegration
 * @author  Ben Tideswell (ben@fishpig.com)
 * @url     https://fishpig.co.uk/magento/wordpress-integration/
 */
// phpcs:ignoreFile -- long lines
use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'FishPig_WordPress_NoXmlSitemapIntegration',
    __DIR__
);
