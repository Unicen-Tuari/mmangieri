{include file="header.tpl"}
{include file="navAdmin.tpl"}
<div class="row">
    <div class="col-md-1 col-sm-1 col-xs-1">
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10 ">
        <div class="row">
            <div class="col-md-8 col-xs-8 col-sm-8">
                <h1>{$autor['nombre']}</h1>

                <p>{$autor['biografia']}</p>
            </div>
            <div class="col-md-4 col-xs-4 col-sm-4">
                <img src="{BASEURL}images/{$autor['nombre']}.jpg" class="img-rounded img-responsive center-block" alt="{$autor['nombre']}">
            </div>
        </div>
    </div>
    <div class="col-md-1 col-sm-1 col-xs-1">
    </div>
</div>
{include file="footer.tpl"}
