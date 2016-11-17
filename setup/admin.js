var ipTinyMceConfigOriginalFunction = ipTinyMceConfig; 
var ipTinyMceConfig = function () {
    var customizedConfig = ipTinyMceConfigOriginalFunction();
 
    customizedConfig.style_formats.push({
		title: 'Big',
		block: 'p',
		classes: 'big'
	});
 
    return customizedConfig;
};
