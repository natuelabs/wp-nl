/**
 * External dependencies
 */
import classnames from 'classnames/dedupe';

/**
 * Internal dependencies
 */
import ColorPicker from '../../components/color-picker';
import IconPicker from '../../components/icon-picker';
import ApplyFilters from '../../components/apply-filters';
import ImagePicker from '../../components/image-picker';
import getIcon from '../../utils/get-icon';
import dashCaseToTitle from '../../utils/dash-case-to-title';
import {
    hasClass,
    addClass,
    removeClass,
} from '../../utils/classes-replacer';

import ImgAspectRatio32 from './aspect-ratio/aspect-ratio-3-2.png';
import ImgAspectRatio43 from './aspect-ratio/aspect-ratio-4-3.png';
import ImgAspectRatio169 from './aspect-ratio/aspect-ratio-16-9.png';
import ImgAspectRatio219 from './aspect-ratio/aspect-ratio-21-9.png';

/**
 * WordPress dependencies
 */
const {
    applyFilters,
} = wp.hooks;

const { __ } = wp.i18n;

const { Component, Fragment } = wp.element;

const {
    BaseControl,
    PanelBody,
    SelectControl,
    Button,
    ButtonGroup,
    ToggleControl,
    RangeControl,
    TextControl,
    Toolbar,
    Dropdown,
} = wp.components;

const {
    withSelect,
} = wp.data;

const {
    InspectorControls,
    BlockControls,
    MediaUpload,
    BlockAlignmentToolbar,
} = wp.blockEditor;

/**
 * Select poster
 *
 * @param {array} media - media data.
 * @param {function} setAttributes - set attributes function.
 */
function onPosterSelect( media, setAttributes ) {
    setAttributes( {
        poster: '',
        posterSizes: '',
    } );

    wp.media.attachment( media.id ).fetch().then( ( data ) => {
        if ( data && data.sizes ) {
            const { url } = data.sizes[ 'post-thumbnail' ] || data.sizes.medium || data.sizes.medium_large || data.sizes.full;
            if ( url ) {
                setAttributes( {
                    poster: media.id,
                    posterSizes: data.sizes,
                } );
            }
        }
    } );
}

/**
 * Load YouTube / Vimeo poster image
 */
const videoPosterCache = {};
let videoPosterTimeout;
function getVideoPoster( url, cb ) {
    if ( videoPosterCache[ url ] ) {
        cb( videoPosterCache[ url ] );
        return;
    }

    if ( 'undefined' === typeof window.VideoWorker ) {
        cb( '' );
        return;
    }

    clearTimeout( videoPosterTimeout );
    videoPosterTimeout = setTimeout( () => {
        const videoObject = new window.VideoWorker( url );

        if ( videoObject.isValid() ) {
            videoObject.getImageURL( ( videoPosterUrl ) => {
                videoPosterCache[ url ] = videoPosterUrl;
                cb( videoPosterUrl );
            } );
        } else {
            cb( '' );
        }
    }, 500 );
}

/**
 * Block Edit Class.
 */
class BlockEdit extends Component {
    constructor( props ) {
        super( props );

        this.onUpdate = this.onUpdate.bind( this );
        this.getAspectRatioPicker = this.getAspectRatioPicker.bind( this );
    }

    componentDidMount() {
        this.onUpdate();
    }

    componentDidUpdate( prevProps ) {
        const {
            attributes,
            setAttributes,
        } = this.props;

        // Change click action to Fullscreen when used Icon Only style.
        if (
            'plain' === attributes.clickAction
            && attributes.className !== prevProps.attributes.className
            && hasClass( attributes.className, 'is-style-icon-only' )
        ) {
            setAttributes( { clickAction: 'fullscreen' } );
            return;
        }

        // Remove unused classes.
        if (
            attributes.className !== prevProps.attributes.className
            && ! hasClass( attributes.className, 'is-style-icon-only' )
        ) {
            let newClassName = attributes.className;

            newClassName = removeClass( newClassName, 'ghostkit-video-style-icon-only-align-right' );
            newClassName = removeClass( newClassName, 'ghostkit-video-style-icon-only-align-left' );

            if ( attributes.className !== newClassName ) {
                setAttributes( { className: newClassName } );
            }
        }

        this.onUpdate();
    }

    onUpdate() {
        const {
            posterData,
            setAttributes,
            attributes,
        } = this.props;

        // set poster tag to attribute
        if ( attributes.poster && posterData ) {
            setAttributes( { posterTag: posterData } );
        }

        // load YouTube / Vimeo poster
        if ( ! attributes.poster && 'yt_vm_video' === attributes.type && attributes.video ) {
            getVideoPoster( attributes.video, ( url ) => {
                if ( url !== attributes.videoPosterPreview ) {
                    setAttributes( { videoPosterPreview: url } );
                }
            } );
        }
    }

    getAspectRatioPicker() {
        const {
            attributes,
            setAttributes,
        } = this.props;

        const {
            videoAspectRatio,
        } = attributes;

        return (
            <ImagePicker
                label={ __( 'Aspect Ratio', 'ghostkit' ) }
                value={ videoAspectRatio }
                options={ [
                    {
                        value: '16:9',
                        label: __( 'Wide', 'ghostkit' ),
                        image: ImgAspectRatio169,
                    },
                    {
                        value: '21:9',
                        label: __( 'Ultra Wide', 'ghostkit' ),
                        image: ImgAspectRatio219,
                    },
                    {
                        value: '4:3',
                        label: __( 'TV', 'ghostkit' ),
                        image: ImgAspectRatio43,
                    },
                    {
                        value: '3:2',
                        label: __( 'Classic Film', 'ghostkit' ),
                        image: ImgAspectRatio32,
                    },
                ] }
                onChange={ ( value ) => setAttributes( { videoAspectRatio: value } ) }
            />
        );
    }

    render() {
        const {
            attributes,
            setAttributes,
        } = this.props;

        let { className = '' } = this.props;

        const {
            type,
            video,
            videoPosterPreview,
            videoMp4,
            videoOgv,
            videoWebm,
            videoAspectRatio,
            videoVolume,
            videoAutoplay,
            videoAutopause,
            videoLoop,

            iconPlay,
            iconLoading,

            poster,
            posterTag,
            posterSizes,
            posterSize,

            clickAction,
            fullscreenBackgroundColor,
            fullscreenActionCloseIcon,
        } = attributes;

        className = classnames(
            'ghostkit-video',
            className
        );

        className = applyFilters( 'ghostkit.editor.className', className, this.props );

        let styleIconOnlyAlign = 'center';
        if ( hasClass( className, 'ghostkit-video-style-icon-only-align-left' ) ) {
            styleIconOnlyAlign = 'left';
        } else if ( hasClass( className, 'ghostkit-video-style-icon-only-align-right' ) ) {
            styleIconOnlyAlign = 'right';
        }

        let toolbarAspectRatioIcon = getIcon( 'icon-aspect-ratio-16-9' );
        if ( '3:2' === videoAspectRatio ) {
            toolbarAspectRatioIcon = getIcon( 'icon-aspect-ratio-3-2' );
        }
        if ( '4:3' === videoAspectRatio ) {
            toolbarAspectRatioIcon = getIcon( 'icon-aspect-ratio-4-3' );
        }
        if ( '21:9' === videoAspectRatio ) {
            toolbarAspectRatioIcon = getIcon( 'icon-aspect-ratio-21-9' );
        }

        return (
            <Fragment>
                <BlockControls>
                    <Toolbar>
                        <Dropdown
                            renderToggle={ ( { onToggle } ) => (
                                <Button
                                    label={ __( 'Aspect Ratio', 'ghostkit' ) }
                                    icon={ toolbarAspectRatioIcon }
                                    className="components-toolbar__control"
                                    onClick={ onToggle }
                                />
                            ) }
                            renderContent={ () => (
                                <div style={ {
                                    minWidth: 260,
                                } }
                                >
                                    { this.getAspectRatioPicker() }
                                </div>
                            ) }
                        />
                    </Toolbar>
                    { 'yt_vm_video' === type ? (
                        <Toolbar>
                            <TextControl
                                type="url"
                                value={ video }
                                placeholder={ __( 'YouTube / Vimeo URL', 'ghostkit' ) }
                                onChange={ ( value ) => setAttributes( { video: value } ) }
                                className="ghostkit-video-toolbar-url"
                            />
                        </Toolbar>
                    ) : '' }
                </BlockControls>
                <InspectorControls>
                    <PanelBody>
                        <ButtonGroup aria-label={ __( 'Type', 'ghostkit' ) } style={ { marginBottom: 10 } }>
                            {
                                [
                                    {
                                        label: __( 'YouTube / Vimeo', 'ghostkit' ),
                                        value: 'yt_vm_video',
                                    }, {
                                        label: __( 'Self Hosted', 'ghostkit' ),
                                        value: 'video',
                                    },
                                ].map( ( val ) => (
                                    <Button
                                        isSmall
                                        isPrimary={ type === val.value }
                                        isPressed={ type === val.value }
                                        onClick={ () => setAttributes( { type: val.value } ) }
                                        key={ `type_${ val.label }` }
                                    >
                                        { val.label }
                                    </Button>
                                ) )
                            }
                        </ButtonGroup>
                        { 'yt_vm_video' === type
                            && (
                                <TextControl
                                    label={ __( 'Video URL', 'ghostkit' ) }
                                    type="url"
                                    value={ video }
                                    onChange={ ( value ) => setAttributes( { video: value } ) }
                                />
                            ) }

                        { /* Preview Video */ }
                        { 'video' === type && ( videoMp4 || videoOgv || videoWebm ) ? (
                            // eslint-disable-next-line jsx-a11y/media-has-caption
                            <video controls>
                                { videoMp4 ? (
                                    <source src={ videoMp4 } type="video/mp4" />
                                ) : '' }
                                { videoOgv ? (
                                    <source src={ videoOgv } type="video/ogg" />
                                ) : '' }
                                { videoWebm ? (
                                    <source src={ videoWebm } type="video/webm" />
                                ) : '' }
                            </video>
                        ) : '' }

                        { /* Select Videos */ }
                        { 'video' === type && ! videoMp4 ? (
                            <MediaUpload
                                onSelect={ ( media ) => {
                                    setAttributes( {
                                        videoMp4: '',
                                        videoMp4Id: '',
                                    } );
                                    wp.media.attachment( media.id ).fetch().then( ( data ) => {
                                        setAttributes( {
                                            videoMp4: data.url,
                                            videoMp4Id: data.id,
                                        } );
                                    } );
                                } }
                                allowedTypes={ [ 'video/mp4', 'video/m4v' ] }
                                value={ videoMp4 }
                                render={ ( { open } ) => (
                                    <div style={ { marginBottom: 13 } }>
                                        <Button onClick={ open } isPrimary>
                                            { __( 'Select MP4', 'ghostkit' ) }
                                        </Button>
                                    </div>
                                ) }
                            />
                        ) : '' }
                        { 'video' === type && videoMp4 ? (
                            <div>
                                <span>
                                    { videoMp4.substring( videoMp4.lastIndexOf( '/' ) + 1 ) }
                                    { ' ' }
                                </span>
                                <Button
                                    isLink
                                    onClick={ ( e ) => {
                                        setAttributes( {
                                            videoMp4: '',
                                            videoMp4Id: '',
                                        } );
                                        e.preventDefault();
                                    } }
                                >
                                    { __( '(Remove)', 'ghostkit' ) }
                                </Button>
                                <div style={ { marginBottom: 13 } } />
                            </div>
                        ) : '' }
                        { 'video' === type && ! videoOgv ? (
                            <MediaUpload
                                onSelect={ ( media ) => {
                                    setAttributes( {
                                        videoOgv: '',
                                        videoOgvId: '',
                                    } );
                                    wp.media.attachment( media.id ).fetch().then( ( data ) => {
                                        setAttributes( {
                                            videoOgv: data.url,
                                            videoOgvId: data.id,
                                        } );
                                    } );
                                } }
                                allowedTypes={ [ 'video/ogg', 'video/ogv' ] }
                                value={ videoOgv }
                                render={ ( { open } ) => (
                                    <div style={ { marginBottom: 13 } }>
                                        <Button onClick={ open } isPrimary>
                                            { __( 'Select OGV', 'ghostkit' ) }
                                        </Button>
                                    </div>
                                ) }
                            />
                        ) : '' }
                        { 'video' === type && videoOgv ? (
                            <div>
                                <span>
                                    { videoOgv.substring( videoOgv.lastIndexOf( '/' ) + 1 ) }
                                    { ' ' }
                                </span>
                                <Button
                                    isLink
                                    onClick={ ( e ) => {
                                        setAttributes( {
                                            videoOgv: '',
                                            videoOgvId: '',
                                        } );
                                        e.preventDefault();
                                    } }
                                >
                                    { __( '(Remove)', 'ghostkit' ) }
                                </Button>
                                <div style={ { marginBottom: 13 } } />
                            </div>
                        ) : '' }
                        { 'video' === type && ! videoWebm ? (
                            <MediaUpload
                                onSelect={ ( media ) => {
                                    setAttributes( {
                                        videoWebm: '',
                                        videoWebmId: '',
                                    } );
                                    wp.media.attachment( media.id ).fetch().then( ( data ) => {
                                        setAttributes( {
                                            videoWebm: data.url,
                                            videoWebmId: data.id,
                                        } );
                                    } );
                                } }
                                allowedTypes={ [ 'video/webm' ] }
                                value={ videoWebm }
                                render={ ( { open } ) => (
                                    <div style={ { marginBottom: 13 } }>
                                        <Button onClick={ open } isPrimary>
                                            { __( 'Select WEBM', 'ghostkit' ) }
                                        </Button>
                                    </div>
                                ) }
                            />
                        ) : '' }
                        { 'video' === type && videoWebm ? (
                            <div>
                                <span>
                                    { videoWebm.substring( videoWebm.lastIndexOf( '/' ) + 1 ) }
                                    { ' ' }
                                </span>
                                <Button
                                    isLink
                                    onClick={ ( e ) => {
                                        setAttributes( {
                                            videoWebm: '',
                                            videoWebmId: '',
                                        } );
                                        e.preventDefault();
                                    } }
                                >
                                    { __( '(Remove)', 'ghostkit' ) }
                                </Button>
                                <div style={ { marginBottom: 13 } } />
                            </div>
                        ) : '' }
                    </PanelBody>
                    <PanelBody>
                        { this.getAspectRatioPicker() }
                    </PanelBody>
                    <PanelBody>
                        <RangeControl
                            label={ __( 'Volume', 'ghostkit' ) }
                            value={ videoVolume }
                            min="0"
                            max="100"
                            onChange={ ( v ) => setAttributes( { videoVolume: v } ) }
                        />
                    </PanelBody>
                    <PanelBody>
                        <IconPicker
                            label={ __( 'Play Icon', 'ghostkit' ) }
                            value={ iconPlay }
                            onChange={ ( value ) => setAttributes( { iconPlay: value } ) }
                        />
                        <IconPicker
                            label={ __( 'Loading Icon', 'ghostkit' ) }
                            value={ iconLoading }
                            onChange={ ( value ) => setAttributes( { iconLoading: value } ) }
                        />
                        { hasClass( attributes.className, 'is-style-icon-only' ) ? (
                            <BaseControl label={ __( 'Icon Align', 'ghostkit' ) }>
                                <div>
                                    <BlockAlignmentToolbar
                                        value={ styleIconOnlyAlign }
                                        onChange={ ( value ) => {
                                            let newClassName = attributes.className;

                                            newClassName = removeClass( newClassName, 'ghostkit-video-style-icon-only-align-right' );
                                            newClassName = removeClass( newClassName, 'ghostkit-video-style-icon-only-align-left' );

                                            if ( 'left' === value || 'right' === value ) {
                                                newClassName = addClass( newClassName, `ghostkit-video-style-icon-only-align-${ value }` );
                                            }

                                            if ( attributes.className !== newClassName ) {
                                                setAttributes( { className: newClassName } );
                                            }
                                        } }
                                        controls={ [ 'left', 'center', 'right' ] }
                                        isCollapsed={ false }
                                    />
                                </div>
                            </BaseControl>
                        ) : null }
                    </PanelBody>
                    <PanelBody>
                        <BaseControl label={ __( 'Click Action', 'ghostkit' ) }>
                            <div>
                                <ButtonGroup aria-label={ __( 'Click Action', 'ghostkit' ) }>
                                    {
                                        [
                                            {
                                                label: __( 'Plain', 'ghostkit' ),
                                                value: 'plain',
                                            }, {
                                                label: __( 'Fullscreen', 'ghostkit' ),
                                                value: 'fullscreen',
                                            },
                                        ].map( ( val ) => (
                                            <Button
                                                isSmall
                                                isPrimary={ clickAction === val.value }
                                                isPressed={ clickAction === val.value }
                                                disabled={ hasClass( attributes.className, 'is-style-icon-only' ) && 'plain' === val.value }
                                                onClick={ () => setAttributes( { clickAction: val.value } ) }
                                                key={ `clickAction_${ val.label }` }
                                            >
                                                { val.label }
                                            </Button>
                                        ) )
                                    }
                                </ButtonGroup>
                            </div>
                        </BaseControl>
                        { 'fullscreen' === clickAction ? (
                            <Fragment>
                                <ApplyFilters name="ghostkit.editor.controls" attribute="fullscreenBackgroundColor" props={ this.props }>
                                    <ColorPicker
                                        label={ __( 'Fullscreen Background', 'ghostkit' ) }
                                        value={ fullscreenBackgroundColor }
                                        onChange={ ( val ) => setAttributes( { fullscreenBackgroundColor: val } ) }
                                        alpha
                                    />
                                </ApplyFilters>
                                <IconPicker
                                    label={ __( 'Fullscreen Close Icon', 'ghostkit' ) }
                                    value={ fullscreenActionCloseIcon }
                                    onChange={ ( value ) => setAttributes( { fullscreenActionCloseIcon: value } ) }
                                />
                            </Fragment>
                        ) : (
                            <Fragment>
                                <ToggleControl
                                    label={ __( 'Autoplay', 'ghostkit' ) }
                                    help={ __( 'Automatically play video when block reaches the viewport. The video will be play muted due to browser Autoplay policy.', 'ghostkit' ) }
                                    checked={ !! videoAutoplay }
                                    onChange={ ( value ) => setAttributes( { videoAutoplay: value } ) }
                                />
                                <ToggleControl
                                    label={ __( 'Autopause', 'ghostkit' ) }
                                    help={ __( 'Automatically pause video when block out of the viewport.', 'ghostkit' ) }
                                    checked={ !! videoAutopause }
                                    onChange={ ( value ) => setAttributes( { videoAutopause: value } ) }
                                />
                                <ToggleControl
                                    label={ __( 'Loop', 'ghostkit' ) }
                                    checked={ !! videoLoop }
                                    onChange={ ( value ) => setAttributes( { videoLoop: value } ) }
                                />
                            </Fragment>
                        ) }
                    </PanelBody>

                    <PanelBody title={ __( 'Poster Image', 'ghostkit' ) }>
                        { ! poster ? (
                            <MediaUpload
                                onSelect={ ( media ) => {
                                    onPosterSelect( media, setAttributes );
                                } }
                                allowedTypes={ [ 'image' ] }
                                value={ poster }
                                render={ ( { open } ) => (
                                    <Button onClick={ open } isPrimary>
                                        { __( 'Select Image', 'ghostkit' ) }
                                    </Button>
                                ) }
                            />
                        ) : '' }

                        { poster && posterTag ? (
                            <Fragment>
                                <MediaUpload
                                    onSelect={ ( media ) => {
                                        onPosterSelect( media, setAttributes );
                                    } }
                                    allowedTypes={ [ 'image' ] }
                                    value={ poster }
                                    render={ ( { open } ) => (
                                        <BaseControl help={ __( 'Click the image to edit or update', 'ghostkit' ) }>
                                            { /* eslint-disable-next-line jsx-a11y/control-has-associated-label, jsx-a11y/anchor-is-valid */ }
                                            <a
                                                href="#"
                                                onClick={ open }
                                                className="ghostkit-gutenberg-media-upload"
                                                style={ { display: 'block' } }
                                                // eslint-disable-next-line react/no-danger
                                                dangerouslySetInnerHTML={ { __html: posterTag } }
                                            />
                                        </BaseControl>
                                    ) }
                                />
                                <Button
                                    isLink
                                    onClick={ ( e ) => {
                                        setAttributes( {
                                            poster: '',
                                            posterTag: '',
                                            posterSizes: '',
                                        } );
                                        e.preventDefault();
                                    } }
                                    className="button button-secondary"
                                >
                                    { __( 'Remove Image', 'ghostkit' ) }
                                </Button>
                                <div style={ { marginBottom: 13 } } />
                                { posterSizes ? (
                                    <SelectControl
                                        label={ __( 'Size', 'ghostkit' ) }
                                        value={ posterSize }
                                        options={ ( () => {
                                            const result = [];
                                            Object.keys( posterSizes ).forEach( ( k ) => {
                                                result.push( {
                                                    value: k,
                                                    label: dashCaseToTitle( k ),
                                                } );
                                            } );
                                            return result;
                                        } )() }
                                        onChange={ ( v ) => setAttributes( { posterSize: v } ) }
                                    />
                                ) : '' }
                            </Fragment>
                        ) : '' }
                    </PanelBody>
                </InspectorControls>
                <div className={ className } data-video-aspect-ratio={ videoAspectRatio }>
                    { posterTag && ! hasClass( attributes.className, 'is-style-icon-only' ) ? (
                        <div
                            className="ghostkit-video-poster"
                            // eslint-disable-next-line react/no-danger
                            dangerouslySetInnerHTML={ {
                                __html: posterTag,
                            } }
                        />
                    ) : '' }
                    { ! posterTag && 'yt_vm_video' === type && videoPosterPreview && ! hasClass( attributes.className, 'is-style-icon-only' ) ? (
                        <div className="ghostkit-video-poster">
                            <img src={ videoPosterPreview } alt="" />
                        </div>
                    ) : '' }
                    { iconPlay ? (
                        <div className="ghostkit-video-play-icon">
                            <IconPicker.Dropdown
                                onChange={ ( value ) => setAttributes( { iconPlay: value } ) }
                                value={ iconPlay }
                                renderToggle={ ( { onToggle } ) => (
                                    <IconPicker.Preview
                                        onClick={ onToggle }
                                        name={ iconPlay }
                                    />
                                ) }
                            />
                        </div>
                    ) : '' }
                </div>
            </Fragment>
        );
    }
}

export default withSelect( ( select, props ) => {
    const { poster } = props.attributes;

    if ( ! poster ) {
        return {};
    }

    return {
        posterData: select( 'ghostkit/base/images' ).getImageTagData( {
            id: poster,
            size: props.attributes.posterSize,
        } ),
    };
} )( BlockEdit );
