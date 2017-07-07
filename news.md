---
layout: page 
title: News <a href="/feed.xml"><span class="white"><i class="fa fa-rss-square" aria-hidden="true"></i></span></a>
permalink: /news/
---
{% for post in site.posts %}
<p>
<span id="post_data" class="date">{{ post.date | date_to_string }}</span>
<span id="post_title"><a href="{{ post.url }}">{{ post.title }}</a></span>
<br>
<span id="post_absract">{{ post.abstract }}</span>
</p>
{% endfor %}

<script type="text/javascript">
var el = document.getElementsByClassName("date")

for(var i = 0, ilen = el.length; i < ilen; i++) {
  var x = el[i].innerHTML
  var event_date = new Date(x)
  var today = new Date()

  if( (event_date - today) > 0) {
	  el[i].innerHTML = '<span class="upcoming">Upcoming - </span>'+el[i].innerHTML
  }

}
</script>
