<?php
namespace Ves\PageBuilder\Controller\Preview\Index;

/**
 * Interceptor class for @see \Ves\PageBuilder\Controller\Preview\Index
 */
class Interceptor extends \Ves\PageBuilder\Controller\Preview\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\ResourceConnection $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Ves\PageBuilder\Helper\Data $dataHelper, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resource, $storeManager, $resultPageFactory, $dataHelper, $registry);
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
