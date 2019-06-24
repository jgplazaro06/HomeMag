<?php
namespace Ves\PageBuilder\Controller\Adminhtml\Pagebuilder\InlineEdit;

/**
 * Interceptor class for @see \Ves\PageBuilder\Controller\Adminhtml\Pagebuilder\InlineEdit
 */
class Interceptor extends \Ves\PageBuilder\Controller\Adminhtml\Pagebuilder\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Cms\Api\PageRepositoryInterface $brandRepository, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Ves\PageBuilder\Model\Block $blockModel)
    {
        $this->___init();
        parent::__construct($context, $brandRepository, $jsonFactory, $blockModel);
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
