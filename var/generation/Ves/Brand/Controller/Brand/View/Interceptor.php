<?php
namespace Ves\Brand\Controller\Brand\View;

/**
 * Interceptor class for @see \Ves\Brand\Controller\Brand\View
 */
class Interceptor extends \Ves\Brand\Controller\Brand\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Ves\Brand\Model\Brand $brandModel, \Magento\Framework\Registry $coreRegistry, \Ves\Brand\Model\Layer\Resolver $layerResolver, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Ves\Brand\Helper\Data $brandHelper)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $resultPageFactory, $brandModel, $coreRegistry, $layerResolver, $resultForwardFactory, $brandHelper);
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
