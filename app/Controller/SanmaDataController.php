<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

class SanmaDataController extends AppController {

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
        if($this->request->data) {
            $this->set("company", $this->request->data['SanmaData']['company']);
            $this->set("person_c", $this->request->data['SanmaData']['person_c']);
            $this->set("contact", $this->request->data['SanmaData']['contact']);
            $this->set("person_m", $this->request->data['SanmaData']['person_m']);
        } else {
            $this->set("company", "no");
            $this->set("person_c", "no");
            $this->set("contact", "no");
            $this->set("person_m", "no");
        }
        /*
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
        */
    }

    public function table() {
        if($this->request->data) {
            $company = $this->request->data['SanmaData']['company'];
            $this->set('company', $company);
            $status = array(
                'conditions'=>array('SanmaData.company'=>$company));
            $datas = $this->SanmaData->find('all', $status);
            $this->set('datas',$datas);
        } else {
            $this->set("company", "no");
            $this->set("person_c", "no");
            $this->set("contact", "no");
            $this->set("person_m", "no");
            $this->set('datas',null);
        }
    }
}



