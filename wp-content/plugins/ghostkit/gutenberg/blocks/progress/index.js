/**
 * WordPress dependencies
 */
/**
 * Internal dependencies
 */
import getIcon from '../../utils/get-icon';

import metadata from './block.json';
import edit from './edit';
import save from './save';
import deprecated from './deprecated';

const { merge } = window.lodash;

const { __ } = wp.i18n;

const { name } = metadata;

export { metadata, name };

export const settings = {
    ...metadata,
    title: __( 'Progress', 'ghostkit' ),
    description: __( 'Show the progress of your work, skills or earnings.', 'ghostkit' ),
    icon: getIcon( 'block-progress', true ),
    keywords: [
        __( 'progress', 'ghostkit' ),
        __( 'bar', 'ghostkit' ),
    ],
    ghostkit: {
        previewUrl: 'https://ghostkit.io/blocks/progress/',
        customStylesCallback( attributes ) {
            const styles = {
                '--gkt-progress__height': 'undefined' !== typeof attributes.height ? `${ attributes.height }px` : undefined,
                '--gkt-progress__border-radius': 'undefined' !== typeof attributes.borderRadius ? `${ attributes.borderRadius }px` : undefined,
                '--gkt-progress__background-color': attributes.backgroundColor,
                '--gkt-progress--bar__width': 'undefined' !== typeof attributes.percent ? `${ attributes.percent }%` : undefined,
                '--gkt-progress--bar__background-color': attributes.color,
            };

            if ( attributes.hoverColor ) {
                styles[ '&:hover' ] = {
                    '--gkt-progress--bar__background-color': attributes.hoverColor,
                };
            }
            if ( attributes.hoverBackgroundColor ) {
                styles[ '&:hover' ] = merge( styles[ '&:hover' ] || {}, {
                    '--gkt-progress__background-color': attributes.hoverBackgroundColor,
                } );
            }

            return styles;
        },
        supports: {
            styles: true,
            spacings: true,
            display: true,
            scrollReveal: true,
            customCSS: true,
        },
    },
    example: {
        attributes: {
            ghostkitId: 'example-progress',
            ghostkitClassname: 'ghostkit-custom-example-progress',
            className: 'ghostkit-custom-example-progress',
        },
    },
    edit,
    save,
    deprecated,
};
