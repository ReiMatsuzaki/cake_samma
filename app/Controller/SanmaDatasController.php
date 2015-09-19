<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

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

    public function search() {
        if($this->request->is('post')) {
            $date = Sanitize::stripAll($this->request->data["SanmaData"]['date']);
            $company = Sanitize::stripAll($this->request->data['SanmaData']['company']);
            $person_c = Sanitize::stripAll($this->request->data['SanmaData']['person_c']);
            $contact = Sanitize::stripAll($this->request->data['SanmaData']['contact']);
            $person_m = Sanitize::stripAll($this->request->data['SanmaData']['person_m']);
            $this->redirect("./table/".$company."/".$person_c."/".$contact."/".$person_m);
        } else {
            $result = "no data.";
        }
        $this->set("result", $result);
    }

    public function table($company, $person_c, $contact, $person_m) {
        $this->set("company", $company);
        $this->set("person_c", $person_c);
        $this->set("contact", $contact);
        $this->set("person_m", $person_m);
    }
}



