<?php
namespace Codazon\Utility\Controller\Adminhtml\Theme\Import;

/**
 * Interceptor class for @see \Codazon\Utility\Controller\Adminhtml\Theme\Import
 */
class Interceptor extends \Codazon\Utility\Controller\Adminhtml\Theme\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Codazon\ThemeOptions\Model\Config\Structure $configStructure, \Codazon\ThemeOptions\Model\Config $backendConfig, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Registry $registry, \Codazon\ThemeOptions\Setup\Model\Page $pageSetup, \Codazon\ThemeOptions\Setup\Model\Block $blockSetup, \Codazon\ThemeOptions\Setup\Model\Widget $widgetSetup, \Codazon\ThemeOptions\Setup\Model\Slideshow $slideshowSetup, \Codazon\ThemeOptions\Setup\Model\Blog\Category $blogCategorySetup, \Codazon\ThemeOptions\Setup\Model\Blog\Post $blogPostSetup, \Codazon\ThemeOptions\Setup\Model\MegaMenu $megaMenuSetup)
    {
        $this->___init();
        parent::__construct($context, $configStructure, $backendConfig, $resultPageFactory, $registry, $pageSetup, $blockSetup, $widgetSetup, $slideshowSetup, $blogCategorySetup, $blogPostSetup, $megaMenuSetup);
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
