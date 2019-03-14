<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SejourRepository")
 */
class Sejour
{


    private $DTEFIN;



    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $SEJNO;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $SEJINTITULE;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $SEJMONTANTMBI;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $SEJDTEDEB;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
   private $SEJDUREE;

    public function getId(): ?int
    {
        return $this->SEJNO;
    }

    public function getSEJNO(): ?int
    {
        return $this->SEJNO;
    }

    public function setSEJNO(int $SEJNO): self
    {
        $this->SEJNO = $SEJNO;

        return $this;
    }

    public function getSEJINTITULE(): ?string
    {
        return $this->SEJINTITULE;
    }

    public function setSEJINTITULE(?string $SEJINTITULE): self
    {
        $this->SEJINTITULE = $SEJINTITULE;

        return $this;
    }

    public function getSEJMONTANTMBI()
    {
        return $this->SEJMONTANTMBI;
    }

    public function setSEJMONTANTMBI($SEJMONTANTMBI): self
    {
        $this->SEJMONTANTMBI = $SEJMONTANTMBI;

        return $this;
    }

    public function getSEJDTEDEB(): ?\DateTimeInterface
    {
        return $this->SEJDTEDEB;
    }

    public function setSEJDTEDEB(?\DateTimeInterface $SEJDTEDEB): self
    {
        $this->SEJDTEDEB = $SEJDTEDEB;

        return $this;
    }

    public function getSEJDUREE(): ?int
    {
        return $this->SEJDUREE;
    }

    public function setSEJDUREE(?int $SEJDUREE): self
    {
        $this->SEJDUREE = $SEJDUREE;
        return $this;
    }
/**
   * public function setSEJDUREE(?int $SEJDUREE): self
   * {
   *     $this->SEJDUREE = $SEJDUREE;

   *     return $this;
   * }

   * public function getDTEFIN(): ?int
   * {
   *     return $this ->SEJDTEDEB + $this->SEJDUREE;
   * }
 */
    /**
     * Retourne la date de fin de s�jour
     * @return mixed
     */
    public function _getSejDteFin()
    {   
        return $this->SEJDTEDEB->add(new \DateInterval('P'.$this->SEJDUREE.'D'));
      
    }

    /**
     * Formatage jj-mm-aaaa 
     * @param $pDte : date � formater
     * @return mixed
     */
    public function _getSejDteFormatFR($pDte)
    {
        return substr($pDte,8).substr($pDte,4,4).substr($pDte,0,4);
    }

   
}
