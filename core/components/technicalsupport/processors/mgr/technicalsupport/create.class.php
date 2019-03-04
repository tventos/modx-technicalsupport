<?php
class TechnicalsupportHistoryCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'TechnicalsupportHistory';
    
    /**
     * var modX
     */
    public function beforeSet() {
        /* Invoke event */
        $this->modx->invokeEvent('technicalSupportOnBeforeSent', $this->getProperties());
        $this->setProperty('create_at', date('d.m.Y, H:i'));
        
        $this->modx->getService('mail', 'mail.modPHPMailer');
        $this->modx->mail->set(modMail::MAIL_FROM, $this->modx->getOption('emailsender'));
        $this->modx->mail->set(modMail::MAIL_FROM_NAME, $this->modx->getOption('technicalsupport_namesender'));
        $this->modx->mail->address('to', $this->modx->getOption('technicalsupport_email'));
        $this->modx->mail->set(modMail::MAIL_SUBJECT, $this->modx->getOption('technicalsupport_email_subject'));
        $this->modx->mail->set(modMail::MAIL_BODY, $this->modx->getChunk('technicalSupport.EmailTpl', $this->getProperties()));
        $this->modx->mail->setHTML(true);
        if (!$this->modx->mail->send()) {
            $this->modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$this->modx->mail->mailer->ErrorInfo);
        }
        
        $this->modx->mail->reset();
        
        return parent::beforeSet();
    }
}

return "TechnicalsupportHistoryCreateProcessor";