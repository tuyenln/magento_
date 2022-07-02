<?php
namespace Btg\Checkout\Block\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessorInterface;

class OurLayoutProcessor implements LayoutProcessorInterface
{
    /**
     * @param array $jsLayout
     * @return array
     */
    public function process($jsLayout)
    {
        //%path_to_target_node% is the path to the component's node in checkout_index_index.
        unset($jsLayout['components']['checkout']['children']['sidebar']['children']['summary']['children']['summary-discount']);
        return $jsLayout;
    }
}
