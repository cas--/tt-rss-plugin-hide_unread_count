<?php
class Hide_Unread_Count extends Plugin {

    function about() {
        return Array(1.0,
            "Hides feed and global unread counts",
            "Cas",
            false,
            "https://github.com/cas--/tt-rss-plugin-hide_unread_count"
        );
    }

    function api_version() {
        return 2;
    }

    /* Remove feed counter */
    function get_css() {
        return "#feedTree .counterNode {"
            . "display: none;"
            . "}"
            ;
    }

    /* Replace updateTitle function */
    function get_js() {
        return <<<'JS'
;(function(updateTitle) {
    function _updateTitle() {
        var tmp = "Tiny Tiny RSS";
        document.title = tmp;
    }
    window.updateTitle = _updateTitle;
})(updateTitle);
JS;
    }
}
?>
