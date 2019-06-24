<?php
namespace Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\MassDisable;

/**
 * Interceptor class for @see \Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\MassDisable
 */
class Interceptor extends \Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\MassDisable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Ves\PageBuilder\Model\ResourceModel\Block\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory);
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
