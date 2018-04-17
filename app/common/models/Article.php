<?php

namespace Shenxianshop\Models;

class Article extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="article_id", type="integer", length=8, nullable=false)
     */
    protected $article_id;

    /**
     *
     * @var integer
     * @Column(column="cat_id", type="integer", length=5, nullable=false)
     */
    protected $cat_id;

    /**
     *
     * @var string
     * @Column(column="title", type="string", length=150, nullable=false)
     */
    protected $title;

    /**
     *
     * @var string
     * @Column(column="content", type="string", nullable=false)
     */
    protected $content;

    /**
     *
     * @var string
     * @Column(column="author", type="string", length=30, nullable=false)
     */
    protected $author;

    /**
     *
     * @var string
     * @Column(column="author_email", type="string", length=60, nullable=false)
     */
    protected $author_email;

    /**
     *
     * @var string
     * @Column(column="keywords", type="string", length=255, nullable=false)
     */
    protected $keywords;

    /**
     *
     * @var integer
     * @Column(column="article_type", type="integer", length=1, nullable=false)
     */
    protected $article_type;

    /**
     *
     * @var integer
     * @Column(column="is_open", type="integer", length=1, nullable=false)
     */
    protected $is_open;

    /**
     *
     * @var integer
     * @Column(column="add_time", type="integer", length=10, nullable=false)
     */
    protected $add_time;

    /**
     *
     * @var string
     * @Column(column="file_url", type="string", length=255, nullable=false)
     */
    protected $file_url;

    /**
     *
     * @var integer
     * @Column(column="open_type", type="integer", length=1, nullable=false)
     */
    protected $open_type;

    /**
     *
     * @var string
     * @Column(column="link", type="string", length=255, nullable=false)
     */
    protected $link;

    /**
     *
     * @var string
     * @Column(column="description", type="string", nullable=true)
     */
    protected $description;

    /**
     *
     * @var integer
     * @Column(column="click", type="integer", length=11, nullable=true)
     */
    protected $click;

    /**
     *
     * @var integer
     * @Column(column="publish_time", type="integer", length=11, nullable=true)
     */
    protected $publish_time;

    /**
     *
     * @var string
     * @Column(column="thumb", type="string", length=255, nullable=true)
     */
    protected $thumb;

    /**
     * Method to set the value of field article_id
     *
     * @param integer $article_id
     * @return $this
     */
    public function setArticleId($article_id)
    {
        $this->article_id = $article_id;

        return $this;
    }

    /**
     * Method to set the value of field cat_id
     *
     * @param integer $cat_id
     * @return $this
     */
    public function setCatId($cat_id)
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Method to set the value of field author
     *
     * @param string $author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Method to set the value of field author_email
     *
     * @param string $author_email
     * @return $this
     */
    public function setAuthorEmail($author_email)
    {
        $this->author_email = $author_email;

        return $this;
    }

    /**
     * Method to set the value of field keywords
     *
     * @param string $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Method to set the value of field article_type
     *
     * @param integer $article_type
     * @return $this
     */
    public function setArticleType($article_type)
    {
        $this->article_type = $article_type;

        return $this;
    }

    /**
     * Method to set the value of field is_open
     *
     * @param integer $is_open
     * @return $this
     */
    public function setIsOpen($is_open)
    {
        $this->is_open = $is_open;

        return $this;
    }

    /**
     * Method to set the value of field add_time
     *
     * @param integer $add_time
     * @return $this
     */
    public function setAddTime($add_time)
    {
        $this->add_time = $add_time;

        return $this;
    }

    /**
     * Method to set the value of field file_url
     *
     * @param string $file_url
     * @return $this
     */
    public function setFileUrl($file_url)
    {
        $this->file_url = $file_url;

        return $this;
    }

    /**
     * Method to set the value of field open_type
     *
     * @param integer $open_type
     * @return $this
     */
    public function setOpenType($open_type)
    {
        $this->open_type = $open_type;

        return $this;
    }

    /**
     * Method to set the value of field link
     *
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field click
     *
     * @param integer $click
     * @return $this
     */
    public function setClick($click)
    {
        $this->click = $click;

        return $this;
    }

    /**
     * Method to set the value of field publish_time
     *
     * @param integer $publish_time
     * @return $this
     */
    public function setPublishTime($publish_time)
    {
        $this->publish_time = $publish_time;

        return $this;
    }

    /**
     * Method to set the value of field thumb
     *
     * @param string $thumb
     * @return $this
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Returns the value of field article_id
     *
     * @return integer
     */
    public function getArticleId()
    {
        return $this->article_id;
    }

    /**
     * Returns the value of field cat_id
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->cat_id;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Returns the value of field author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Returns the value of field author_email
     *
     * @return string
     */
    public function getAuthorEmail()
    {
        return $this->author_email;
    }

    /**
     * Returns the value of field keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Returns the value of field article_type
     *
     * @return integer
     */
    public function getArticleType()
    {
        return $this->article_type;
    }

    /**
     * Returns the value of field is_open
     *
     * @return integer
     */
    public function getIsOpen()
    {
        return $this->is_open;
    }

    /**
     * Returns the value of field add_time
     *
     * @return integer
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * Returns the value of field file_url
     *
     * @return string
     */
    public function getFileUrl()
    {
        return $this->file_url;
    }

    /**
     * Returns the value of field open_type
     *
     * @return integer
     */
    public function getOpenType()
    {
        return $this->open_type;
    }

    /**
     * Returns the value of field link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field click
     *
     * @return integer
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * Returns the value of field publish_time
     *
     * @return integer
     */
    public function getPublishTime()
    {
        return $this->publish_time;
    }

    /**
     * Returns the value of field thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("ming.biz");
        $this->setSource("article");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'article';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Article[]|Article|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Article|\Phalcon\Mvc\Model\ResultInterface
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
            'article_id' => 'article_id',
            'cat_id' => 'cat_id',
            'title' => 'title',
            'content' => 'content',
            'author' => 'author',
            'author_email' => 'author_email',
            'keywords' => 'keywords',
            'article_type' => 'article_type',
            'is_open' => 'is_open',
            'add_time' => 'add_time',
            'file_url' => 'file_url',
            'open_type' => 'open_type',
            'link' => 'link',
            'description' => 'description',
            'click' => 'click',
            'publish_time' => 'publish_time',
            'thumb' => 'thumb'
        ];
    }

}
