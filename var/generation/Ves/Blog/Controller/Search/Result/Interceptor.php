<?php
namespace Ves\Blog\Controller\Search\Result;

/**
 * Interceptor class for @see \Ves\Blog\Controller\Search\Result
 */
class Interceptor extends \Ves\Blog\Controller\Search\Result implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Ves\Blog\Helper\Data $blogHelper, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $resultPageFactory, $blogHelper, $resultForwardFactory, $registry);
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