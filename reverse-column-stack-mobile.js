wp.domReady(() => {
    wp.blocks.registerBlockStyle('core/columns', {
        name: 'default',
        label: 'Default',
        isDefault: true,
    });

    wp.blocks.registerBlockStyle('core/columns', {
        name: 'reverse-mobile',
        label: 'Reverse On Mobile',
    });

    wp.blocks.registerBlockStyle('core/media-text', {
        name: 'default',
        label: 'Default',
        isDefault: true,
    });

    wp.blocks.registerBlockStyle('core/media-text', {
        name: 'reverse-mobile',
        label: 'Reverse On Mobile',
    });
});
