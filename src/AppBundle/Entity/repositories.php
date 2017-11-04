<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * repositories
 *
 * @ORM\Table(name="repositories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\repositoriesRepository")
 */
class repositories
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
     * @var int
     *
     * @ORM\Column(name="repo_id", type="integer", unique=true)
     */
    private $repoId;

    /**
     * @var string
     *
     * @ORM\Column(name="github_repoid", type="string", length=255)
     */
    private $githubRepoid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=255)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="html_url", type="string", length=255)
     */
    private $htmlUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="git_url", type="string", length=255)
     */
    private $gitUrl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetimetz")
     */
    private $createdOn;


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
     * Set repoId
     *
     * @param integer $repoId
     *
     * @return repositories
     */
    public function setRepoId($repoId)
    {
        $this->repoId = $repoId;

        return $this;
    }

    /**
     * Get repoId
     *
     * @return int
     */
    public function getRepoId()
    {
        return $this->repoId;
    }

    /**
     * Set githubRepoid
     *
     * @param string $githubRepoid
     *
     * @return repositories
     */
    public function setGithubRepoid($githubRepoid)
    {
        $this->githubRepoid = $githubRepoid;

        return $this;
    }

    /**
     * Get githubRepoid
     *
     * @return string
     */
    public function getGithubRepoid()
    {
        return $this->githubRepoid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return repositories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     *
     * @return repositories
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set htmlUrl
     *
     * @param string $htmlUrl
     *
     * @return repositories
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->htmlUrl = $htmlUrl;

        return $this;
    }

    /**
     * Get htmlUrl
     *
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return repositories
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
     * Set gitUrl
     *
     * @param string $gitUrl
     *
     * @return repositories
     */
    public function setGitUrl($gitUrl)
    {
        $this->gitUrl = $gitUrl;

        return $this;
    }

    /**
     * Get gitUrl
     *
     * @return string
     */
    public function getGitUrl()
    {
        return $this->gitUrl;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     *
     * @return repositories
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }
}

