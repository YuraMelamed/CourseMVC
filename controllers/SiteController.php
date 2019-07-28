<?php

class SiteController extends Controller
{
    public function actionIndex(){
        $this->view->render('site/index');
    }
}