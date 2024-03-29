<?php
namespace Ves\BaseWidget\Block\Widget\Singleproduct;

/**
 * Interceptor class for @see \Ves\BaseWidget\Block\Widget\Singleproduct
 */
class Interceptor extends \Ves\BaseWidget\Block\Widget\Singleproduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Url\Helper\Data $urlHelper, \Magento\Cms\Model\Block $blockModel, \Ves\BaseWidget\Helper\Data $dataHelper, \Magento\Catalog\Model\Product $productModel, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $urlHelper, $blockModel, $dataHelper, $productModel, $urlFinder, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        if (!$pluginInfo) {
            return parent::getImage($product, $imageId, $attributes);
        } else {
            return $this->___callPlugins('getImage', func_get_args(), $pluginInfo);
        }
    }
}
