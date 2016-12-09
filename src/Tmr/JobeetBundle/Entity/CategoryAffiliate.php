<?php

namespace Tmr\JobeetBundle\Entity;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Tmr\JobeetBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Tmr\JobeetBundle\Entity\Affiliate
     */
    private $affiliate;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \Tmr\JobeetBundle\Entity\Category $category
     *
     * @return CategoryAffiliate
     */
    public function setCategory(\Tmr\JobeetBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Tmr\JobeetBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set affiliate
     *
     * @param \Tmr\JobeetBundle\Entity\Affiliate $affiliate
     *
     * @return CategoryAffiliate
     */
    public function setAffiliate(\Tmr\JobeetBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate
     *
     * @return \Tmr\JobeetBundle\Entity\Affiliate
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}

