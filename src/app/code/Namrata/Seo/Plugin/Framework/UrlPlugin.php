<?php
/**
 * Created by PhpStorm.
 * User: namrata
 * Date: 2019-08-29
 * Time: 16:34
 */

namespace Namrata\Seo\Plugin\Framework;

/**
 * Class UrlPlugin
 * @package Namrata\Seo\Plugin\Framework
 */
class UrlPlugin
{
    /**
     * @param \Magento\Framework\Url $subject
     * @param $result
     * @return string
     */
    public function afterGetRouteUrl(
        \Magento\Framework\Url $subject,
        $result
    ) {
        return rtrim($result, '/');
}
}