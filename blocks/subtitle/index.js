import { RichText, useBlockProps } from "@wordpress/block-editor";

export default function Edit({ attributes, setAttributes }) {
  return (
    <RichText
      {...useBlockProps()}
      tagName="p"
      placeholder="Subtitle"
      value={attributes.content}
      onChange={(content) => setAttributes({ content })}
    />
  );
}
