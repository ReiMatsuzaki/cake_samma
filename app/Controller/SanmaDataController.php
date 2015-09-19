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
    }

    public function table() {
        $this->autoLayout = false;
        if($this->request->data) {
            
            // Insert search condition to this array 
            $cond_array = array(); 
            
            $data = $this->request->data['SanmaData'];
            
            $ymd = $data['ymd'];
            $this->set('ymd', $ymd);

            $company = $data['company'];
            $this->set('company', $company);
            if($company!="")
                $cond_array += array('SanmaData.company'=>$company);

            $person_c = $data['person_c'];
            $this->set('person_c', $person_c);
            if($person_c!="")
                $cond_array += array('SanmaData.person_c'=>$person_c);

            $contact = $data['contact'];
            $this->set('contact', $contact);
            if($contact!="")
                $cond_array += array('SanmaData.contact'=>$contact);

            $person_m = $data['person_m'];
            $this->set('person_m', $person_m);
            if($person_m!="")
                $cond_array += array('SanmaData.person_m'=>$person_m);

            $memo = $data['memo'];
            $this->set('memo', $memo);
            if($memo!="")
                $cond_array += array('SanmaData.memo LIKE'=>'%'.$memo.'%');

            $status = array('conditions'=>array("AND"=>$cond_array));
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



