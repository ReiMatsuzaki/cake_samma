<?php
App::uses('AppController', 'Controller');

class SanmaDatasController extends AppController {

    public function index() {
        $datas = $this->SanmaData->find('all');
        $this->set('datas', $datas);
    }

    public function add() {
        if($this->request->is('post')) {
            $this->SanmaData->save($this->request->data);
        }
    }
}