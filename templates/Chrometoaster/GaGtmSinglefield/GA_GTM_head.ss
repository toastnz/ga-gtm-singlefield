<% with $SiteConfig %>
    <% if $GoogleCode %>
        <% if $AnalyticType == 'GTM' %>
            <% include Chrometoaster\GaGtmSinglefield\Includes\GTM_head %>
        <% end_if %>
        <% if $AnalyticType == 'UA' %>
            <% include Chrometoaster\GaGtmSinglefield\Includes\GA_head %>
        <% end_if %>
    <% end_if %>
<% end_with %>
