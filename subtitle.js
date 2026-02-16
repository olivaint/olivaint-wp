(function (wp) {
  const el = wp.element.createElement;
  const registerPlugin = wp.plugins.registerPlugin;
  const PluginDocumentSettingPanel = wp.editPost.PluginDocumentSettingPanel;
  const TextControl = wp.components.TextControl;
  const useSelect = wp.data.useSelect;
  const useDispatch = wp.data.useDispatch;

  const SubtitlePanel = function () {
    // Get post type
    const postType = useSelect(function (select) {
      return select("core/editor").getCurrentPostType();
    }, []);

    // Only show for pages
    if (postType !== "page") {
      return null;
    }

    // Get meta
    const meta = useSelect(function (select) {
      return select("core/editor").getEditedPostAttribute("meta") || {};
    }, []);

    const { editPost } = useDispatch("core/editor");

    return el(
      PluginDocumentSettingPanel,
      {
        name: "subtitle-panel",
        title: "Subtitle",
        className: "subtitle-panel",
      },
      el(TextControl, {
        label: "Page Subtitle",
        value: meta.subtitle || "",
        onChange: function (value) {
          editPost({ meta: { subtitle: value } });
        },
      }),
    );
  };

  registerPlugin("subtitle-plugin", {
    render: SubtitlePanel,
  });
})(window.wp);
