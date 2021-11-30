<?php
/**
 * Created by Edison A.
 * Date: 5/24/16
 */
require_once("Object/Form.php");
class DataModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getForm()
    {
        $form = new Form();
        return array('form' => $form);
    }

}
