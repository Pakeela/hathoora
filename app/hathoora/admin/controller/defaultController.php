<?php
namespace hathoora\admin\controller;

/**
 * Default controller
 */
class defaultController extends baseController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Homepage action
     */
    public function index()
    {
        $this->arrHTMLMetas['title']['value'] = 'Admin Panel';

        $arrTplParams = array(
            'widgets' => array(
                'recentTranslation' => array(
                    'title' => 'Recently Added Translations',
                    'url' => '/widget/recentTranslation'
                ),
                'recentTranslation' => array(
                    'title' => 'Recently Added Translations',
                    'url' => '/widget/recentTranslation'
                ),
            )
        );
        $template = $this->template('index.tpl.php', $arrTplParams);
        $response = $this->response($template);
        
        return $response;
    }    
}