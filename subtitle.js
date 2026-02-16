(function (wp) {
  const el = wp.element.createElement;
  const registerPlugin = wp.plugins.registerPlugin;
  const PluginDocumentSettingPanel = wp.editPost.PluginDocumentSettingPanel;
  const TextControl = wp.components.TextControl;
  const withSelect = wp.data.withSelect;
  const withDispatch = wp.data.withDispatch;
  const compose = wp.compose.compose;

  const SubtitlePanel = function (props) {
    // Only show for pages
    if (props.postType !== "page") {
      return null;
    }

    return el(
      PluginDocumentSettingPanel,
      {
        name: "subtitle-panel",
        title: "Subtitle",
        className: "subtitle-panel",
      },
      el(TextControl, {
        label: "Page Subtitle",
        value: props.meta.subtitle || "",
        onChange: function (value) {
          props.setMeta({ subtitle: value });
        },
      }),
    );
  };

  const SubtitlePanelWithData = compose(
    withSelect(function (select) {
      return {
        postType: select("core/editor").getCurrentPostType(),
        meta: select("core/editor").getEditedPostAttribute("meta") || {},
      };
    }),
    withDispatch(function (dispatch) {
      return {
        setMeta: function (newMeta) {
          dispatch("core/editor").editPost({ meta: newMeta });
        },
      };
    }),
  )(SubtitlePanel);

  registerPlugin("subtitle-plugin", {
    render: SubtitlePanelWithData,
  });
})(window.wp);
