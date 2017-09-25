---
layout: page 
title: Advanced Visualization 
permalink: /viz/
---

{% for i in site.data.viz %}

<div class="row">
<div class="three columns" style="text-align: center;" id="name">
  <img src="{{ i.picture }}" class="avatar u-max-full-width">
</div>

<div class="six columns">
{{ i.name }}
  <a href="mailto:{{ i.mail }}">{{ i.mail }}</a>
</div>
</div>

{% endfor %} 
