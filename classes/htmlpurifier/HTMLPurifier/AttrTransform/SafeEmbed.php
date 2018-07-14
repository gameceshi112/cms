<?php

class HTMLPurifier_AttrTransform_SafeEmbed extends HTMLPurifier_AttrTransform
{
    
    public $name = "SafeEmbed";

    /**
     * @param array $attr
 ier_Context $context
     * @return array
     */
    public function transform($attr, $config, $context)
    {
        $attr['allowscriptaccess'] = 'never';
        $attr['allownetworking'] = 'internal';
        $attr['type'] = 'application/x-shockwave-flash';
        return $attr;
    }
}

// vim: et sw=4 sts=4
