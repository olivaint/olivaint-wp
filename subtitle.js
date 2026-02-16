(function (wp) {
  const el = wp.element.createElement;
  const registerPlugin = wp.plugins.registerPlugin;
  const PluginSidebar = wp.editPost.PluginSidebar;
  const TextControl = wp.components.TextControl;
  const withSelect = wp.data.withSelect;
  const withDispatch = wp.data.withDispatch;
  const compose = wp.compose.compose;

  const SubtitleSidebar = function (props) {
    if (props.postType !== "page") {
      return null;
    }

    return el(
      PluginSidebar,
      {
        name: "subtitle-sidebar",
        title: "Page Subtitle",
        icon: "edit",
      },
      el(TextControl, {
        label: "Subtitle",
        value: props.meta.subtitle || "",
        onChange: function (value) {
          props.setMeta({ subtitle: value });
        },
      }),
    );
  };

  const SubtitleSidebarWithData = compose(
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
  )(SubtitleSidebar);

  registerPlugin("subtitle-plugin", {
    render: SubtitleSidebarWithData,
  });
})(window.wp);
