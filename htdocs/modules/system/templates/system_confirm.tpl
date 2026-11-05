<div class="confirmMsg"><{$msg}><br>
    <form method="post" action="<{$action}>">
	<{$hiddens}>
<{if ($addtoken)}>
    <{$token}>
<{/if}>
    <button type="submit" class="btn btn-primary" name="confirm_submit" value="<{$submit}>" title="<{$submit}>"><i class="fa fa-download" aria-hidden="true"></i> <{$submit}></button>
    <button type="button" class="btn btn-secondary" name="confirm_back" value="<{$smarty.const._CANCEL}>" onclick="history.go(-1);" title="<{$smarty.const._CANCEL}>"><i class="fa fa-times" aria-hidden="true"></i> <{$smarty.const._CANCEL}></button>
    </form>
</div>