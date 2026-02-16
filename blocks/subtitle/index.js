(function (blocks, element, blockEditor) {
  var el = element.createElement;
  var RichText = blockEditor.RichText;

  blocks.registerBlockType("olivaint/subtitle", {
    edit: function (props) {
      return el(RichText, {
        tagName: "h4",
        value: props.attributes.content,
        placeholder: "Subtitle",
        onChange: function (value) {
          props.setAttributes({ content: value });
        },
      });
    },
    save: function () {
      return null;
    },
  });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);
