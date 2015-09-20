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
        $ymd_opts = array(
            'type'=>'date',
            'dateFormat'=>'YMD',
            'monthNames'=>false,
            'empty'=>array(0=>'-'),
            'selected'=>array('year'=>0, 'month'=>0, 'day'=>0));
        $this->set('ymd_opts', $ymd_opts);
    }

    public function table() {
        $this->autoLayout = false;
        if($this->request->data) {
            
            // Insert search condition to this array 
            $cond_array = array(); 
            
            $data = $this->request->data;
            
            $date0ymd = $data['date0'];
            $date0 = date('Y-m-d', strtotime(strval($date0ymd['year']) . "-" . strval($date0ymd['month']) . "-" . strval($date0ymd['day'])));
            $this->set('date0', $date0);
            $date1ymd = $data['date1'];
            $date1 = date('Y-m-d', strtotime(strval($date1ymd['year']) . "-" . strval($date1ymd['month']) . "-" . strval($date1ymd['day'])));
            $this->set('date1', $date1);
            
            if($date0ymd['year']!=0 and $date0ymd['month']!=0 and $date0ymd['day']!=0)
                $cond_array += array('SanmaData.date >=' => $date0);
            if($date1ymd['year']!=0 and $date1ymd['month']!=0 and $date1ymd['day']!=0)
                $cond_array += array('SanmaData.date <=' => $date1);

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

            $memo_list = explode(" ", $data['memo']);
            $this->set('memo', $memo_list);
            foreach($memo_list as $memo) 
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



