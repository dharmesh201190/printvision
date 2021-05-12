<?php

namespace LR\ArtworkDesign\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper 
{
    protected $_storeManager;
    protected $_inlineTranslation;
    protected $_transportBuilder;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation,
        \LR\ArtworkDesign\Model\Mail\TransportBuilder $transportBuilder,
        \Magento\Framework\App\Helper\Context $context
    ) {
        $this->_scopeConfig = $scopeConfig;
        $this->_storeManager = $storeManager;

        $this->_inlineTranslation = $inlineTranslation;
        $this->_transportBuilder = $transportBuilder;
        parent::__construct($context);
    }

    public function sendEmail($emailArray)
    {
        $store = $this->_storeManager->getStore()->getId();
        $template = $emailArray['template'];
        $from = $emailArray['from'];
        $to = $emailArray['to'];
        $subject = $emailArray['subject'];
        $email_body = $emailArray['email_body'];
        $attachment = '';
        if(isset($emailArray['attachment']) && !empty($emailArray['attachment']))
        {
            $attachment = $emailArray['attachment'];
        }
        $templatevar = $emailArray['templatevar'];

        $this->_inlineTranslation->suspend();
        $this->_transportBuilder
             ->setTemplateIdentifier($template) //'baby_registry_sendmail_email_template'
             ->setTemplateOptions(
                    [
                        'area' => \Magento\Framework\App\Area::AREA_FRONTEND, // this is using frontend area to get the template file
                        'store' => \Magento\Store\Model\Store::DEFAULT_STORE_ID,
                    ]
                )
             ->setFrom($from)
             ->addTo($recipientEmail)
             ->addAttachment(file_get_contents($attachment));
        try {
            $transport = $this->_transportBuilder->getTransport();
            $transport->sendMessage();
            $this->inlineTranslation->resume();
        } catch (\Exception $e) {
            echo $e->getMessage(); die;
        }
    }
}