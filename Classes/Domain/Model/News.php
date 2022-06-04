<?php

namespace WCO\LwoBootstrapNews\Domain\Model;

/**
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * News model
 */
class News extends \GeorgRinger\News\Domain\Model\News
{

    /**
     * @var String
     */
    protected $subheader = '';

    /**
     * @var String
     */
    protected $detailStyle = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\TtContent>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $contentElementsCol2 = null;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\TtContent>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $contentElementsCol3 = null;

    /**
     * Initialize categories and media relation
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->contentElementsCol2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->contentElementsCol3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @return String
     */
    public function getSubheader(): string
    {
        return $this->subheader;
    }

    /**
     * @param String $subheader
     */
    public function setSubheader(string $subheader): void
    {
        $this->subheader = $subheader;
    }

    /**
     * @return String
     */
    public function getDetailStyle(): string
    {
        return $this->detailStyle;
    }

    /**
     * @param String $detailStyle
     */
    public function setDetailStyle(string $detailStyle): void
    {
        $this->detailStyle = $detailStyle;
    }

    /**
     * Get content elements
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getContentElementsCol2()
    {
        if ($this->contentElementsCol2 === null) {
            $this->contentElementsCol2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        }
        return $this->contentElementsCol2;
    }

    /**
     * Set content element list
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $contentElementsCol2 content elements
     */
    public function setContentElementsCol2($contentElementsCol2)
    {
        $this->contentElementsCol2 = $contentElementsCol2;
    }

    /**
     * Adds a content element to the record
     *
     * @param \GeorgRinger\News\Domain\Model\TtContent $contentElement
     */
    public function addContentElementCol2(\GeorgRinger\News\Domain\Model\TtContent $contentElement)
    {
        if ($this->contentElementsCol2 === null) {
            $this->contentElementsCol2 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        }
        $this->contentElementsCol2->attach($contentElement);
    }

    /**
     * Get id list of content elements
     *
     * @return string
     */
    public function getContentElementsCol2IdList()
    {
        return $this->getIdOfContentElementsCol2();
    }

    /**
     * Get translated id list of content elements
     *
     * @return string
     */
    public function getTranslatedContentElementsCol2IdList()
    {
        return $this->getIdOfContentElementsCol2(false);
    }

    /**
     * Collect id list
     *
     * @param bool $original
     * @return string
     */
    protected function getIdOfContentElementsCol2($original = true)
    {
        $idList = [];
        $contentElementsCol2 = $this->getContentElementsCol2();
        if ($contentElementsCol2) {
            foreach ($this->getContentElementsCol2() as $contentElement) {
                $idList[] = $original ? $contentElement->getUid() : $contentElement->_getProperty('_localizedUid');
            }
        }
        return implode(',', $idList);
    }



    /**
     * Get content elements
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getContentElementsCol3()
    {
        if ($this->contentElementsCol3 === null) {
            $this->contentElementsCol3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        }
        return $this->contentElementsCol3;
    }

    /**
     * Set content element list
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $contentElementsCol3 content elements
     */
    public function setContentElementsCol3($contentElementsCol3)
    {
        $this->contentElementsCol3 = $contentElementsCol3;
    }

    /**
     * Adds a content element to the record
     *
     * @param \GeorgRinger\News\Domain\Model\TtContent $contentElement
     */
    public function addContentElementCol3(\GeorgRinger\News\Domain\Model\TtContent $contentElement)
    {
        if ($this->contentElementsCol3 === null) {
            $this->contentElementsCol3 = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        }
        $this->contentElementsCol3->attach($contentElement);
    }

    /**
     * Get id list of content elements
     *
     * @return string
     */
    public function getContentElementsCol3IdList()
    {
        return $this->getIdOfContentElementsCol3();
    }

    /**
     * Get translated id list of content elements
     *
     * @return string
     */
    public function getTranslatedContentElementsCol3IdList()
    {
        return $this->getIdOfContentElementsCol3(false);
    }

    /**
     * Collect id list
     *
     * @param bool $original
     * @return string
     */
    protected function getIdOfContentElementsCol3($original = true)
    {
        $idList = [];
        $contentElementsCol3 = $this->getContentElementsCol3();
        if ($contentElementsCol3) {
            foreach ($this->getContentElementsCol3() as $contentElement) {
                $idList[] = $original ? $contentElement->getUid() : $contentElement->_getProperty('_localizedUid');
            }
        }
        return implode(',', $idList);
    }

}
