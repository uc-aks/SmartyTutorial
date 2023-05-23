
{$smarty.now|date_format}<br><br>
{$smarty.now|date_format:"%D"}<br><br>
{$smarty.now|date_format:$config.date}<br><br>
{$yesterday|date_format}<br><br>
{$yesterday|date_format:"%A, %B %e, %Y"}<br><br>
{$yesterday|date_format:$config.time}