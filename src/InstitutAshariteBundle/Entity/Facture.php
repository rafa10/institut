<?php

namespace InstitutAshariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="InstitutAshariteBundle\Repository\FactureRepository")
 */
class Facture
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_fact", type="datetime")
     */
    private $dateFact;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_inscr", type="float")
     */
    private $fraisInscr;

    /**
     * @var string
     *
     * @ORM\Column(name="detail_mat", type="string", length=255)
     */
    private $detailMat;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    private $total;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float")
     */
    private $solde;


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
     * Set dateFact
     *
     * @param \DateTime $dateFact
     * @return Facture
     */
    public function setDateFact($dateFact)
    {
        $this->dateFact = $dateFact;

        return $this;
    }

    /**
     * Get dateFact
     *
     * @return \DateTime 
     */
    public function getDateFact()
    {
        return $this->dateFact;
    }

    /**
     * Set fraisInscr
     *
     * @param float $fraisInscr
     * @return Facture
     */
    public function setFraisInscr($fraisInscr)
    {
        $this->fraisInscr = $fraisInscr;

        return $this;
    }

    /**
     * Get fraisInscr
     *
     * @return float 
     */
    public function getFraisInscr()
    {
        return $this->fraisInscr;
    }

    /**
     * Set detailMat
     *
     * @param string $detailMat
     * @return Facture
     */
    public function setDetailMat($detailMat)
    {
        $this->detailMat = $detailMat;

        return $this;
    }

    /**
     * Get detailMat
     *
     * @return string 
     */
    public function getDetailMat()
    {
        return $this->detailMat;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Facture
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set solde
     *
     * @param float $solde
     * @return Facture
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float 
     */
    public function getSolde()
    {
        return $this->solde;
    }
}
