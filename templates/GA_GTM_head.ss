<% with $SiteConfig %>
    <% if $GoogleCode %>
        <% if $AnalyticType == 'GTM' %>
            <% include GTM_head %>
        <% end_if %>
        <% if $AnalyticType == 'UA' %>
            <% include GA_head %>
        <% end_if %>
    <% end_if %>
<% end_with %>
