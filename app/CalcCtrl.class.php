<?php

require_once $conf->root_path . '/libs/Smarty.class.php';
require_once $conf->root_path . '/libs/Messages.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';

class CalcCtrl
{

    private $messages;
    private $form;
    private $result;

    public function __construct()
    {
        $this->messages = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams()
    {
        $this->form->capital = isset($_REQUEST['capital']) ? $_REQUEST['capital'] : null;
        $this->form->interest = isset($_REQUEST['interest']) ? $_REQUEST['interest'] : null;
        $this->form->op = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;
    }

    public function validate()
    {

        if (!(isset($this->form->capital) && isset($this->form->interest) && isset($this->form->op))) {
            return false;
        }


        if ($this->form->capital == "") {
            $this->messages->addError('Nie podano wysokości kwoty kredytu!');
        }
        if ($this->form->interest == "")
            $this->messages->addError('Nie podano wysokości kwoty kredytu!');


        if (!$this->messages->isError()) {
            if (!is_numeric($this->form->capital)) {
                $this->messages->addError('Pierwsza wartość nie jest liczbą');
            }
            if (!is_numeric($this->form->interest)) {
                $this->messages->addError('Druga wartość nie jest liczbą');
            }
        }

        return !$this->messages->isError();
    }

    function process()
    {
        $this->getparams();

        if ($this->validate()) {

            $this->form->capital = intval($this->form->capital);
            $this->form->interest = intval($this->form->interest);
            $this->messages->addInfo('Wpisano poprawne wartości.');

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

            $this->messages->addInfo('Rata kredytu została obliczona.');

            $this->result->result = ($this->form->capital + (($this->form->capital * $this->form->interest) / 100)) / $this->months;
        }
        $this->generateView();
    }


    public function generateView()
    {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'Kalkulator kredytowy');
        $smarty->assign('page_description', 'Szablonowanie Smarty');
        $smarty->assign('page_header', 'Szablony Smarty');

        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);
        $smarty->assign('messages', $this->messages);

        $smarty->display($conf->root_path . '/app/calc.html');
    }
}
