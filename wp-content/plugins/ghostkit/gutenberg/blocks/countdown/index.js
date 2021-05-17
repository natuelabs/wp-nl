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

const { __ } = wp.i18n;

const { name } = metadata;

export { metadata, name };

export const settings = {
    ...metadata,
    title: __( 'Countdown', 'ghostkit' ),
    description: __( 'Countdown timer for upcoming event.', 'ghostkit' ),
    icon: getIcon( 'block-countdown', true ),
    keywords: [
        __( 'timer', 'ghostkit' ),
        __( 'count', 'ghostkit' ),
        __( 'number', 'ghostkit' ),
    ],
    ghostkit: {
        previewUrl: 'https://ghostkit.io/blocks/countdown/',
        customStylesCallback( attributes ) {
            const styles = {
                '--gkt-countdown--unit-number__font-size': 'undefined' !== typeof attributes.numberFontSize ? `${ attributes.numberFontSize }px` : undefined,
                '--gkt-countdown--unit-number__color': attributes.numberColor,
                '--gkt-countdown--unit-label__font-size': 'undefined' !== typeof attributes.labelFontSize ? `${ attributes.labelFontSize }px` : undefined,
                '--gkt-countdown--unit-label__color': attributes.labelColor,
            };

            return styles;
        },
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
            units: [ 'hours', 'minutes', 'seconds' ],
            unitsAlign: 'center',
            ghostkitId: 'example-countdown',
            ghostkitClassname: 'ghostkit-custom-example-countdown',
            className: 'ghostkit-custom-example-countdown',
        },
    },
    edit,
    save,
    deprecated,
};
