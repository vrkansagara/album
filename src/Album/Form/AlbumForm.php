<?php
/**
 * Created by PhpStorm.
 * User: vallabh
 * Date: 27/10/17
 * Time: 9:21 AM
 */

namespace Album\Form;

use Zend\Form\Form;

class AlbumForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('album');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'title',
            'type' => 'Text',
            'options' => array(
                'label' => 'Title',
            ),
        ));
        $this->add(array(
            'name' => 'artist',
            'type' => 'Text',
            'options' => array(
                'label' => 'Artist',
            ),
        ));
        $this->add(array(
            'name' => 'status',
            'type' => 'Select',
            'options' => array(
                'label' => 'Priority',
                'value_options' => array(
                    0 => 'Inactive',
                    1 => 'Active',
                ),
            ),
        ));
        $this->add(
            array(
                'name' => 'submit',
                'type' => 'Submit',
                'attributes' => array(
                    'value' => 'Go',
                    'id' => 'submitbutton',
                ),
            )
        );
    }
}