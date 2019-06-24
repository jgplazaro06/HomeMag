<?php
namespace Ves\Productlist\Controller\Index\Product;

/**
 * Interceptor class for @see \Ves\Productlist\Controller\Index\Product
 */
class Interceptor extends \Ves\Productlist\Controller\Index\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Ves\Productlist\Model\Product $productModel)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $productModel);
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