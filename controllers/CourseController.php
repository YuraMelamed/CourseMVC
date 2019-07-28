<?php

class CourseController extends Controller
{
    public $model = 'Course';

    public function actionIndex()
    {
        $this->view->render('course/index', [
            'pageTitle' => 'Course',
            'courses' => Course::giveCourse(),
        ]);
    }
}