<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class CourseRelClass extends \Entity
{
    /**
     * @return \Entity\Repository\CourseRelClassRepository
     */
     public static function repository(){
        return \Entity\Repository\CourseRelClassRepository::instance();
    }

    /**
     * @return \Entity\CourseRelClass
     */
     public static function create(){
        return new self();
    }

    /**
     * @var string $course_code
     */
    protected $course_code;

    /**
     * @var integer $class_id
     */
    protected $class_id;


    /**
     * Set course_code
     *
     * @param string $value
     * @return CourseRelClass
     */
    public function set_course_code($value)
    {
        $this->course_code = $value;
        return $this;
    }

    /**
     * Get course_code
     *
     * @return string 
     */
    public function get_course_code()
    {
        return $this->course_code;
    }

    /**
     * Set class_id
     *
     * @param integer $value
     * @return CourseRelClass
     */
    public function set_class_id($value)
    {
        $this->class_id = $value;
        return $this;
    }

    /**
     * Get class_id
     *
     * @return integer 
     */
    public function get_class_id()
    {
        return $this->class_id;
    }
}