<?php
namespace Ves\Autosearch\Controller\Index\Ajaxgetproduct;

/**
 * Interceptor class for @see \Ves\Autosearch\Controller\Index\Ajaxgetproduct
 */
class Interceptor extends \Ves\Autosearch\Controller\Index\Ajaxgetproduct implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\CatalogSearch\Helper\Data $catalogSearchData, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Search\Model\QueryFactory $queryFactory, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Ves\Autosearch\Model\Search $autosearchModel, \Ves\Autosearch\Helper\Data $helper, \Magento\Catalog\Model\Category $categoryModel)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $catalogSearchData, $storeManager, $queryFactory, $layerResolver, $autosearchModel, $helper, $categoryModel);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
