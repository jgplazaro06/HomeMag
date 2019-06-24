<?php
namespace Ves\BaseWidget\Block\Widget\Dealproduct;

/**
 * Interceptor class for @see \Ves\BaseWidget\Block\Widget\Dealproduct
 */
class Interceptor extends \Ves\BaseWidget\Block\Widget\Dealproduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Reports\Model\ResourceModel\Product\CollectionFactory $reportCollection, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\App\Http\Context $httpContext, \Ves\BaseWidget\Model\Product $productModel, \Magento\Cms\Model\Block $blockModel, \Magento\Catalog\Model\Category $categoryModel, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $productCollectionFactory, $reportCollection, $catalogProductVisibility, $httpContext, $productModel, $blockModel, $categoryModel, $data);
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
