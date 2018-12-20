<% with $SiteConfig %>
    <% if $GoogleCode %>
        <% if $AnalyticType == 'GTM' %>
            <% include Chrometoaster\GA_GTM\Includes\GTM_head %>
        <% end_if %>
        <% if $AnalyticType == 'UA' %>
            <% include Chrometoaster\GA_GTM\Includes\GA_head %>
        <% end_if %>
    <% end_if %>
<% end_with %>
