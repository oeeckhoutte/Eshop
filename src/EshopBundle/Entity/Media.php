<?php
//
//namespace EshopBundle\Entity;
//
//use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\validator\Constraints as Assert;
//use Symfony\Component\HttpFoundation\File\UploadedFile;
//
///**
// * Media
// *
// * @ORM\Table(name="media")
// * @ORM\Entity(repositoryClass="EshopBundle\Repository\MediaRepository")
// */
//class Media
//{
//    /**
//     * @ORM\Id
//     * @ORM\Column(type="integer")
//     * @ORM\GeneratedValue(strategy="AUTO")
//     */
//    public $id;
//
//    /**
//     * @ORM\Column(type="string", length=255)
//     * @Assert\NotBlank
//     */
//    public $name;
//
//    /**
//     * @ORM\Column(type="string", length=255, nullable=true)
//     */
//    public $path;
//
//    public function getAbsolutePath()
//    {
//        return null === $this->path
//            ? null
//            : $this->getUploadRootDir().'/'.$this->path;
//    }
//
//    public function getWebPath()
//    {
//        return null === $this->path
//            ? null
//            : $this->getUploadDir().'/'.$this->path;
//    }
//
//    protected function getUploadRootDir()
//    {
//        // the absolute directory path where uploaded
//        // documents should be saved
//        return __DIR__.'/../../../../web/'.$this->getUploadDir();
//    }
//
//    protected function getUploadDir()
//    {
//        // get rid of the __DIR__ so it doesn't screw up
//        // when displaying uploaded doc/image in the view.
//        return 'uploads/documents';
//    }
//}
