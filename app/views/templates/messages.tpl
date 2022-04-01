{if $messages->isError()}
    <div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
	{foreach $messages->getErrors() as $err}
		{$err} <br>
    {/foreach}
    </div>
{/if}

{if $messages->isInfo()}
    <div style="background-color: #a4b5bd; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
	Informacje:</br>
    {foreach $messages->getInfos() as $inf}
		{$inf} </br>
	{/foreach}
</div>
{/if}
