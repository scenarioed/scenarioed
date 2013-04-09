<?php

namespace ScenarioEd\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ScenarioEd\ProjectBundle\Entity\ProjectRepository")
 */
class Project
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="repository_uri", type="string", length=255)
     */
    private $repository_uri;


    /**
     * @var string
     *
     * @ORM\Column(name="project_name", type="string", length=255)
     */
    private $project_name;

    /**
     * @var string
     *
     * @ORM\Column(name="project_description", type="text")
     */
    private $project_description;

    /**
     * @var string
     *
     * @ORM\Column(name="base_url", type="string", length=255)
     */
    private $base_url;

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
     * Set repository_uri
     *
     * @param string $repositoryUri
     * @return Project
     */
    public function setRepositoryUri($repositoryUri)
    {
        $this->repository_uri = $repositoryUri;
    
        return $this;
    }

    /**
     * Get repository_uri
     *
     * @return string 
     */
    public function getRepositoryUri()
    {
        return $this->repository_uri;
    }

    /**
     * Set project_name
     *
     * @param string $projectName
     * @return Project
     */
    public function setProjectName($projectName)
    {
        $this->project_name = $projectName;

        return $this;
    }


    /**
     * Get project_name
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->project_name;
    }


    /**
     * Set project_description
     *
     * @param string $projectDescription
     * @return Project
     */
    public function setProjectDescription($projectDescription)
    {
        $this->project_description = $projectDescription;

        return $this;
    }

    /**
     * Get project_description
     *
     * @return string 
     */
    public function getProjectDescription()
    {
        return $this->project_description;
    }

    /**
     * Set base_url
     *
     * @param string $baseUrl
     * @return Project
     */
    public function setBaseUrl($baseUrl)
    {
        $this->base_url = $baseUrl;
    
        return $this;
    }

    /**
     * Get base_url
     *
     * @return string 
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }
}