<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReferralPartner
 *
 * @ORM\Table(name="referral_partners")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReferralPartnerRepository")
 */
class ReferralPartner
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="referralPartnerName", type="string", length=120)
     */
    private $referralPartnerName;

    /**
     * @var string
     *
     * @ORM\Column(name="referralPartnerCode", type="string", length=120)
     */
    private $referralPartnerCode;

    /**
     * @var int
     *
     * @ORM\Column(name="infusionSoftContactId", type="integer")
     */
    private $infusionSoftContactId;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set referralPartnerName
     *
     * @param string $referralPartnerName
     *
     * @return ReferralPartner
     */
    public function setReferralPartnerName($referralPartnerName)
    {
        $this->referralPartnerName = $referralPartnerName;

        return $this;
    }

    /**
     * Get referralPartnerName
     *
     * @return string
     */
    public function getReferralPartnerName()
    {
        return $this->referralPartnerName;
    }

    /**
     * Set referralPartnerCode
     *
     * @param string $referralPartnerCode
     *
     * @return ReferralPartner
     */
    public function setReferralPartnerCode($referralPartnerCode)
    {
        $this->referralPartnerCode = $referralPartnerCode;

        return $this;
    }

    /**
     * Get referralPartnerCode
     *
     * @return string
     */
    public function getReferralPartnerCode()
    {
        return $this->referralPartnerCode;
    }

    /**
     * Set infusionSoftContactId
     *
     * @param integer $infusionSoftContactId
     *
     * @return ReferralPartner
     */
    public function setInfusionSoftContactId($infusionSoftContactId)
    {
        $this->infusionSoftContactId = $infusionSoftContactId;

        return $this;
    }

    /**
     * Get infusionSoftContactId
     *
     * @return int
     */
    public function getInfusionSoftContactId()
    {
        return $this->infusionSoftContactId;
    }

}

