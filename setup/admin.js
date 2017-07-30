var ipTinyMceConfigOriginalFunction = ipTinyMceConfig;
var ipTinyMceConfig = function () {
    var customizedConfig = ipTinyMceConfigOriginalFunction();

    customizedConfig.style_formats = customizedConfig.style_formats
        .map(function(s) {
            // if (s.title === 'Quote') {
            //     s.inline = 'blockquote';
            //     s.block = 'blockquote';
            // }
            return s;
        });

    customizedConfig.style_formats.push({
        title: 'Big',
        block: 'p',
        classes: 'big'
    });

    customizedConfig.style_formats.push({
        title: 'Small',
        block: 'small'
    });

    return customizedConfig;
};
