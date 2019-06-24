<?php
namespace Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\ConvertTemplate;

/**
 * Interceptor class for @see \Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\ConvertTemplate
 */
class Interceptor extends \Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\ConvertTemplate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Ves\PageBuilder\Helper\Builder $builderHelper, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $registry, $resultLayoutFactory, $builderHelper, $logger);
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
