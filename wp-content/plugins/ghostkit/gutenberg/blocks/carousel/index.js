/**
 * WordPress dependencies
 */
/**
 * Internal dependencies
 */
import getIcon from '../../utils/get-icon';

import deprecated from './deprecated';
import metadata from './block.json';
import edit from './edit';
import save from './save';

const { __ } = wp.i18n;

const { name } = metadata;

export { metadata, name };

export const settings = {
    ...metadata,
    title: __( 'Carousel', 'ghostkit' ),
    description: __( 'Carousel for any type of content – images or other blocks.', 'ghostkit' ),
    icon: getIcon( 'block-carousel', true ),
    keywords: [
        __( 'carousel', 'ghostkit' ),
        __( 'slider', 'ghostkit' ),
    ],
    ghostkit: {
        previewUrl: 'https://ghostkit.io/blocks/carousel/',
        supports: {
            styles: true,
            frame: true,
            spacings: true,
            display: true,
            scrollReveal: true,
            customCSS: true,
        },
    },
    example: {
        attributes: {
            slides: 3,
        },
        innerBlocks: [
            {
                name: 'ghostkit/carousel-slide',
                innerBlocks: [
                    {
                        name: 'core/image',
                        attributes: {
                            sizeSlug: 'large',
                            url: 'https://s.w.org/images/core/5.3/MtBlanc1.jpg',
                        },
                    },
                ],
            }, {
                name: 'ghostkit/carousel-slide',
                innerBlocks: [
                    {
                        name: 'core/image',
                        attributes: {
                            sizeSlug: 'large',
                            url: 'https://s.w.org/images/core/5.3/Windbuchencom.jpg',
                        },
                    },
                ],
            }, {
                name: 'ghostkit/carousel-slide',
            },
        ],
    },
    edit,
    save,
    deprecated,
};
