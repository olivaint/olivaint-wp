import { RichText, useBlockProps } from "@wordpress/block-editor";

export default function Edit({ attributes, setAttributes }) {
  return (
    <RichText
      {...useBlockProps()}
      tagName="h4"
      placeholder="Subtitle"
      value={attributes.content}
      onChange={(content) => setAttributes({ content })}
    />
  );
}
