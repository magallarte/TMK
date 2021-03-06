<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MemberRepository")
 * @UniqueEntity(
 *  fields={"member_email"},
 *  message="L'email que vous utilisez est déjà utilisé"
 * )
 */

class Member implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $member_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $member_surname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member_address1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member_address2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member_zip_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member_city;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member_tel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email(message="L'email {{ value }}  n'est pas au bon format.")
     */      
    private $member_email;

    /**
     * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank()
     */
    private $member_password;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $member_button_wallet;

    /**
     * @ORM\Column(type="boolean")
     */
    private $member_subscription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member_expertise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $member_level;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Kid", inversedBy="kid_parent_list", cascade={"persist"})
     */
    private $member_kid_list;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $member_kid_count;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Workshop", mappedBy="workshop_trainer")
     */
    private $member_worshopAsTrainer;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Workshop", mappedBy="workshop_trainees_list", cascade={"persist"})
     */
    private $member_worshopAsTrainee;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DonationBag", mappedBy="donationBag_donator")
     */
    private $member_donationBag_list;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DeliveryBag", mappedBy="deliveryBag_buyer")
     */
    private $member_deliveryBag_list;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Role")
     */
    private $member_role;

    public function __construct()
    {
        $this->member_kid_list = new ArrayCollection();
        $this->member_worshopAsTrainer = new ArrayCollection();
        $this->member_worshopAsTrainee = new ArrayCollection();
        $this->member_donationBag_list = new ArrayCollection();
        $this->member_deliveryBag_list = new ArrayCollection();
        $this->member_role = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMemberName(): ?string
    {
        return $this->member_name;
    }

    public function setMemberName(string $member_name): self
    {
        $this->member_name = $member_name;

        return $this;
    }

    public function getMemberSurname(): ?string
    {
        return $this->member_surname;
    }

    public function setMemberSurname(string $member_surname): self
    {
        $this->member_surname = $member_surname;

        return $this;
    }

    public function getMemberAddress1(): ?string
    {
        return $this->member_address1;
    }

    public function setMemberAddress1(?string $member_address1): self
    {
        $this->member_address1 = $member_address1;

        return $this;
    }

    public function getMemberAddress2(): ?string
    {
        return $this->member_address2;
    }

    public function setMemberAddress2(?string $member_address2): self
    {
        $this->member_address2 = $member_address2;

        return $this;
    }

    public function getMemberZipCode(): ?string
    {
        return $this->member_zip_code;
    }

    public function setMemberZipCode(?string $member_zip_code): self
    {
        $this->member_zip_code = $member_zip_code;

        return $this;
    }

    public function getMemberCity(): ?string
    {
        return $this->member_city;
    }

    public function setMemberCity(?string $member_city): self
    {
        $this->member_city = $member_city;

        return $this;
    }

    public function getMemberTel(): ?string
    {
        return $this->member_tel;
    }

    public function setMemberTel(?string $member_tel): self
    {
        $this->member_tel = $member_tel;

        return $this;
    }

    public function getMemberEmail(): ?string
    {
        return $this->member_email;
    }

    public function setMemberEmail(string $member_email): self
    {
        $this->member_email = $member_email;

        return $this;
    }

    public function getMemberPassword(): ?string
    {
        return $this->member_password;
    }

    public function setMemberPassword(string $member_password): self
    {
        $this->member_password = $member_password;

        return $this;
    }

    public function getMemberButtonWallet(): ?int
    {
        return $this->member_button_wallet;
    }

    public function setMemberButtonWallet(?int $member_button_wallet): self
    {
        $this->member_button_wallet = $member_button_wallet;

        return $this;
    }

    public function getMemberSubscription(): ?bool
    {
        return $this->member_subscription;
    }

    public function setMemberSubscription(bool $member_subscription): self
    {
        $this->member_subscription = $member_subscription;

        return $this;
    }

    public function getMemberExpertise(): ?string
    {
        return $this->member_expertise;
    }

    public function setMemberExpertise(?string $member_expertise): self
    {
        $this->member_expertise = $member_expertise;

        return $this;
    }

    public function getMemberLevel(): ?string
    {
        return $this->member_level;
    }

    public function setMemberLevel(?string $member_level): self
    {
        $this->member_level = $member_level;

        return $this;
    }

    /**
     * @return Collection|Kid[]
     */
    public function getMemberKidList(): Collection
    {
        return $this->member_kid_list;
    }

    public function addMemberKidList(Kid $memberKidList): self
    {
        if (!$this->member_kid_list->contains($memberKidList)) {
            $this->member_kid_list[] = $memberKidList;
        }

        return $this;
    }

    public function removeMemberKidList(Kid $memberKidList): self
    {
        if ($this->member_kid_list->contains($memberKidList)) {
            $this->member_kid_list->removeElement($memberKidList);
        }

        return $this;
    }

    public function getMemberKidCount(): ?int
    {
        return $this->member_kid_count;
    }

    public function setMemberKidCount(int $member_kid_count): self
    {
        $this->member_kid_count = $member_kid_count;

        return $this;
    }

    /**
     * @return Collection|Workshop[]
     */
    public function getMemberWorshopAsTrainer(): Collection
    {
        return $this->member_worshopAsTrainer;
    }

    public function addMemberWorshopAsTrainer(Workshop $memberWorshopAsTrainer): self
    {
        if (!$this->member_worshopAsTrainer->contains($memberWorshopAsTrainer)) {
            $this->member_worshopAsTrainer[] = $memberWorshopAsTrainer;
            $memberWorshopAsTrainer->setWorkshopTrainer($this);
        }

        return $this;
    }

    public function removeMemberWorshopAsTrainer(Workshop $memberWorshopAsTrainer): self
    {
        if ($this->member_worshopAsTrainer->contains($memberWorshopAsTrainer)) {
            $this->member_worshopAsTrainer->removeElement($memberWorshopAsTrainer);
            // set the owning side to null (unless already changed)
            if ($memberWorshopAsTrainer->getWorkshopTrainer() === $this) {
                $memberWorshopAsTrainer->setWorkshopTrainer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Workshop[]
     */
    public function getMemberWorshopAsTrainee(): Collection
    {
        return $this->member_worshopAsTrainee;
    }

    public function addMemberWorshopAsTrainee(Workshop $memberWorshopAsTrainee): self
    {
        if (!$this->member_worshopAsTrainee->contains($memberWorshopAsTrainee)) {
            $this->member_worshopAsTrainee[] = $memberWorshopAsTrainee;
            $memberWorshopAsTrainee->addWorkshopTraineesList($this);
        }

        return $this;
    }

    public function removeMemberWorshopAsTrainee(Workshop $memberWorshopAsTrainee): self
    {
        if ($this->member_worshopAsTrainee->contains($memberWorshopAsTrainee)) {
            $this->member_worshopAsTrainee->removeElement($memberWorshopAsTrainee);
            $memberWorshopAsTrainee->removeWorkshopTraineesList($this);
        }

        return $this;
    }

    /**
     * @return Collection|DonationBag[]
     */
    public function getMemberDonationBagList(): Collection
    {
        return $this->member_donationBag_list;
    }

    public function addMemberDonationBagList(DonationBag $memberDonationBagList): self
    {
        if (!$this->member_donationBag_list->contains($memberDonationBagList)) {
            $this->member_donationBag_list[] = $memberDonationBagList;
            $memberDonationBagList->setDonationBagDonator($this);
        }

        return $this;
    }

    public function removeMemberDonationBagList(DonationBag $memberDonationBagList): self
    {
        if ($this->member_donationBag_list->contains($memberDonationBagList)) {
            $this->member_donationBag_list->removeElement($memberDonationBagList);
            // set the owning side to null (unless already changed)
            if ($memberDonationBagList->getDonationBagDonator() === $this) {
                $memberDonationBagList->setDonationBagDonator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|DeliveryBag[]
     */
    public function getMemberDeliveryBagList(): Collection
    {
        return $this->member_deliveryBag_list;
    }

    public function addMemberDeliveryBagList(DeliveryBag $memberDeliveryBagList): self
    {
        if (!$this->member_deliveryBag_list->contains($memberDeliveryBagList)) {
            $this->member_deliveryBag_list[] = $memberDeliveryBagList;
            $memberDeliveryBagList->setDeliveryBagBuyer($this);
        }

        return $this;
    }

    public function removeMemberDeliveryBagList(DeliveryBag $memberDeliveryBagList): self
    {
        if ($this->member_deliveryBag_list->contains($memberDeliveryBagList)) {
            $this->member_deliveryBag_list->removeElement($memberDeliveryBagList);
            // set the owning side to null (unless already changed)
            if ($memberDeliveryBagList->getDeliveryBagBuyer() === $this) {
                $memberDeliveryBagList->setDeliveryBagBuyer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Role[]
     */
    public function getMemberRole(): Collection
    {
        return $this->member_role;
    }

    public function addMemberRole(Role $memberRole): self
    {
        if (!$this->member_role->contains($memberRole)) {
            $this->member_role[] = $memberRole;
        }

        return $this;
    }

    public function setMemberRole(Role $memberRole): self
    {
        return $this->addMemberRole($memberRole);
    }

    public function removeMemberRole(Role $memberRole): self
    {
        if ($this->member_role->contains($memberRole)) {
            $this->member_role->removeElement($memberRole);
        }

        return $this;
    }

    // Méthodes liées à la UserInterface

    public function getUserName(): ?string
    {
        return $this->member_email;
    }

    public function getPassword(): ?string
    {
        return $this->member_password;
    }

    public function setPassword(string $member_password): self
    {
        $this->member_password = $member_password;

        return $this;
    }

    public function eraseCredentials() {}

    public function getSalt() {}

    public function getRoles()
    {
        return array('ROLE_USER');
    }
}
