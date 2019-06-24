<?php
namespace Ves\BaseWidget\Controller\Adminhtml\Basewidget\Connector;

/**
 * Interceptor class for @see \Ves\BaseWidget\Controller\Adminhtml\Basewidget\Connector
 */
class Interceptor extends \Ves\BaseWidget\Controller\Adminhtml\Basewidget\Connector implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Ves\BaseWidget\Helper\Data $viewHelper, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileFactory, $viewHelper, $filesystem, $layoutFactory, $storeManager, $resultLayoutFactory, $resultPageFactory);
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
