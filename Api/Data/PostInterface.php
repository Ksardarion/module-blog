<?php

namespace Magefan\Blog\Api\Data;

/**
 * Blog Post interface.
 * @api
 * @since 100.0.2
 */
interface PostInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const POST_ID                  = 'post_id';
    const IDENTIFIER               = 'identifier';
    const SECRET                   = 'secret';
    const TITLE                    = 'title';
    const PAGE_LAYOUT              = 'page_layout';
    const META_TITLE               = 'meta_title';
    const META_KEYWORDS            = 'meta_keywords';
    const META_DESCRIPTION         = 'meta_description';
    const OG_TITLE                 = 'og_title';
    const OG_DESCRIPTION           = 'og_description';
    const OG_IMG                   = 'og_img';
    const OG_TYPE                  = 'og_type';
    const CONTENT_HEADING          = 'content_heading';
    const CONTENT                  = 'content';
    const CREATION_TIME            = 'creation_time';
    const UPDATE_TIME              = 'update_time';
    const PUBLISH_TIME             = 'publish_time';
    const LAYOUT_UPDATE_XML        = 'layout_update_xml';
    const CUSTOM_THEME             = 'custom_theme';
    const CUSTOM_ROOT_TEMPLATE     = 'custom_root_template';
    const CUSTOM_LAYOUT_UPDATE_XML = 'custom_layout_update_xml';
    const CUSTOM_THEME_FROM        = 'custom_theme_from';
    const CUSTOM_THEME_TO          = 'custom_theme_to';
    const MEDIA_GALLERY            = 'media_gallery';
    const IS_ACTIVE                = 'is_active';
    const INCLUDE_IN_RECENT        = 'include_in_recent';
    const POSITION                 = 'position';
    const FEATURED_IMG             = 'featured_img';
    const AUTHOR_ID                = 'author_id';
    const VIEWS_COUNT              = 'views_count';
    const IS_RECENT_POST_SKIP      = 'is_recent_post_skip';
    const SHORT_DESCRIPTION        = 'short_description';

    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get identifier
     *
     * @return string
     */
    public function getIdentifier();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get page layout
     *
     * @return string|null
     */
    public function getPageLayout();

    /**
     * Get meta title
     *
     * @return string|null
     * @since 101.0.0
     */
    public function getMetaTitle();

    /**
     * Get meta keywords
     *
     * @return string|null
     */
    public function getMetaKeywords();

    /**
     * Get meta description
     *
     * @return string|null
     */
    public function getMetaDescription();

    /**
     * Get og title
     *
     * @return string|null
     */
    public function getOgTitle();

    /**
     * Get og description
     *
     * @return string|null
     */
    public function getOgDescription();

    /**
     * Get og img
     *
     * @return string|null
     */
    public function getOgImg();

    /**
     * Get og type
     *
     * @return string|null
     */
    public function getOgType();

    /**
     * Get content heading
     *
     * @return string|null
     */
    public function getContentHeading();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Get publish time
     *
     * @return string|null
     */
    public function getPublishTime();

    /**
     * Get sort order
     *
     * @return string|null
     */
    public function getSortOrder();

    /**
     * Get layout update xml
     *
     * @return string|null
     */
    public function getLayoutUpdateXml();

    /**
     * Get custom theme
     *
     * @return string|null
     */
    public function getCustomTheme();

    /**
     * Get custom root template
     *
     * @return string|null
     */
    public function getCustomRootTemplate();

    /**
     * Get custom layout update xml
     *
     * @return string|null
     */
    public function getCustomLayoutUpdateXml();

    /**
     * Get custom theme from
     *
     * @return string|null
     */
    public function getCustomThemeFrom();

    /**
     * Get custom theme to
     *
     * @return string|null
     */
    public function getCustomThemeTo();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Get include in recent
     *
     * @return string|null
     */
    public function getIncludeInRecent();

    /**
     * Get position
     *
     * @return string|null
     */
    public function getPosition();

    /**
     * Get featured img
     *
     * @return string|null
     */
    public function getFeaturedImg();

    /**
     * Get author id
     *
     * @return string|null
     */
    public function getAuthorId();

    /**
     * Get media gallery
     *
     * @return string|null
     */
    public function getMediaGallery();

    /**
     * Get secret
     *
     * @return string|null
     */
    public function getSecret();

    /**
     * Get views count
     *
     * @return string|null
     */
    public function getViewsCount();

    /**
     * Get is recent posts skip
     *
     * @return string|null
     */
    public function getIsRecentPostsSkip();

    /**
     * Get short content
     * @return string|null
     */
    public function getShortContent();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setId($id);

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setIdentifier($identifier);

    /**
     * Set title
     *
     * @param string $title
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setTitle($title);

    /**
     * Set page layout
     *
     * @param string $pageLayout
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setPageLayout($pageLayout);

    /**
     * Set meta title
     *
     * @param string $metaTitle
     * @return \Magefan\Blog\Api\Data\PostInterface
     * @since 101.0.0
     */
    public function setMetaTitle($metaTitle);

    /**
     * Set meta keywords
     *
     * @param string $metaKeywords
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setMetaKeywords($metaKeywords);

    /**
     * Set meta description
     *
     * @param string $metaDescription
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setMetaDescription($metaDescription);

    /**
     * Set og title
     *
     * @param string $ogTitle
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setOgTitle($ogTitle);

    /**
     * Set og description
     *
     * @param string$ogDescription
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setOgDescription($ogDescription);

    /**
     * Set og img
     *
     * @param string $ogImg
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setOgImg($ogImg);

    /**
     * Set og type
     *
     * @param string $ogType
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setOgType($ogType);

    /**
     * Set content heading
     *
     * @param string $contentHeading
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setContentHeading($contentHeading);

    /**
     * Set content
     *
     * @param string $content
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setContent($content);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set publish time
     *
     * @param string $publishTime
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setPublishTime($publishTime);

    /**
     * Set include in recent
     *
     * @param string $includeInRecent
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setIncludeInRecent($includeInRecent);

    /**
     * Set position
     *
     * @param string $position
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setPosition($position);

    /**
     * Set featured img
     *
     * @param string $featuredImg
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setFeaturedImg($featuredImg);

    /**
     * Set author id
     *
     * @param string $authorId
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setAuthorId($authorId);

    /**
     * Set media gallery
     *
     * @param string $mediaGallery
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setMediaGallery($mediaGallery);

    /**
     * Set secret
     *
     * @param string $secret
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setSecret($secret);

    /**
     * Set views count
     *
     * @param string $viewsCount
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setViewsCount($viewsCount);

    /**
     * Set is recent posts skip
     *
     * @param string $isRecentPostsSkip
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setIsRecentPostsSkip($isRecentPostsSkip);

    /**
     * Set short content
     *
     * @param string $shortContent
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setShortContent($shortContent);

    /**
     * Set sort order
     *
     * @param string $sortOrder
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setSortOrder($sortOrder);

    /**
     * Set layout update xml
     *
     * @param string $layoutUpdateXml
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setLayoutUpdateXml($layoutUpdateXml);

    /**
     * Set custom theme
     *
     * @param string $customTheme
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setCustomTheme($customTheme);

    /**
     * Set custom root template
     *
     * @param string $customRootTemplate
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setCustomRootTemplate($customRootTemplate);

    /**
     * Set custom layout update xml
     *
     * @param string $customLayoutUpdateXml
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setCustomLayoutUpdateXml($customLayoutUpdateXml);

    /**
     * Set custom theme from
     *
     * @param string $customThemeFrom
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setCustomThemeFrom($customThemeFrom);

    /**
     * Set custom theme to
     *
     * @param string $customThemeTo
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setCustomThemeTo($customThemeTo);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     * @return \Magefan\Blog\Api\Data\PostInterface
     */
    public function setIsActive($isActive);
}
