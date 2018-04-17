<?php

namespace Shenxianshop\Models;

class Topic extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="topic_id", type="integer", length=10, nullable=false)
     */
    protected $topic_id;

    /**
     *
     * @var string
     * @Column(column="topic_title", type="string", length=100, nullable=true)
     */
    protected $topic_title;

    /**
     *
     * @var string
     * @Column(column="topic_image", type="string", length=100, nullable=true)
     */
    protected $topic_image;

    /**
     *
     * @var string
     * @Column(column="topic_background_color", type="string", length=20, nullable=true)
     */
    protected $topic_background_color;

    /**
     *
     * @var string
     * @Column(column="topic_background", type="string", length=100, nullable=true)
     */
    protected $topic_background;

    /**
     *
     * @var string
     * @Column(column="topic_content", type="string", nullable=true)
     */
    protected $topic_content;

    /**
     *
     * @var string
     * @Column(column="topic_repeat", type="string", length=20, nullable=true)
     */
    protected $topic_repeat;

    /**
     *
     * @var integer
     * @Column(column="topic_state", type="integer", length=1, nullable=true)
     */
    protected $topic_state;

    /**
     *
     * @var integer
     * @Column(column="topic_margin_top", type="integer", length=3, nullable=true)
     */
    protected $topic_margin_top;

    /**
     *
     * @var integer
     * @Column(column="ctime", type="integer", length=11, nullable=true)
     */
    protected $ctime;

    /**
     * Method to set the value of field topic_id
     *
     * @param integer $topic_id
     * @return $this
     */
    public function setTopicId($topic_id)
    {
        $this->topic_id = $topic_id;

        return $this;
    }

    /**
     * Method to set the value of field topic_title
     *
     * @param string $topic_title
     * @return $this
     */
    public function setTopicTitle($topic_title)
    {
        $this->topic_title = $topic_title;

        return $this;
    }

    /**
     * Method to set the value of field topic_image
     *
     * @param string $topic_image
     * @return $this
     */
    public function setTopicImage($topic_image)
    {
        $this->topic_image = $topic_image;

        return $this;
    }

    /**
     * Method to set the value of field topic_background_color
     *
     * @param string $topic_background_color
     * @return $this
     */
    public function setTopicBackgroundColor($topic_background_color)
    {
        $this->topic_background_color = $topic_background_color;

        return $this;
    }

    /**
     * Method to set the value of field topic_background
     *
     * @param string $topic_background
     * @return $this
     */
    public function setTopicBackground($topic_background)
    {
        $this->topic_background = $topic_background;

        return $this;
    }

    /**
     * Method to set the value of field topic_content
     *
     * @param string $topic_content
     * @return $this
     */
    public function setTopicContent($topic_content)
    {
        $this->topic_content = $topic_content;

        return $this;
    }

    /**
     * Method to set the value of field topic_repeat
     *
     * @param string $topic_repeat
     * @return $this
     */
    public function setTopicRepeat($topic_repeat)
    {
        $this->topic_repeat = $topic_repeat;

        return $this;
    }

    /**
     * Method to set the value of field topic_state
     *
     * @param integer $topic_state
     * @return $this
     */
    public function setTopicState($topic_state)
    {
        $this->topic_state = $topic_state;

        return $this;
    }

    /**
     * Method to set the value of field topic_margin_top
     *
     * @param integer $topic_margin_top
     * @return $this
     */
    public function setTopicMarginTop($topic_margin_top)
    {
        $this->topic_margin_top = $topic_margin_top;

        return $this;
    }

    /**
     * Method to set the value of field ctime
     *
     * @param integer $ctime
     * @return $this
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;

        return $this;
    }

    /**
     * Returns the value of field topic_id
     *
     * @return integer
     */
    public function getTopicId()
    {
        return $this->topic_id;
    }

    /**
     * Returns the value of field topic_title
     *
     * @return string
     */
    public function getTopicTitle()
    {
        return $this->topic_title;
    }

    /**
     * Returns the value of field topic_image
     *
     * @return string
     */
    public function getTopicImage()
    {
        return $this->topic_image;
    }

    /**
     * Returns the value of field topic_background_color
     *
     * @return string
     */
    public function getTopicBackgroundColor()
    {
        return $this->topic_background_color;
    }

    /**
     * Returns the value of field topic_background
     *
     * @return string
     */
    public function getTopicBackground()
    {
        return $this->topic_background;
    }

    /**
     * Returns the value of field topic_content
     *
     * @return string
     */
    public function getTopicContent()
    {
        return $this->topic_content;
    }

    /**
     * Returns the value of field topic_repeat
     *
     * @return string
     */
    public function getTopicRepeat()
    {
        return $this->topic_repeat;
    }

    /**
     * Returns the value of field topic_state
     *
     * @return integer
     */
    public function getTopicState()
    {
        return $this->topic_state;
    }

    /**
     * Returns the value of field topic_margin_top
     *
     * @return integer
     */
    public function getTopicMarginTop()
    {
        return $this->topic_margin_top;
    }

    /**
     * Returns the value of field ctime
     *
     * @return integer
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("topic");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'topic';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Topic[]|Topic|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Topic|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'topic_id' => 'topic_id',
            'topic_title' => 'topic_title',
            'topic_image' => 'topic_image',
            'topic_background_color' => 'topic_background_color',
            'topic_background' => 'topic_background',
            'topic_content' => 'topic_content',
            'topic_repeat' => 'topic_repeat',
            'topic_state' => 'topic_state',
            'topic_margin_top' => 'topic_margin_top',
            'ctime' => 'ctime'
        ];
    }

}
