<?php

########################################################################
# Extension Manager/Repository config file for ext "perfectlightbox".
#
# Auto generated 03-05-2011 17:58
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title'        => 'Perfect Lightbox',
    'description'  => 'Click-enlarge images with a lightbox/slimbox based on JQUERY in TYPO3! Single images, imagesets, presentation mode and slideshow supported. Options can be set for each content-element. No XCLASS, just typoscript. Valid html. Flexible configuration. Easy integration into any gallery you like.',
    'category'     => 'plugin',
    'version'      => '5.0.0-dev',
    'state'        => 'stable',
    'author'       => 'Benjamin Niediek',
    'author_email' => 'ben@channel-eight.de',
    'constraints'  => [
        'depends' => [
            'php'   => '7.0.0-7.3.99',
            'typo3' => '8.7.0-10.5.99',
        ],
    ],
    'suggests'     => [],
];
