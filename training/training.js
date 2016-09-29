
var reader = new commonmark.Parser()
  , writer = new commonmark.HtmlRenderer();

function make_entry_html(event)
{
  var md = "";
  if(event.repeat) {
    md += "**Dates**: " + event.nice_date.substring(0, event.nice_date.length-6) + " through " + event.repeat.end_date + "<br>";
    md += "**Time**: " + event.start + " to " + event.end + "<br>";
   
  }
  else {
    md += "**Time**: " + event.nice_date + "; " + event.start + " to " + event.end + "<br>";
  }
  md += "**Location**: " + event.location + "<br>";
  md += event.desc.replace(/\\n/g, "\n")
                  .replace(/%\n/g, "<br>");
  return "<div class=\"well\"><h3>&raquo "
       + event.title
       + "</h3>"
       + writer.render(reader.parse(md))
       + "</div><br><br>";
}

function make_calendar_html(events)
{
  var result = '';
  for(e in events) {
    result += make_entry_html(events[e]);
  }
  return result;
}

function load_recorded_classes()
{
  /* not special enough to do this yet */
}

function load_upcoming_calendar()
{
  $.ajax({
    async:    true, 
    url:      'getCalendar.php',
    type:     'GET',
    dataType: 'json',
    success: function(data, textStatus, xhr) {
      if(data.length > 0) {
        var html = make_calendar_html(data);
        $('#loader').hide();
        $('#upcoming-classes').html(html);
      }
      else {
        $('#loader').hide();              
        $('#upcoming-classes-none').show();
      }
    },
    error: function(xhr, textStatus, errorThrown) {
      console.log('failed. ' + textStatus);
    }
  });
}

