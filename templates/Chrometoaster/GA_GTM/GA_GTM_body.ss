<% with $SiteConfig %>
    <% if $GoogleCode %>
        <% if $AnalyticType == 'GTM' %>
            <% include Chrometoaster\GA_GTM\Includes\GTM_body %>
        <% end_if %>
        <% if $AnalyticType == 'UA' %>
            <% include Chrometoaster\GA_GTM\Includes\GA_body %>
        <% end_if %>
    <% end_if %>
<% end_with %>
