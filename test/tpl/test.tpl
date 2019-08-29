{include file="header.tpl" title="网站标题" table_bgcolor="c0c0c0"}<br>
{$atitle}
{$info}
{$arr.title}{$arr['author']}
{$arr1['con']['title']}{$arr1['con']['author']}

{$articleTitle1|capitalize}
{$articleTitle2|cat:"yesterday."}
{$articletitle3|date_format}
{$articletitle4|default:'111'}
{$articleTitle1|lower}
{$articleTitle1|upper}
{$articleTitle5|nl2br}
{$url|escape:"url"}

{if $name gt 90}
优秀
{elseif $name gt 60}
及格
{else}
不及格
{/if}

{section name=vo loop=$arr3 max=10}
	<h4>{$arr[vo]['title']}</h4>
    <h4>{$arr[vo]['count']}</h4>
    <h4>{$arr[vo]['img']}</h4>
{/section}
<hr />


{foreach item=value from=$arr3}
	{$value.title}<br>
	{$value.count}<br>
	{$value.img}<br>
	<hr>
{foreachelse}
变量值为空
{/foreach}

{foreach $arr4 as $value}
	{$value.title}<br>
	{$value.count}<br>
	{$value.img}<br>
	<hr>
{foreachelse}
变量值为空
{/foreach}


{$myobj->meth1(array('苹果','熟了'))}