<?php
App::uses('AppModel', 'Model');

class SanmaData extends AppModel { 
    public $validate = array(
        'company'=>'notBlank'
    );
}


