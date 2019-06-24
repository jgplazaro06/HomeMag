<?php
namespace Ves\PageBuilder\Controller\Livecss\Generate;

/**
 * Interceptor class for @see \Ves\PageBuilder\Controller\Livecss\Generate
 */
class Interceptor extends \Ves\PageBuilder\Controller\Livecss\Generate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Filesystem $filesystem, \Magento\Backend\Model\Auth\Session $authSession, \Ves\PageBuilder\Helper\Data $dataHelper)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $storeManager, $filesystem, $authSession, $dataHelper);
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
