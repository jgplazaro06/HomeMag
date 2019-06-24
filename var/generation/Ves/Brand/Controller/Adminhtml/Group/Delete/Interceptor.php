<?php
namespace Ves\Brand\Controller\Adminhtml\Group\Delete;

/**
 * Interceptor class for @see \Ves\Brand\Controller\Adminhtml\Group\Delete
 */
class Interceptor extends \Ves\Brand\Controller\Adminhtml\Group\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Ves\Brand\Helper\Data $viewHelper, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileFactory, $viewHelper, $layoutFactory, $resultLayoutFactory, $resultPageFactory);
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
