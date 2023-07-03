<?php
/**
 *
 */
namespace FishPig\WordPress_NoXmlSitemapIntegration\Plugin;

use FishPig\WordPress\Model\Sitemap\ItemProvider;

class SitemapItemProviderPlugin
{
    /**
     *
     */
    public function aroundGetItems(
        ItemProvider $subject,
        \Closure $proceed,
        $storeId
    ): array {
        return [];
    }
}
