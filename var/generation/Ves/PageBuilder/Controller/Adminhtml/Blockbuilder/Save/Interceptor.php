<?php
namespace Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\Save;

/**
 * Interceptor class for @see \Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\Save
 */
class Interceptor extends \Ves\PageBuilder\Controller\Adminhtml\Blockbuilder\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ves\PageBuilder\Helper\Data $dataHelper, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($context, $dataHelper, $filesystem);
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
