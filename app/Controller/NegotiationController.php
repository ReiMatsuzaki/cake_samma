<?php
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

class NegotiationController extends AppController {

    public function index() {
        $this->modelClass=null;
        if($this->request->data){
            $result = Sanitize::stripAll(
                $this->request->data['text1']);
        } else {
            $result = "no data.";
        }
        $this->set("result", $result);
    }

    public function input() {
        $this->modelClass=null;
        if($this->request->data){
            $result1 = Sanitize::stripAll(
                $this->request->data['text1']);            
            $result2 = Sanitize::stripAll(
                $this->request->data['text2']);            
            $result3 = Sanitize::stripAll(
                $this->request->data['text3']);
        } else {
            $result1 = "no data.";
            $result2 = "no data.";
            $result3 = "no data.";
        }
        $this->set("result1", $result1);
        $this->set("result2", $result2);
        $this->set("result3", $result3);
    }

    public function tmp1() {
        $this->modelClass=null;
        if($this->request->data){
            $result = Sanitize::stripAll(
                $this->request->data['text1']);
        } else {
            $result = "no data.";
        }
        $this->set("result", $result);        
    }
}