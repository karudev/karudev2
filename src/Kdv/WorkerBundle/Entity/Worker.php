<?php

namespace Kdv\WorkerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Worker
 *
 * @ORM\Table(name="worker")
 * @ORM\Entity(repositoryClass="Kdv\WorkerBundle\Repository\WorkerRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Worker
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255)
     */
    private $job;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    private $birthdate;

    /**
     * @var string
     *
     * @ORM\Column(name="picture_url", type="string", length=255)
     */
    private $pictureUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=32, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=5, nullable=true)
     */
    private $zipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="cv_path", type="string", length=255, nullable=true)
     */
    private $cvPath;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_manager", type="boolean")
     */
    private $isManager;

    /**
     * @var string
     *
     * @ORM\Column(name="regime", type="string", length=64)
     */
    private $regime;

    /**
     * @var float
     *
     * @ORM\Column(name="salary", type="float", nullable=true)
     */
    private $salary;

    /**
     * @var float
     *
     * @ORM\Column(name="tjm", type="float", nullable=true)
     */
    private $tjm;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_url", type="string", length=255, nullable=true)
     */
    private $twitterUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin_url", type="string", length=255, nullable=true)
     */
    private $linkedinUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="viadeo_url", type="string", length=255, nullable=true)
     */
    private $viadeoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="github_url", type="string", length=255, nullable=true)
     */
    private $githubUrl;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $picture;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $cv;
    
    
    private $temp;

    

  
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Worker
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Worker
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return Worker
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Worker
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set pictureUrl
     *
     * @param string $pictureUrl
     *
     * @return Worker
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;

        return $this;
    }

    /**
     * Get pictureUrl
     *
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Worker
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Worker
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Worker
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Worker
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Worker
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Worker
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Worker
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set cvPath
     *
     * @param string $cvPath
     *
     * @return Worker
     */
    public function setCvPath($cvPath)
    {
        $this->cvPath = $cvPath;

        return $this;
    }

    /**
     * Get cvPath
     *
     * @return string
     */
    public function getCvPath()
    {
        return $this->cvPath;
    }

    /**
     * Set isManager
     *
     * @param boolean $isManager
     *
     * @return Worker
     */
    public function setIsManager($isManager)
    {
        $this->isManager = $isManager;

        return $this;
    }

    /**
     * Get isManager
     *
     * @return bool
     */
    public function getIsManager()
    {
        return $this->isManager;
    }

    /**
     * Set regime
     *
     * @param string $regime
     *
     * @return Worker
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return string
     */
    public function getRegime()
    {
        return $this->regime;
    }

    /**
     * Set salary
     *
     * @param float $salary
     *
     * @return Worker
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set tjm
     *
     * @param float $tjm
     *
     * @return Worker
     */
    public function setTjm($tjm)
    {
        $this->tjm = $tjm;

        return $this;
    }

    /**
     * Get tjm
     *
     * @return float
     */
    public function getTjm()
    {
        return $this->tjm;
    }

    /**
     * Set twitterUrl
     *
     * @param string $twitterUrl
     *
     * @return Worker
     */
    public function setTwitterUrl($twitterUrl)
    {
        $this->twitterUrl = $twitterUrl;

        return $this;
    }

    /**
     * Get twitterUrl
     *
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->twitterUrl;
    }

    /**
     * Set linkedinUrl
     *
     * @param string $linkedinUrl
     *
     * @return Worker
     */
    public function setLinkedinUrl($linkedinUrl)
    {
        $this->linkedinUrl = $linkedinUrl;

        return $this;
    }

    /**
     * Get linkedinUrl
     *
     * @return string
     */
    public function getLinkedinUrl()
    {
        return $this->linkedinUrl;
    }

    /**
     * Set viadeoUrl
     *
     * @param string $viadeoUrl
     *
     * @return Worker
     */
    public function setViadeoUrl($viadeoUrl)
    {
        $this->viadeoUrl = $viadeoUrl;

        return $this;
    }

    /**
     * Get viadeoUrl
     *
     * @return string
     */
    public function getViadeoUrl()
    {
        return $this->viadeoUrl;
    }

    /**
     * Set githubUrl
     *
     * @param string $githubUrl
     *
     * @return Worker
     */
    public function setGithubUrl($githubUrl)
    {
        $this->githubUrl = $githubUrl;

        return $this;
    }

    /**
     * Get githubUrl
     *
     * @return string
     */
    public function getGithubUrl()
    {
        return $this->githubUrl;
    }
    
    

    
    

    /**
     * Sets Picture.
     *
     * @param UploadedFile $picture
     */
    public function setPicture(UploadedFile $picture = null)
    {
        $this->picture = $picture;
        // check if we have an old image path
        if (is_file($this->getAbsolutePath())) {
            // store the old name to delete after the update
            $this->temp = $this->getAbsolutePath();
            $this->pictureUrl = null;
        } else {
            $this->pictureUrl = 'initial';
        }
    }
    
      /**
     * Get picture.
     *
     * @return UploadedFile
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
    
     /**
     * Sets Cv.
     *
     * @param UploadedFile $cv
     */
    public function setCv(UploadedFile $cv = null)
    {
        $this->cv = $cv;
        // check if we have an old image path
        if (is_file($this->getAbsolutePath())) {
            // store the old name to delete after the update
            $this->temp = $this->getAbsolutePath();
            $this->cvPath = null;
        } else {
            $this->cvPath = 'initial';
        }
    }
    
      /**
     * Get cv.
     *
     * @return UploadedFile
     */
    public function getCv()
    {
        return $this->cv;
    }



    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getPicture()) {
            $this->pictureUrl = $this->id.'.'.$this->getPicture()->guessExtension();
        }
        if (null !== $this->getCv()) {
            $this->cvPath = $this->id.'.'.$this->getCv()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getPicture()) {
            return;
        }
        
        if (null === $this->getCv()) {
            return;
        }

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->temp);
            // clear the temp image path
            $this->temp = null;
        }

        // you must throw an exception here if the file cannot be moved
        // so that the entity is not persisted to the database
        // which the UploadedFile move() method does
        $this->getPicture()->move(
            $this->getUploadRootDir(),
            $this->id.'.'.$this->getPicture()->guessExtension()
        );
        
        $this->getCv()->move(
            $this->getUploadDirCv(),
            $this->id.'.'.$this->getCv()->guessExtension()
        );

        $this->setPicture(null);
        $this->setCv(null);
    }

    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->temp = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if (isset($this->temp)) {
            unlink($this->temp);
        }
    }

    public function getAbsolutePath()
    {
        return null === $this->pictureUrl
            ? null
            : $this->getUploadRootDir().'/'.$this->id.'.'.$this->pictureUrl;
    }
    
    public function getWebPath()
    {
        return null === $this->pictureUrl
            ? null
            : $this->getUploadDir().'/'.$this->pictureUrl;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/workers';
    }
    
    protected function getUploadDirCv()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/cv';
    }
    
}

