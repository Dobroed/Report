<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class PhoneForm extends CFormModel
{
    public $phone;
    public $company;
    
    public function rules()
    {
        return array(
            array('phone, company', 'required'),
          array('phone', 'length', 'min'=>11, 'max'=>14, 'message' => 'длина телефона не меньше 11 и не больше 14'),
        );
    }
    
}

