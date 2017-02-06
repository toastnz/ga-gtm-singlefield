<% with $SiteConfig %>
    <% if $GoogleCode %>
        <% if $AnalyticType == 'GTM' %>
            <% include GTM_body %>
        <% end_if %>
        <% if $AnalyticType == 'UA' %>
            <% include GA_body %>
        <% end_if %>
    <% end_if %>
<% end_with %>
