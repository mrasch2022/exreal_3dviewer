[{$smarty.block.parent}]
 
[{capture append="tabs"}]<a href="#exrealviewer" data-toggle="tab">[{oxmultilang ident="EXREAL_3DVIEWER"}]</a>[{/capture}]
[{capture append="tabsContent"}]
    <div id="technische-details" class="tab-pane[{if $blFirstTab}] active[{/if}]">
        <h2></h2>
 
        <dl>
            <dt></dt>
            <dd>[{$oDetailsProduct->oxarticles__viewer_glb_file->value}]</dd>
 
            <dt></dt>
            <dd>[{$oDetailsProduct->oxarticles__viewer_cam_position_x->value}]</dd>
 
            <dt></dt>
            <dd>[{$oDetailsProduct->oxarticles__viewer_cam_position_y->value}]</dd>
 
            <dt></dt>
            <dd>[{$oDetailsProduct->oxarticles__viewer_cam_position_alpha->value}]</dd>
 
            <dt></dt>
            <dd>[{$oDetailsProduct->oxarticles__viewer_cam_position_beta->value}]</dd>
 
            <dt></dt>
            <dd>[{$oDetailsProduct->oxarticles__viewer_zoom->value}]</dd>
        </dl>
 
    </div>
    [{assign var="blFirstTab" value=false}]
[{/capture}]

