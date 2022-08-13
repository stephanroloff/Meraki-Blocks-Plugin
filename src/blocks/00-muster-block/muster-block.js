import "../../index.scss";
import { registerBlockType } from "@wordpress/blocks";
import ServerSideRender from "@wordpress/server-side-render";

registerBlockType("ourplugin/muster-block", {
  title: "Muster Block",
  icon: "block-default",
  category: "common",
  edit: function () {
    return (
      <div className="muster-block">
        <ServerSideRender
          block="ourplugin/muster-block"
          attributes={{
            showPostCounts: true,
            displayAsDropdown: false,
          }}
        />
      </div>
    );
  },
  save: function () {
    return null;
  },
});