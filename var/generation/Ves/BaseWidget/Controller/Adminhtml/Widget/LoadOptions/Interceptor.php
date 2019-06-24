<?php
namespace Ves\BaseWidget\Controller\Adminhtml\Widget\LoadOptions;

/**
 * Interceptor class for @see \Ves\BaseWidget\Controller\Adminhtml\Widget\LoadOptions
 */
class Interceptor extends \Ves\BaseWidget\Controller\Adminhtml\Widget\LoadOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Widget\Helper\Conditions $conditionsHelper, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $conditionsHelper, $registry);
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
