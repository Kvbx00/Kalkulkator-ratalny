<?php 

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{

    private $form;
    private $result;

    public function __construct()
    {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams()
    {
        $this->form->capital = getFromRequest('capital');
        $this->form->interest = getFromRequest('interest');
        $this->form->op = getFromRequest('op');
    }

    public function validate()
    {

        if (!(isset($this->form->capital) && isset($this->form->interest) && isset($this->form->op))) {
            return false;
        }


        if ($this->form->capital == "") {
            getMessages()->addError('Nie podano wysokości kwoty kredytu!');
        }
        if ($this->form->interest == "")
           getMessages()->addError('Nie podano wysokości kwoty kredytu!');


        if (! getMessages()->isError()) {
            if (!is_numeric($this->form->capital)) {
                getMessages()->addError('Pierwsza wartość nie jest liczbą');
            }
            if (!is_numeric($this->form->interest)) {
                getMessages()->addError('Druga wartość nie jest liczbą');
            }
        }

        return ! getMessages()->isError();
    }

    public function action_calcCompute(){

        $this->getparams();

        if ($this->validate()) {

            $this->form->capital = intval($this->form->capital);
            $this->form->interest = intval($this->form->interest);
            getMessages()->addInfo('Wpisano poprawne wartości.');

            switch ($this->form->op) {
                case '1':
                    // $this->result->result = $this->form->capital - $this->form->interest;
                    $this->months = 12;
                    break;
                case '2':
                    $this->months = 24;
                    break;
                case '3':
                    $this->months = 36;
                    break;
                case '4':
                    $this->months = 48;
                    break;
                case '5':
                    $this->months = 60;
                    break;
            }

            $this->result->result = ($this->form->capital + (($this->form->capital * $this->form->interest) / 100)) / $this->months;
            getMessages()->addInfo('Rata kredytu została obliczona.');
        }
        $this->generateView();
    }

    public function action_calcShow(){
		$this->generateView();
	}

    public function generateView()
    {
        global $user;

        // getSmarty()->assign('user',$user);
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        
        getSmarty()->assign('page_title', 'Kalkulator kredytowy');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('calc.tpl');
    }
}
