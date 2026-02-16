import { __ } from "@wordpress/i18n";
import { InspectorControls, useBlockProps } from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";

export default function Edit({ attributes, setAttributes }) {
  const { subtitle } = attributes;

  return (
    <>
      <InspectorControls>
        <PanelBody title={__("Subtitle", "olivaint")}>
          <TextControl
            label={__("Page subtitle", "olivaint")}
            value={subtitle}
            onChange={(value) => setAttributes({ subtitle: value })}
            placeholder={__("Add subtitle…", "olivaint")}
          />
        </PanelBody>
      </InspectorControls>

      <div {...useBlockProps()}>
        <p className="subtitle-preview">
          {subtitle || __("No subtitle yet", "olivaint")}
        </p>
      </div>
    </>
  );
}
