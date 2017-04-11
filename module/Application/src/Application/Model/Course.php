<?php
namespace Application\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Course
{

    public $id;

    public $course;

    public $description;

    public $author_id;

    public $is_active;
    

    public function exchangeArray($data)
    {
        $this->id = (! empty($data['id'])) ? $data['id'] : null;
        $this->course = (! empty($data['course'])) ? $data['course'] : null;
        $this->description = (! empty($data['description'])) ? $data['description'] : null;
        $this->author_id = (! empty($data['author_id'])) ? $data['author_id'] : null;
        $this->is_active = (! empty($data['is_active'])) ? $data['is_active'] : null;
    }

    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

}
