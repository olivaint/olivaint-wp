const { registerPlugin } = wp.plugins;
const { PluginDocumentSettingPanel } = wp.editPost;
const { TextControl } = wp.components;
const { useSelect, useDispatch } = wp.data;

const SubtitlePanel = () => {
  const postType = wp.data.useSelect((select) =>
    select("core/editor").getCurrentPostType(),
  );

  // Only show for pages
  if (postType !== "page") return null;

  const meta = useSelect((select) =>
    select("core/editor").getEditedPostAttribute("meta"),
  );

  const { editPost } = useDispatch("core/editor");

  return (
    <PluginDocumentSettingPanel
      name="subtitle-panel"
      title="Subtitle"
      className="subtitle-panel"
    >
      <TextControl
        label="Page Subtitle"
        value={meta.subtitle || ""}
        onChange={(value) => editPost({ meta: { subtitle: value } })}
      />
    </PluginDocumentSettingPanel>
  );
};

registerPlugin("subtitle-plugin", { render: SubtitlePanel });
