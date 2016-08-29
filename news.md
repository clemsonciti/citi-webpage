---
layout: page 
title: News 
permalink: /news/
---
{% for post in site.posts %}
<p>
<span id="post_data">{{ post.date | date_to_string }}</span>
<span id="post_title"><a href="{{ post.url }}">{{ post.title }}</a></span>
<br>
<span id="post_absract">{{ post.abstract }}</span>
</p>
{% endfor %}
