<?php
class BackEndController extends CController
{
    public $layout='//layouts/column1';
    public $menu=array();
    public $breadcrumbs=array();
 
    public function filters()
    {
        return array(
            'accessControl',
        );
    }
 
    public function accessRules()
    {
        return array(
            array('allow',
                'users'=>array('*'),
                'actions'=>array('login'),
            ),
            array('allow',
                'users'=>array('@'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }
    
    public function beforeAction($action)
        {
            $dynamicTheme = 'simplex';
        
            if(isset($_REQUEST['mytheme']))
            {
                $dynamicTheme = $_REQUEST['mytheme'];
                //Yii::app()->request->cookies['dynamicTheme'] = new CHttpCookie(‘dynamicTheme’, $dynamicTheme);
                $cookie = new CHttpCookie('dynamicTheme', $dynamicTheme);
                $cookie->expire = time()+60*60*24*180; 
                Yii::app()->request->cookies['dynamicTheme'] = $cookie;
            }
            
            if(isset(Yii::app()->request->cookies['dynamicTheme']->value))
            {
                $dynamicTheme = Yii::app()->request->cookies['dynamicTheme']->value;
            }
            else
            {
                //Yii::app()->request->cookies['dynamicTheme'] = new CHttpCookie(‘dynamicTheme’, $dynamicTheme);
                $cookie = new CHttpCookie('dynamicTheme', $dynamicTheme);
                $cookie->expire = time()+60*60*24*180; 
                Yii::app()->request->cookies['dynamicTheme'] = $cookie;
            }
            
            //$dynamicTheme = (isset(Yii::app()->request->cookies['dynamicTheme']->value)) ?    Yii::app()->request->cookies['dynamicTheme']->value : ‘classic’;
            Yii::app()->theme=$dynamicTheme;
            
            return parent::beforeAction($action);
        }
}